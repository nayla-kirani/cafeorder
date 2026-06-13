<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Tambah Pesanan</h1>

    <hr>

    <form method="post"
          action="<?= site_url('pesanan/simpan') ?>">

        <div class="mb-3">

            <label>Meja</label>

            <select name="id_meja"
                    class="form-control">

                <?php foreach($meja as $m): ?>

                    <option value="<?= $m->id_meja ?>">
                        <?= $m->nomor_meja ?>
                    </option>

                <?php endforeach; ?>

            </select>

        </div>


        <div class="mb-3">

            <label>Pelanggan</label>

            <select name="id_pelanggan"
                    class="form-control">

                <?php foreach($pelanggan as $p): ?>

                    <option value="<?= $p->id_pelanggan ?>">
                        <?= $p->nama_pelanggan ?>
                    </option>

                <?php endforeach; ?>

            </select>

        </div>


        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

</body>
</html>