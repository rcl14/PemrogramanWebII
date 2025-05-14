<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="text-center bg-white p-5 rounded shadow" style="max-width: 600px; width: 100%;">
        <h1 class="fw-bold mb-4 text-dark">🍀Selamat Datang🍀</h1>
        <p class="fs-4"><strong>Nama:</strong> <?= $praktikan['nama'] ?></p>
        <p class="fs-4"><strong>NIM:</strong> <?= $praktikan['nim'] ?></p>
    </div>
</div>
<?= $this->endSection() ?>
