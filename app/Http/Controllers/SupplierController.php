<?php

namespace App\Http\Controllers;

use App\Models\SupplierModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SupplierController extends Controller
{
    public function index()
    {
        return view('supplier.index');
    }

    public function list()
    {
        $suppliers = SupplierModel::select('supplier_id', 'supplier_kode', 'supplier_nama', 'supplier_alamat');

        return DataTables::of($suppliers)
            ->addIndexColumn()
            ->addColumn('aksi', fn ($supplier) => view('supplier.partials.aksi', ['supplier' => $supplier])->render())
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        return view('supplier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'supplier_kode'   => 'required|string|max:10|unique:m_supplier,supplier_kode',
            'supplier_nama'   => 'required|string|max:100',
            'supplier_alamat' => 'required|string|max:255',
        ]);

        SupplierModel::create($request->only(['supplier_kode', 'supplier_nama', 'supplier_alamat']));

        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil disimpan');
    }

    public function show(string $id)
    {
        $supplier = SupplierModel::findOrFail($id);
        return view('supplier.show', compact('supplier'));
    }

    public function edit(string $id)
    {
        $supplier = SupplierModel::findOrFail($id);
        return view('supplier.edit', compact('supplier'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'supplier_kode'   => 'required|string|max:10|unique:m_supplier,supplier_kode,' . $id . ',supplier_id',
            'supplier_nama'   => 'required|string|max:100',
            'supplier_alamat' => 'required|string|max:255',
        ]);

        $supplier = SupplierModel::findOrFail($id);
        $supplier->update($request->only(['supplier_kode', 'supplier_nama', 'supplier_alamat']));

        return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil diubah');
    }

    public function destroy(string $id)
    {
        $supplier = SupplierModel::find($id);
        if (!$supplier) {
            return redirect()->route('supplier.index')->with('error', 'Data supplier tidak ditemukan');
        }

        try {
            $supplier->delete();
            return redirect()->route('supplier.index')->with('success', 'Data supplier berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('supplier.index')->with('error', 'Data supplier gagal dihapus karena masih terkait dengan data lain');
        }
    }
}