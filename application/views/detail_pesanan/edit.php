
<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

    <h1>Edit Detail Pesanan</h1>

    <hr>

    <form method="post"
          action="<?= site_url('detail_pesanan/update') ?>">

        <input type="hidden"
               name="id_detail"
               value="<?= $detail->id_detail ?>">

        <div class="mb-3">

            <label>Pesanan</label>

            <select name="id_pesanan"
                    class="form-control">

                <?php foreach($pesanan as $p): ?>

                    <option value="<?= $p->id_pesanan ?>"
                        <?php if($detail->id_pesanan == $p->id_pesanan) echo 'selected'; ?>>

                        Pesanan <?= $p->id_pesanan ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>

        <div class="mb-3">

            <label>Menu</label>

            <select name="id_menu"
                    class="form-control">

                <?php foreach($menu as $m): ?>

                    <option value="<?= $m->id_menu ?>"
                        <?php if($detail->id_menu == $m->id_menu) echo 'selected'; ?>>

                        <?= $m->nama_menu ?>

                    </option>

                <?php endforeach; ?>

            </select>

        </div>

        <div class="mb-3">

            <label>Jumlah</label>

            <input type="number"
                   name="jumlah"
                   class="form-control"
                   value="<?= $detail->jumlah ?>"
                   required>

        </div>

        <button class="btn btn-primary">
            Update
        </button>

    </form>

</div>

<?php $this->load->view('templates/footer'); ?>

