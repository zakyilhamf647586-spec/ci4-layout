<?= $this->extend('layout/layout_clear') ?>

<?= $this->section('content') ?>

<div class="row justify-content-center align-items-center min-vh-100">
    <div class="col-lg-4 col-md-6">
        <div class="card shadow-lg border-0 my-5">
            <div class="card-body p-5">
                <div class="text-center mb-4">
                    <div class="h1 text-primary font-weight-bold">LToko</div>
                    <h1 class="h4 text-gray-900 mb-2">Login to Your Account</h1>
                    <p class="text-muted small mb-0">Enter your username & password to login</p>
                </div>

                <?php if ($failed = session()->getFlashdata('failed')) : ?>
                    <div class="alert alert-danger text-center" role="alert">
                        <?= esc($failed) ?>
                    </div>
                <?php endif; ?>

                <?php
                $username = [
                    'name'  => 'username',
                    'id'    => 'username',
                    'class' => 'form-control',
                    'value' => set_value('username'),
                    'placeholder' => 'Username',
                    'autocomplete' => 'off',
                ];

                $password = [
                    'name'  => 'password',
                    'id'    => 'password',
                    'class' => 'form-control',
                    'placeholder' => 'Password',
                ];
                ?>

                <?= form_open('login', ['class' => 'user']) ?>

                    <div class="form-group">
                        <?= form_label('Username', 'username', ['class' => 'form-label']) ?>
                        <?= form_input($username) ?>
                    </div>

                    <div class="form-group">
                        <?= form_label('Password', 'password', ['class' => 'form-label']) ?>
                        <?= form_password($password) ?>
                    </div>

                    <div class="form-group">
                        <?= form_submit('submit', 'Login', ['class' => 'btn btn-primary btn-user btn-block']) ?>
                    </div>

                <?= form_close() ?>

                <hr>
                <div class="text-center small text-muted">Designed by BootstrapMade</div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
