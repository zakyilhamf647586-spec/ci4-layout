<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

<div class="card shadow mb-4">
    <div class="card-body">
        Ini isi konten produk
        <br><br>
        <h4 style="color:red;">TEST MUNCUL</h4>
    </div>
</div>

<?= $this->endSection() ?>