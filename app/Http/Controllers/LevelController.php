<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LevelController extends Controller
{
    public function index()
    {
        return view('level.index');
    }

    public function list()
    {
        $levels = LevelModel::select('level_id', 'level_kode', 'level_nama');

        return DataTables::of($levels)
            ->addIndexColumn()
            ->addColumn('aksi', fn ($level) => view('level.partials.aksi', ['level' => $level])->render())
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        return view('level.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'level_kode' => 'required|string|max:10|unique:m_level,level_kode',
            'level_nama' => 'required|string|max:100',
        ]);

        LevelModel::create($request->only(['level_kode', 'level_nama']));

        return redirect()->route('level.index')->with('success', 'Data level berhasil disimpan');
    }

    public function show(string $id)
    {
        $level = LevelModel::findOrFail($id);
        return view('level.show', compact('level'));
    }

    public function edit(string $id)
    {
        $level = LevelModel::findOrFail($id);
        return view('level.edit', compact('level'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'level_kode' => 'required|string|max:10|unique:m_level,level_kode,' . $id . ',level_id',
            'level_nama' => 'required|string|max:100',
        ]);

        $level = LevelModel::findOrFail($id);
        $level->update($request->only(['level_kode', 'level_nama']));

        return redirect()->route('level.index')->with('success', 'Data level berhasil diubah');
    }

    public function destroy(string $id)
    {
        $level = LevelModel::find($id);
        if (!$level) {
            return redirect()->route('level.index')->with('error', 'Data level tidak ditemukan');
        }

        try {
            $level->delete();
            return redirect()->route('level.index')->with('success', 'Data level berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('level.index')->with('error', 'Data level gagal dihapus karena masih terkait dengan data lain');
        }
    }
}