<nav aria-label="Navigasi utama">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
    <a href="{{ route('products.food-beverage') }}" class="{{ request()->routeIs('products.*') ? 'active' : '' }}">Products</a>
    <a href="{{ route('user.show', ['id' => 123, 'name' => 'Andi']) }}" class="{{ request()->routeIs('user.*') ? 'active' : '' }}">User</a>
    <a href="{{ route('penjualan') }}" class="{{ request()->routeIs('penjualan') ? 'active' : '' }}">Penjualan</a>
</nav>
