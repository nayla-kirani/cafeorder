<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

    <h1>Data Pelanggan</h1>

    <hr>

    <a href="<?= site_url('pelanggan/tambah') ?>"
       class="btn btn-primary mb-3">
       Tambah Pelanggan
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach($pelanggan as $p):
        ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $p->nama_pelanggan ?></td>
            <td><?= $p->no_hp ?></td>

            <td>

                <a href="<?= site_url('pelanggan/edit/'.$p->id_pelanggan) ?>"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="<?= site_url('pelanggan/hapus/'.$p->id_pelanggan) ?>"
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