<?php $this->load->view('templates/header'); ?>

<?php $this->load->view('templates/sidebar'); ?>

<div class="container mt-5">

<h1>Tambah User</h1>

<hr>

<form action="<?= base_url('index.php/users/simpan') ?>" method="post">

```
<div class="mb-3">

    <label>Username</label>

    <input type="text"
           name="username"
           class="form-control"
           required>

</div>

<div class="mb-3">

    <label>Password</label>

    <input type="password"
           name="password"
           class="form-control"
           required>

</div>

<div class="mb-3">

    <label>Role</label>

    <select name="role" class="form-control">

        <option value="admin">
            Admin
        </option>

        <option value="kasir">
            Kasir
        </option>

    </select>

</div>

<button class="btn btn-success">
    Simpan
</button>
```

</form>

</div>

<?php $this->load->view('templates/footer'); ?>
