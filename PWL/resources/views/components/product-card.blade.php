@props(['product'])

<article class="card">
    <div style="font-size:12px;color:#64748b;margin-bottom:10px;">PRODUK</div>
    <h3>{{ $product['name'] }}</h3>
    <p style="font-size:20px;font-weight:700;color:#1d4ed8;">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
    @if ($product['stock'] > 0)
        <span class="status">Stok tersedia: {{ $product['stock'] }}</span>
    @else
        <span class="status empty">Stok habis</span>
    @endif
</article>
