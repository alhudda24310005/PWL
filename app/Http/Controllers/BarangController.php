<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BarangController extends Controller
{
    public function index()
    {
        $kategoris = KategoriModel::all();
        return view('barang.index', compact('kategoris'));
    }

    public function list(Request $request)
    {
        $barangs = BarangModel::select('barang_id', 'kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual')
            ->with('kategori')
            ->when($request->kategori_id, fn ($query, $kategoriId) => $query->where('kategori_id', $kategoriId));

        return DataTables::of($barangs)
            ->addIndexColumn()
            ->editColumn('harga_beli', fn ($barang) => 'Rp ' . number_format($barang->harga_beli, 0, ',', '.'))
            ->editColumn('harga_jual', fn ($barang) => 'Rp ' . number_format($barang->harga_jual, 0, ',', '.'))
            ->addColumn('aksi', fn ($barang) => view('barang.partials.aksi', ['barang' => $barang])->render())
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        $kategoris = KategoriModel::all();
        return view('barang.create', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required|integer',
            'barang_kode' => 'required|string|max:10|unique:m_barang,barang_kode',
            'barang_nama' => 'required|string|max:100',
            'harga_beli'  => 'required|integer|min:0',
            'harga_jual'  => 'required|integer|min:0',
        ]);

        BarangModel::create($request->only(['kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual']));

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil disimpan');
    }

    public function show(string $id)
    {
        $barang = BarangModel::with('kategori')->findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    public function edit(string $id)
    {
        $barang = BarangModel::findOrFail($id);
        $kategoris = KategoriModel::all();
        return view('barang.edit', compact('barang', 'kategoris'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori_id' => 'required|integer',
            'barang_kode' => 'required|string|max:10|unique:m_barang,barang_kode,' . $id . ',barang_id',
            'barang_nama' => 'required|string|max:100',
            'harga_beli'  => 'required|integer|min:0',
            'harga_jual'  => 'required|integer|min:0',
        ]);

        $barang = BarangModel::findOrFail($id);
        $barang->update($request->only(['kategori_id', 'barang_kode', 'barang_nama', 'harga_beli', 'harga_jual']));

        return redirect()->route('barang.index')->with('success', 'Data barang berhasil diubah');
    }

    public function destroy(string $id)
    {
        $barang = BarangModel::find($id);
        if (!$barang) {
            return redirect()->route('barang.index')->with('error', 'Data barang tidak ditemukan');
        }

        try {
            $barang->delete();
            return redirect()->route('barang.index')->with('success', 'Data barang berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('barang.index')->with('error', 'Data barang gagal dihapus karena masih terkait dengan data lain');
        }
    }
}