<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('t_penjualan')->insert([
                'user_id' => 1,
                'pembeli' => fake()->name(),
                'penjualan_kode' => 'PJ' . str_pad($i, 4, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => fake()->dateTimeBetween('-1 month', 'now'),
            ]);
        }
    }
}