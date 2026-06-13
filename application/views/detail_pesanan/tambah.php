<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

    <h1>Tambah Detail Pesanan</h1>

    <hr>

    <form method="post"
          action="<?= site_url('detail_pesanan/simpan') ?>">

        <div class="mb-3">

            <label>Pesanan</label>

            <select name="id_pesanan"
                    class="form-control">

                <?php foreach($pesanan as $p): ?>

                    <option value="<?= $p->id_pesanan ?>">
    <?= $p->nama_pelanggan ?> - <?= $p->nomor_meja ?>
</option>

                <?php endforeach; ?>

            </select>

        </div>


        <div class="mb-3">

            <label>Menu</label>

            <select name="id_menu"
                    class="form-control">

                <?php foreach($menu as $m): ?>

                    <option value="<?= $m->id_menu ?>">
    <?= $m->nama_menu ?> - Rp <?= number_format($m->harga) ?>
</option>

                <?php endforeach; ?>

            </select>

        </div>


        <div class="mb-3">

            <label>Jumlah</label>

            <input type="number"
                   name="jumlah"
                   class="form-control"
                   required>

        </div>


        <button class="btn btn-success">
            Simpan
        </button>

    </form>

</div>

<?php $this->load->view('templates/footer'); ?>