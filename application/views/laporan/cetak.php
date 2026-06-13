<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

</head>
<body onload="window.print()">

<div class="container mt-5">

    <h2 class="text-center">
        LAPORAN PENJUALAN CAFEORDER
    </h2>

    <hr>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Pelanggan</th>
            <th>Meja</th>
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
                <?= $l->status ?>
            </td>

        </tr>

        <?php endforeach; ?>

        <tr>

            <th colspan="4">
                Total Pendapatan
            </th>

            <th colspan="2">
                Rp <?= number_format($grand_total,0,',','.') ?>
            </th>

        </tr>

    </table>

</div>

</body>
</html>