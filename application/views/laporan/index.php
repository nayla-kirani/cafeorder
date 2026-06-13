<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

    <h1>Laporan Pesanan</h1>

    <hr>

    <a href="<?= site_url('laporan/cetak') ?>"
       class="btn btn-success mb-3"
       target="_blank">
       Cetak Laporan
    </a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Nomor Meja</th>
            <th>Total</th>
            <th>Status</th>
        </tr>

        <?php
        $no = 1;
        $grand_total = 0;

        foreach($laporan as $l):
            $grand_total += $l->total_harga;
        ?>

        <tr>

            <td><?= $no++ ?></td>

            <td>
                <?= date('d-m-Y H:i', strtotime($l->tanggal)) ?>
            </td>

            <td>
                <?= $l->nama_pelanggan ?>
            </td>

            <td>
                <?= $l->nomor_meja ?>
            </td>

            <td>
                Rp <?= number_format($l->total_harga,0,',','.') ?>
            </td>

            <td>

                <?php if($l->status=='Menunggu'): ?>

                    <span class="badge bg-warning">
                        Menunggu
                    </span>

                <?php elseif($l->status=='Diproses'): ?>

                    <span class="badge bg-primary">
                        Diproses
                    </span>

                <?php else: ?>

                    <span class="badge bg-success">
                        Selesai
                    </span>

                <?php endif; ?>

            </td>

        </tr>

        <?php endforeach; ?>

        <tr class="table-dark">

            <th colspan="4">
                Total Pendapatan
            </th>

            <th colspan="2">
                Rp <?= number_format($grand_total,0,',','.') ?>
            </th>

        </tr>

    </table>

</div>

<?php $this->load->view('templates/footer'); ?>