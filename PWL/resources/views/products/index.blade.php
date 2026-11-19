@extends('layouts.app')

@section('title', $title)

@section('content')
    <div class="section-head">
        <div>
            <p class="muted">Katalog produk / {{ $category }}</p>
            <h2 style="margin:0;">{{ $title }}</h2>
        </div>
    </div>

    <div class="grid">
        @forelse ($products as $product)
            <x-product-card :product="$product" />
        @empty
            <div class="card">
                <p>Belum ada produk pada kategori ini.</p>
            </div>
        @endforelse
    </div>

    <div class="card" style="margin-top:22px;">
        <h3>Pilih kategori lain</h3>
        <p style="display:flex;gap:8px;flex-wrap:wrap;">
            <a class="btn btn-light" href="{{ route('products.food-beverage') }}">Food & Beverage</a>
            <a class="btn btn-light" href="{{ route('products.beauty-health') }}">Beauty & Health</a>
            <a class="btn btn-light" href="{{ route('products.home-care') }}">Home Care</a>
            <a class="btn btn-light" href="{{ route('products.baby-kid') }}">Baby & Kid</a>
        </p>
    </div>
@endsection
