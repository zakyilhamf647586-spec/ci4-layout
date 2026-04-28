<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/') ?>">
        <div class="sidebar-brand-text mx-3">LToko</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item <?= uri_string() === '' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('/') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span>
        </a>
    </li>

    <li class="nav-item <?= uri_string() === 'keranjang' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('keranjang') ?>">
            <i class="fas fa-shopping-cart"></i>
            <span>Keranjang</span>
        </a>
    </li>

    <li class="nav-item <?= uri_string() === 'produk' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('produk') ?>">
            <i class="fas fa-box"></i>
            <span>Produk</span>
        </a>
    </li>

    <li class="nav-item <?= uri_string() === 'profile' ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('profile') ?>">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </a>
    </li>
</ul>
