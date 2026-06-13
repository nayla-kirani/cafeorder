<!DOCTYPE html>
<html>
<head>
    <title>Tambah Meja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Tambah Meja</h1>

    <hr>

    <form method="post" action="<?= site_url('meja/simpan') ?>">

        <div class="mb-3">
            <label>Nomor Meja</label>

            <input type="text"
                   name="nomor_meja"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Status</label>

            <select name="status" class="form-control">
                <option value="Kosong">Kosong</option>
                <option value="Terisi">Terisi</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

</body>
</html>