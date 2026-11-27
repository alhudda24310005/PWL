<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PenjualanController extends Controller
{
    public function index(): View
    {
        // Halaman transaksi masih berupa tampilan statis sesuai Jobsheet 02.
        $items = [
            ['name' => 'Kopi Susu', 'qty' => 2, 'price' => 18000],
            ['name' => 'Roti Bakar', 'qty' => 1, 'price' => 20000],
        ];

        $total = array_sum(array_map(
            fn (array $item) => $item['qty'] * $item['price'],
            $items
        ));

        return view('penjualan.index', compact('items', 'total'));
    }
}
