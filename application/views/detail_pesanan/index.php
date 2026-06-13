
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

    <h1>Data Detail Pesanan</h1>

    <hr>

    <a href="<?= site_url('detail_pesanan/tambah') ?>"
       class="btn btn-primary mb-3">
       Tambah Detail Pesanan
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>ID Pesanan</th>
            <th>Menu</th>
            <th>Jumlah</th>
            <th>Subtotal</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach($detail_pesanan as $d):
        ?>

        <tr>

            <td><?= $no++ ?></td>

            <td><?= $d->id_pesanan ?></td>

            <td><?= $d->nama_menu ?></td>

            <td><?= $d->jumlah ?></td>

            <td>
                Rp <?= number_format($d->subtotal,0,',','.') ?>
            </td>

            <td>

                <a href="<?= site_url('detail_pesanan/edit/'.$d->id_detail) ?>"
                   class="btn btn-warning btn-sm">
                   Edit
                </a>

                <a href="<?= site_url('detail_pesanan/hapus/'.$d->id_detail) ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin hapus?')">
                   Hapus
                </a>

            </td>

        </tr>

        <?php endforeach; ?>

    </table>

</div>

<?php $this->load->view('templates/footer'); ?>

