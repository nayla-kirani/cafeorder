<!DOCTYPE html>
<html>
<head>
    <title>Edit Pelanggan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Edit Pelanggan</h1>

    <hr>

    <form method="post" action="<?= site_url('pelanggan/update') ?>">

        <input type="hidden"
               name="id_pelanggan"
               value="<?= $pelanggan->id_pelanggan ?>">

        <div class="mb-3">

            <label>Nama Pelanggan</label>

            <input type="text"
                   name="nama_pelanggan"
                   class="form-control"
                   value="<?= $pelanggan->nama_pelanggan ?>"
                   required>

        </div>

        <div class="mb-3">

            <label>No HP</label>

            <input type="text"
                   name="no_hp"
                   class="form-control"
                   value="<?= $pelanggan->no_hp ?>"
                   required>

        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>