<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ProductController extends Controller
{
    private function renderCategory(string $title, string $category, array $products): View
    {
        return view('products.index', compact('title', 'category', 'products'));
    }

    public function foodBeverage(): View
    {
        return $this->renderCategory('Food & Beverage', 'food-beverage', [
            ['name' => 'Kopi Susu', 'price' => 18000, 'stock' => 12],
            ['name' => 'Teh Tarik', 'price' => 15000, 'stock' => 0],
            ['name' => 'Roti Bakar', 'price' => 20000, 'stock' => 5],
        ]);
    }

    public function beautyHealth(): View
    {
        return $this->renderCategory('Beauty & Health', 'beauty-health', [
            ['name' => 'Sabun Muka', 'price' => 22000, 'stock' => 8],
            ['name' => 'Sampo', 'price' => 19000, 'stock' => 4],
            ['name' => 'Hand Sanitizer', 'price' => 12000, 'stock' => 0],
        ]);
    }

    public function homeCare(): View
    {
        return $this->renderCategory('Home Care', 'home-care', [
            ['name' => 'Deterjen', 'price' => 17000, 'stock' => 10],
            ['name' => 'Pembersih Lantai', 'price' => 14000, 'stock' => 6],
            ['name' => 'Spons Cuci', 'price' => 5000, 'stock' => 0],
        ]);
    }

    public function babyKid(): View
    {
        return $this->renderCategory('Baby & Kid', 'baby-kid', [
            ['name' => 'Popok Bayi', 'price' => 45000, 'stock' => 7],
            ['name' => 'Tisu Basah', 'price' => 16000, 'stock' => 9],
            ['name' => 'Botol Minum Anak', 'price' => 25000, 'stock' => 0],
        ]);
    }
}
