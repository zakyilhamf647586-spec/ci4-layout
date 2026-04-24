<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>

<h1 class="h3 mb-4 text-gray-800"><?= esc($title ?? 'Keranjang') ?></h1>

<div class="card shadow mb-4">
    <div class="card-body">
        Ini halaman keranjang.
    </div>
</div>

<?= $this->endSection() ?>
