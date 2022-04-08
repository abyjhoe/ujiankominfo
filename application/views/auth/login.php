<body class="hold-transition login-page ">
    <div class="login-box ">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="<?= base_url(); ?>" class="h1"><b>Tes </b>Ujian</a>
            </div>

            <div class="card-body">

                <p class="login-box-msg">LOGIN</p>
                <?= $this->session->flashdata('message'); ?>
                <!-- <form method="post" action="https://api.kotamobagu.go.id/login.php"> -->
                <form method="post" action="<?= base_url('auth/test'); ?>">
                    <div class="input-group mt-3">
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email" value="<?= set_value('email'); ?>">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <small class="text-sm-left text-danger"><?= form_error('email') ?></small>
                    <div class="input-group mt-3">
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <small class="text-sm-left text-danger"><?= form_error('password') ?></small>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-4 mt-3">
                            <button type="submit" class="btn btn-outline-primary">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>

        </div>

    </div>