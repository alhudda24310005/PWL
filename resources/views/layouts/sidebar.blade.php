<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <div class="sidebar-brand">
        <a href="{{ route('dashboard') }}" class="brand-link">
            <i class="bi bi-shop fs-4 me-2"></i>
            <span class="brand-text fw-light">PWL POS</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" @class(['nav-link', 'active' => request()->routeIs('dashboard')])>
                        <i class="nav-icon bi bi-speedometer2"></i><p>Dashboard</p>
                    </a>
                </li>
 
                <li class="nav-header">DATA PENGGUNA</li>
                <li class="nav-item">
                    <a href="{{ url('/level') }}" @class(['nav-link', 'active' => request()->is('level*')])>
                        <i class="nav-icon bi bi-layers"></i><p>Level User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/user') }}" @class(['nav-link', 'active' => request()->is('user*')])>
                        <i class="nav-icon bi bi-people"></i><p>Data User</p>
                    </a>
                </li>
 
                <li class="nav-header">DATA BARANG</li>
                <li class="nav-item">
                    <a href="{{ url('/kategori') }}" @class(['nav-link', 'active' => request()->is('kategori*')])>
                        <i class="nav-icon bi bi-tags"></i><p>Kategori Barang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/supplier') }}" @class(['nav-link', 'active' => request()->is('supplier*')])>
                        <i class="nav-icon bi bi-truck"></i><p>Supplier</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/barang') }}" @class(['nav-link', 'active' => request()->is('barang*')])>
                        <i class="nav-icon bi bi-box-seam"></i><p>Data Barang</p>
                    </a>
                </li>
 
                <li class="nav-header">DATA TRANSAKSI</li>
                <li class="nav-item">
                    <a href="{{ url('/stok') }}" @class(['nav-link', 'active' => request()->is('stok*')])>
                        <i class="nav-icon bi bi-boxes"></i><p>Stok Barang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/penjualan') }}" @class(['nav-link', 'active' => request()->is('penjualan*')])>
                        <i class="nav-icon bi bi-cart-check"></i><p>Transaksi Penjualan</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>