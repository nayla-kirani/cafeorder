<?php $this->load->view('templates/header'); ?>
<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

<h1>Edit User</h1>

<hr>

<form action="<?= base_url('index.php/users/update') ?>" method="post">

<input type="hidden"
       name="id_user"
       value="<?= $user->id_user ?>">

<div class="mb-3">
    <label>Username</label>

    <input type="text"
           name="username"
           class="form-control"
           value="<?= $user->username ?>"
           required>
</div>

<div class="mb-3">
    <label>Password Baru</label>

    <input type="password"
           name="password"
           class="form-control">

    <small>Kosongkan jika tidak ingin mengganti password.</small>
</div>

<div class="mb-3">
    <label>Role</label>

    <select name="role" class="form-control">

        <option value="admin"
            <?php if($user->role=='admin') echo 'selected'; ?>>
            Admin
        </option>

        <option value="kasir"
            <?php if($user->role=='kasir') echo 'selected'; ?>>
            Kasir
        </option>

    </select>
</div>

<button class="btn btn-primary">
    Update
</button>

</form>

</div>

<?php $this->load->view('templates/footer'); ?>