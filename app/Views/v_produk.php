<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800"><?= esc($title ?? 'Produk') ?></h1>

<div class="card shadow mb-4">
    <div class="card-body">
        Ini halaman produk.
    </div>
</div>

<?= $this->endSection() ?>
