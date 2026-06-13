
<div class="container mt-5">

    <h1>Data Menu</h1>

    <hr>

    <a href="<?= base_url('index.php/menu/tambah') ?>"
       class="btn btn-primary mb-3">
       Tambah Menu
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama Menu</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no=1;
        foreach($menu as $m):
        ?>

        <tr>

            <td><?= $no++ ?></td>

            <td><?= $m->nama_menu ?></td>

            <td><?= $m->nama_kategori ?></td>

            <td>
                Rp <?= number_format($m->harga,0,',','.') ?>
            </td>

            <td><?= $m->stok ?></td>

            <td>

                <a href="<?= base_url('index.php/menu/edit/'.$m->id_menu) ?>"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <a href="<?= base_url('index.php/menu/hapus/'.$m->id_menu) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin hapus?')">
                   Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </table>

</div>

