
<div class="container mt-5">

    <h1>Data Kategori</h1>

    <hr>

    <a href="<?= base_url('index.php/kategori/tambah') ?>"
       class="btn btn-primary mb-3">
       Tambah Kategori
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach($kategori as $k):
        ?>

        <tr>

            <td><?= $no++ ?></td>

            <td><?= $k->nama_kategori ?></td>

            <td>

                <a href="<?= base_url('index.php/kategori/edit/'.$k->id_kategori) ?>"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <a href="<?= base_url('index.php/kategori/hapus/'.$k->id_kategori) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Hapus data?')">
                   Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </table>

</div>

