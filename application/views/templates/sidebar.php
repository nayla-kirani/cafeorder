<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand"
   href="<?= base_url('index.php/dashboard') ?>">
   CafeOrder
</a>

<div class="navbar-nav">

    <a class="nav-link"
       href="<?= base_url('index.php/dashboard') ?>">
       Dashboard
    </a>

    <?php if($this->session->userdata('role')=='admin'): ?>

    <a class="nav-link"
       href="<?= base_url('index.php/kategori') ?>">
       Kategori
    </a>

    <a class="nav-link"
       href="<?= base_url('index.php/menu') ?>">
       Menu
    </a>

    <a class="nav-link"
       href="<?= base_url('index.php/meja') ?>">
       Meja
    </a>

    <a class="nav-link"
       href="<?= base_url('index.php/pelanggan') ?>">
       Pelanggan
    </a>

    <?php endif; ?>


    <a class="nav-link"
       href="<?= base_url('index.php/pesanan') ?>">
       Pesanan
    </a>

    <a class="nav-link"
       href="<?= base_url('index.php/detail_pesanan') ?>">
       Detail Pesanan
    </a>


    <?php if($this->session->userdata('role')=='admin'): ?>

    <a class="nav-link"
       href="<?= base_url('index.php/users') ?>">
       Users
    </a>

    <?php endif; ?>


    <a class="nav-link"
       href="<?= base_url('index.php/laporan') ?>">
       Laporan
    </a>

    <a class="nav-link text-warning"
       href="<?= base_url('index.php/auth/logout') ?>">
       Logout
    </a>

</div>

</div>

</nav>