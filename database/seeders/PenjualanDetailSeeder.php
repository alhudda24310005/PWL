<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {

                $barangId = (($i - 1) * 3 + $j - 1) % 15 + 1;

                $barang = DB::table('m_barang')
                    ->where('barang_id', $barangId)
                    ->first();

                DB::table('t_penjualan_detail')->insert([
                    'penjualan_id' => $i,
                    'barang_id' => $barangId,
                    'harga' => $barang->harga_jual,
                    'jumlah' => fake()->numberBetween(1, 5),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}