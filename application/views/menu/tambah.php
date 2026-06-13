<!DOCTYPE html>
<html>
<head>
    <title>Tambah Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<h1>Tambah Menu</h1>

<hr>

<form action="<?= base_url('index.php/menu/simpan') ?>" method="post">

    <div class="mb-3">
        <label>Nama Menu</label>

        <input type="text"
               name="nama_menu"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Kategori</label>

        <select name="id_kategori"
                class="form-control">

            <?php foreach($kategori as $k): ?>

            <option value="<?= $k->id_kategori ?>">
                <?= $k->nama_kategori ?>
            </option>

            <?php endforeach; ?>

        </select>
    </div>

    <div class="mb-3">
        <label>Harga</label>

        <input type="number"
               name="harga"
               class="form-control"
               required>
    </div>

    <div class="mb-3">
        <label>Stok</label>

        <input type="number"
               name="stok"
               class="form-control"
               required>
    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>

</div>

</body>
</html>