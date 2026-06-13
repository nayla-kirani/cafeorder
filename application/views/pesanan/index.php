<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

    <h1>Data Pesanan</h1>

    <hr>

    <a href="<?= site_url('pesanan/tambah') ?>"
       class="btn btn-primary mb-3">
       Tambah Pesanan
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nomor Meja</th>
            <th>Pelanggan</th>
            <th>Tanggal</th>
            <th>Total</th>
<th>Status</th>
<th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach($pesanan as $p):
        ?>

        <tr>

            <td><?= $no++ ?></td>

            <td><?= $p->nomor_meja ?></td>

            <td><?= $p->nama_pelanggan ?></td>

            <td>
                <?= ($p->tanggal != '0000-00-00 00:00:00')
                    ? date('d-m-Y H:i', strtotime($p->tanggal))
                    : '-' ?>
            </td>

            <td>
    Rp <?= number_format($p->total_harga,0,',','.') ?>
</td>

<td>

<?php if($p->status=='Menunggu'): ?>

    <span class="badge bg-warning text-dark">
        Menunggu
    </span>

<?php elseif($p->status=='Diproses'): ?>

    <span class="badge bg-primary">
        Diproses
    </span>

<?php else: ?>

    <span class="badge bg-success">
        Selesai
    </span>

<?php endif; ?>

</td>

<td>

    <a href="<?= site_url('pesanan/edit/'.$p->id_pesanan) ?>"
       class="btn btn-warning btn-sm">
        Edit
    </a>

    <a href="<?= site_url('pesanan/hapus/'.$p->id_pesanan) ?>"
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