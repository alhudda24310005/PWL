<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function list()
    {
        $users = UserModel::select('user_id', 'username', 'nama', 'level_id')
            ->with('level');

        return DataTables::of($users)
            ->addIndexColumn()
            ->addColumn('aksi', fn ($user) => view('user.partials.aksi', ['user' => $user])->render())
            ->rawColumns(['aksi'])
            ->make(true);
    }

    public function create()
    {
        $levels = LevelModel::all();
        return view('user.create', compact('levels'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:3|unique:m_user,username',
            'nama'     => 'required|string|max:100',
            'password' => 'required|min:5',
            'level_id' => 'required|integer',
        ]);

        UserModel::create([
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id,
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil disimpan');
    }

    public function show(string $id)
    {
        $user = UserModel::with('level')->findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function edit(string $id)
    {
        $user = UserModel::findOrFail($id);
        $levels = LevelModel::all();
        return view('user.edit', compact('user', 'levels'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'username' => 'required|string|min:3|unique:m_user,username,' . $id . ',user_id',
            'nama'     => 'required|string|max:100',
            'password' => 'nullable|min:5',
            'level_id' => 'required|integer',
        ]);

        $user = UserModel::findOrFail($id);
        $user->update([
            'username' => $request->username,
            'nama'     => $request->nama,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
            'level_id' => $request->level_id,
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil diubah');
    }

    public function destroy(string $id)
    {
        $user = UserModel::find($id);
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'Data user tidak ditemukan');
        }

        try {
            $user->delete();
            return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus');
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('user.index')->with('error', 'Data user gagal dihapus karena masih terkait dengan data lain');
        }
    }
}