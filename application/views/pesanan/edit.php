<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

<h1>Edit Pesanan</h1>

<hr>

<form action="<?= site_url('pesanan/update') ?>" method="post">

<input type="hidden"
       name="id_pesanan"
       value="<?= $pesanan->id_pesanan ?>">

<div class="mb-3">

<label>Meja</label>

<select name="id_meja"
        class="form-control">

<?php foreach($meja as $m): ?>

<option value="<?= $m->id_meja ?>"
<?php if($m->id_meja==$pesanan->id_meja) echo 'selected'; ?>>

<?= $m->nomor_meja ?>

</option>

<?php endforeach; ?>

</select>

</div>


<div class="mb-3">

<label>Pelanggan</label>

<select name="id_pelanggan"
        class="form-control">

<?php foreach($pelanggan as $p): ?>

<option value="<?= $p->id_pelanggan ?>"
<?php if($p->id_pelanggan==$pesanan->id_pelanggan) echo 'selected'; ?>>

<?= $p->nama_pelanggan ?>

</option>

<?php endforeach; ?>

</select>

</div>


<div class="mb-3">

<label>Status</label>

<select name="status"
        class="form-control">

<option value="Menunggu"
<?php if($pesanan->status=='Menunggu') echo 'selected'; ?>>
Menunggu
</option>

<option value="Diproses"
<?php if($pesanan->status=='Diproses') echo 'selected'; ?>>
Diproses
</option>

<option value="Selesai"
<?php if($pesanan->status=='Selesai') echo 'selected'; ?>>
Selesai
</option>

</select>

</div>


<button class="btn btn-primary">
Update
</button>

</form>

</div>

<?php $this->load->view('templates/footer'); ?>