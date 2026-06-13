<div class="container mt-5">

    <h1>Dashboard CafeOrder</h1>

    <hr>

    <div class="card mb-4">
        <div class="card-body">

            <h3>
                Selamat Datang,
                <?= $this->session->userdata('nama'); ?>
            </h3>

            <p>
                Role :
                <?= $this->session->userdata('role'); ?>
            </p>

        </div>
    </div>


    <div class="row">

        <div class="col-md-4 mb-3">
            <div class="card text-white bg-primary">
                <div class="card-body">
                    <h5>Menu</h5>
                    <h1><?= $jumlah_menu ?></h1>
                </div>
            </div>
        </div>


        <div class="col-md-4 mb-3">
            <div class="card text-white bg-success">
                <div class="card-body">
                    <h5>Meja</h5>
                    <h1><?= $jumlah_meja ?></h1>
                </div>
            </div>
        </div>


        <div class="col-md-4 mb-3">
            <div class="card text-dark bg-warning">
                <div class="card-body">
                    <h5>Pelanggan</h5>
                    <h1><?= $jumlah_pelanggan ?></h1>
                </div>
            </div>
        </div>


        <div class="col-md-6 mb-3">
            <div class="card text-white bg-danger">
                <div class="card-body">
                    <h5>Pesanan</h5>
                    <h1><?= $jumlah_pesanan ?></h1>
                </div>
            </div>
        </div>


        <div class="col-md-6 mb-3">
            <div class="card text-white bg-dark">
                <div class="card-body">
                    <h5>User</h5>
                    <h1><?= $jumlah_user ?></h1>
                </div>
            </div>
        </div>

    </div>

</div>