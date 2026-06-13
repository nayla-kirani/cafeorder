<!DOCTYPE html>
<html>
<head>
    <title>Tambah Kategori</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Tambah Kategori</h1>

    <hr>

    <form method="post"
          action="http://cafeorder.test/index.php/kategori/simpan">

        <div class="mb-3">

            <label>Nama Kategori</label>

            <input
                type="text"
                name="nama_kategori"
                class="form-control"
                required>

        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="http://cafeorder.test/index.php/kategori"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>