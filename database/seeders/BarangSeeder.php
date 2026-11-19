<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $barang = [
            ['barang_kode' => 'BRG001', 'barang_nama' => 'Makaroni Pedas', 'kategori_id' => 1, 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_kode' => 'BRG002', 'barang_nama' => 'Keripik Singkong', 'kategori_id' => 1, 'harga_beli' => 6000, 'harga_jual' => 8000],
            ['barang_kode' => 'BRG003', 'barang_nama' => 'Kerupuk Udang', 'kategori_id' => 1, 'harga_beli' => 7000, 'harga_jual' => 9000],

            ['barang_kode' => 'BRG004', 'barang_nama' => 'Air Mineral', 'kategori_id' => 2, 'harga_beli' => 2500, 'harga_jual' => 4000],
            ['barang_kode' => 'BRG005', 'barang_nama' => 'Teh Botol', 'kategori_id' => 2, 'harga_beli' => 4000, 'harga_jual' => 6000],
            ['barang_kode' => 'BRG006', 'barang_nama' => 'Jus Jeruk', 'kategori_id' => 2, 'harga_beli' => 5000, 'harga_jual' => 7000],

            ['barang_kode' => 'BRG007', 'barang_nama' => 'Mouse', 'kategori_id' => 3, 'harga_beli' => 45000, 'harga_jual' => 60000],
            ['barang_kode' => 'BRG008', 'barang_nama' => 'Keyboard', 'kategori_id' => 3, 'harga_beli' => 80000, 'harga_jual' => 100000],
            ['barang_kode' => 'BRG009', 'barang_nama' => 'Flashdisk', 'kategori_id' => 3, 'harga_beli' => 40000, 'harga_jual' => 55000],

            ['barang_kode' => 'BRG010', 'barang_nama' => 'Sapu', 'kategori_id' => 4, 'harga_beli' => 15000, 'harga_jual' => 20000],
            ['barang_kode' => 'BRG011', 'barang_nama' => 'Tempat Sampah', 'kategori_id' => 4, 'harga_beli' => 20000, 'harga_jual' => 27000],
            ['barang_kode' => 'BRG012', 'barang_nama' => 'Ember', 'kategori_id' => 4, 'harga_beli' => 12000, 'harga_jual' => 18000],

            ['barang_kode' => 'BRG013', 'barang_nama' => 'Buku Tulis', 'kategori_id' => 5, 'harga_beli' => 3000, 'harga_jual' => 5000],
            ['barang_kode' => 'BRG014', 'barang_nama' => 'Pulpen', 'kategori_id' => 5, 'harga_beli' => 2000, 'harga_jual' => 3500],
            ['barang_kode' => 'BRG015', 'barang_nama' => 'Pensil', 'kategori_id' => 5, 'harga_beli' => 1500, 'harga_jual' => 2500],
        ];

        foreach ($barang as $item) {
            DB::table('m_barang')->insert($item + [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}