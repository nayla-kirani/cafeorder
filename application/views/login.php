<!DOCTYPE html>
<html>
<head>
    <title>Login CafeOrder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <div class="card">

                <div class="card-header text-center">
                    <h2>Login CafeOrder</h2>
                </div>

                <div class="card-body">

                    <?php if($this->session->flashdata('error')) : ?>

                    <div class="alert alert-danger">
                        <?= $this->session->flashdata('error'); ?>
                    </div>

                    <?php endif; ?>

                    <form method="post"
                          action="<?= base_url('index.php/auth/proses_login') ?>">

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

                        <button class="btn btn-primary w-100">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

</body>
</html>