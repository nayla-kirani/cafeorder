<?php $this->load->view('templates/header'); ?>

<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">


<h1>Data User</h1>

<hr>

<a href="<?= base_url('index.php/users/tambah') ?>"
   class="btn btn-primary mb-3">
   Tambah User
</a>

<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Role</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no=1;
    foreach($users as $u):
    ?>

    <tr>

        <td><?= $no++ ?></td>

        <td><?= $u->username ?></td>

        <td><?= $u->role ?></td>

        <td>

            <a href="<?= base_url('index.php/users/edit/'.$u->id_user) ?>"
               class="btn btn-warning btn-sm">
                Edit
            </a>

            <a href="<?= base_url('index.php/users/hapus/'.$u->id_user) ?>"
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
