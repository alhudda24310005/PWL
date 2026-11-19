<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 15; $i++) {
            DB::table('t_stok')->insert([
                'supplier_id' => (($i - 1) % 3) + 1,
                'barang_id' => $i,
                'user_id' => 1,
                'stok_tanggal' => fake()->dateTimeBetween('-1 month', 'now'),
                'stok_jumlah' => 100,
            ]);
        }
    }
}