<!DOCTYPE html>
<html>
<head>
    <title>Edit Meja</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h1>Edit Meja</h1>

    <hr>

    <form method="post" action="<?= site_url('meja/update') ?>">

        <input type="hidden"
               name="id_meja"
               value="<?= $meja->id_meja ?>">

        <div class="mb-3">
            <label>Nomor Meja</label>

            <input type="text"
                   name="nomor_meja"
                   class="form-control"
                   value="<?= $meja->nomor_meja ?>"
                   required>
        </div>

        <div class="mb-3">
            <label>Status</label>

            <select name="status" class="form-control">

                <option value="Kosong"
                <?= ($meja->status == 'Kosong') ? 'selected' : '' ?>>
                    Kosong
                </option>

                <option value="Terisi"
                <?= ($meja->status == 'Terisi') ? 'selected' : '' ?>>
                    Terisi
                </option>

            </select>
        </div>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>

</div>

</body>
</html>