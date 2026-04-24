<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800"><?= esc($title ?? 'Home') ?></h1>

<div class="row">
    <div class="col-12 mb-4">
        <div class="card shadow">
            <div class="card-body">
                <p class="mb-1">Selamat datang, <strong><?= esc(session()->get('username')) ?></strong>.</p>
                <p class="mb-0">Role Anda: <strong><?= esc(session()->get('role')) ?></strong>.</p>
            </div>
        </div>
    </div>
</div>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Umur</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>1</td><td>Firman</td><td>Designer</td><td>28</td><td>2016-05-25</td></tr>
                    <tr><td>2</td><td>Andi</td><td>Developer</td><td>35</td><td>2014-12-05</td></tr>
                    <tr><td>3</td><td>Nabila</td><td>HR</td><td>30</td><td>2017-08-17</td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
