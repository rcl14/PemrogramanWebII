<?php
require 'Model.php';

if (isset($_GET['delete'])) {
    deleteMember($_GET['delete']);
    header("Location: Member.php");
    exit;
}

$members = getAllMember();
?>

<style>
body {
    margin: 20;
    padding: 20;
    background-color: #dfffe0; 
    text-align: center;
}

h2 {
    color: #2e7d32;
    text-align: center;
    margin-top: 30px;
}

.button-container {
    overflow: hidden;
    margin: 20px 50px;
}

.kembali-btn {
    float: left;
}

.tambah-btn {
    float: right;
}

table {
    margin: 0 auto;
    border-collapse: collapse;
    text-align: center;
    width: 100%;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

th, td {
    border: 1px solid #c8e6c9;
    text-align: center;
    padding: 10px;
}

.btn {
    padding: 10px 20px;
    background-color: #0066cc;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.btn:hover {
    background-color: #004999;
}
</style>

<h2>Data Member</h2>

<!-- Wrapper tombol -->
<div class="button-container">
    <a href="MinervaHaven.php" class="btn kembali-btn">Kembali ke Menu</a>
    <a href="FormMember.php" class="btn tambah-btn">Tambah Member</a>
</div>

<!-- Tabel data member -->
<table border="1" cellpadding="10">
    <tr>
        <th>ID</th><th>Nama</th><th>Nomor</th><th>Alamat</th><th>Tgl Daftar</th><th>Tgl Terakhir Bayar</th><th>Aksi</th>
    </tr>
    <?php while ($row = $members->fetch_assoc()): ?>
    <tr>
        <td><?= $row['id_member'] ?></td>
        <td><?= $row['nama_member'] ?></td>
        <td><?= $row['nomor_member'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['tgl_mendaftar'] ?></td>
        <td><?= $row['tgl_terakhir_bayar'] ?></td>
        <td>
            <a href="FormMember.php?id=<?= $row['id_member'] ?>">Edit</a> |
            <a href="Member.php?delete=<?= $row['id_member'] ?>" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>