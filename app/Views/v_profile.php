<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?= esc($title ?? 'Profile') ?></h1>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Profile Information</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-borderless mb-0">
                <tr>
                    <th class="text-primary" style="width: 180px;">Username</th>
                    <td>: <?= esc(session()->get('username')) ?></td>
                </tr>
                <tr>
                    <th class="text-primary">Role</th>
                    <td>: <?= esc(session()->get('role')) ?></td>
                </tr>
                <tr>
                    <th class="text-primary">Email</th>
                    <td>: <?= esc(session()->get('email')) ?></td>
                </tr>
                <tr>
                    <th class="text-primary">Waktu Login</th>
                    <td>: <?= esc(session()->get('login_time')) ?></td>
                </tr>
                <tr>
                    <th class="text-primary">Status Login</th>
                    <td>:
                        <?php if (session()->get('isLoggedIn')) : ?>
                            <span class="badge badge-success">Aktif</span>
                        <?php else : ?>
                            <span class="badge badge-secondary">Tidak Aktif</span>
                        <?php endif; ?>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
