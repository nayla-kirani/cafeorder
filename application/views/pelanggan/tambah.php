<!DOCTYPE html>
<html>
<head>
    <title>Tambah Pelanggan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Tambah Pelanggan</h1>

    <hr>

    <form method="post" action="<?= site_url('pelanggan/simpan') ?>">

        <div class="mb-3">

            <label>Nama Pelanggan</label>

            <input type="text"
                   name="nama_pelanggan"
                   class="form-control"
                   required>

        </div>

        <div class="mb-3">

            <label>No HP</label>

            <input type="text"
                   name="no_hp"
                   class="form-control"
                   required>

        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

</body>
</html>