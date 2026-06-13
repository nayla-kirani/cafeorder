<!DOCTYPE html>
<html>
<head>
    <title>Edit Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<h1>Edit Menu</h1>

<hr>

<form action="<?= base_url('index.php/menu/update') ?>" method="post">

<input type="hidden"
       name="id_menu"
       value="<?= $menu->id_menu ?>">

<div class="mb-3">
    <label>Nama Menu</label>

    <input type="text"
           name="nama_menu"
           class="form-control"
           value="<?= $menu->nama_menu ?>"
           required>
</div>

<div class="mb-3">
    <label>Kategori</label>

    <select name="id_kategori"
            class="form-control">

        <?php foreach($kategori as $k): ?>

        <option value="<?= $k->id_kategori ?>"
            <?php if($menu->id_kategori==$k->id_kategori) echo 'selected'; ?>>

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
           value="<?= $menu->harga ?>"
           required>
</div>

<div class="mb-3">
    <label>Stok</label>

    <input type="number"
           name="stok"
           class="form-control"
           value="<?= $menu->stok ?>"
           required>
</div>

<button class="btn btn-primary">
    Update
</button>

</form>

</div>

</body>
</html>