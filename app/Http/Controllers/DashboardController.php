<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use App\Models\KategoriModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('dashboard', [
            'jumlahUser'      => UserModel::count(),
            'jumlahKategori'  => KategoriModel::count(),
            'jumlahBarang'    => BarangModel::count(),
            // gunakan PenjualanModel::count() jika model sudah dibuat (tugas Jobsheet 04)
            'jumlahPenjualan' => DB::table('t_penjualan')->count(),
        ]);
    }
}