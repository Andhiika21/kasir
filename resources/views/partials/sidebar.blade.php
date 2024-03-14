<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <img src="{{ asset ("img/cart2.png") }}" id="gambar">
            <script>
                var gambar = document.getElementById('gambar');
                gambar.style.width = '30px'; // Atur lebar sesuai kebutuhan Anda
                gambar.style.height = 'auto'; // Biarkan tinggi otomatis agar proporsional
            </script>
        </div>
        <div class="sidebar-brand-text mx-3">Kasir 123</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item active">
        <a class="nav-link" href="{{ route('barang') }}">
            <i class="fas fa-box"></i>
            <span>Barang</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('transaksi') }}">
            <i class="fas fa-scroll"></i>
            <span>Transaksi</span></a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('user') }}">
            <i class="fas fa-address-book"></i>
            <span>User</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    

</ul>
<!-- End of Sidebar -->