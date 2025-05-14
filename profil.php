<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="row bg-white shadow rounded p-4" style="max-width: 900px;">
        <div class="col-md-4 text-center mb-3">
            <?php if (!empty($praktikan['gambar'])): ?>
                <img src="<?= base_url('img/' . $praktikan['gambar']); ?>" class="img-fluid rounded-circle border" alt="Foto Profil">
            <?php endif; ?>
        </div>
        <div class="col-md-8">
            <h2 class="fw-bold mb-3 text-dark">🎀Profil Praktikan🎀</h2>
            <ul class="list-unstyled fs-5">
                <li><strong>Nama:</strong> <?= $praktikan['nama'] ?></li>
                <li><strong>NIM:</strong> <?= $praktikan['nim'] ?></li>
                <li><strong>Prodi:</strong> <?= $praktikan['prodi'] ?></li>
                <li><strong>Hobi:</strong> <?= $praktikan['hobi'] ?></li>
                <li><strong>Skill:</strong> <?= $praktikan['skill'] ?></li>
                <li><strong>Tentang Saya:</strong> <?= $praktikan['tentang_saya'] ?></li>
            </ul>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
