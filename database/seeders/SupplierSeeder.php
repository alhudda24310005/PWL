<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            DB::table('m_supplier')->insert([
                'supplier_kode' => 'SUP00' . $i,
                'supplier_nama' => fake()->company(),
                'supplier_alamat' => fake()->address(),
                'supplier_telp' => fake()->phoneNumber(),
                'created_at' => now(),
            ]);
        }
    }
}