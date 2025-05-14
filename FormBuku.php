<?php
require 'Model.php';

$id_buku = $_GET['id_buku'] ?? '';
$data = $id_buku ? getBukuById($id_buku) : ['judul_buku' => '', 'penulis' => '', 'penerbit' => '', 'tahun_terbit' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($id_buku) {
        updateBuku($id_buku, $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    } else {
        insertBuku($_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    }
    header("Location: Buku.php");
    exit;
}
?>

<style>
body {
    background-color: #dfffe0; /* hijau pastel */
    margin: 0;
    padding: 20px;
}

h2 {
    color: #2e7d32;
    text-align: center;
    margin-bottom: 20px;
}

.button-container {
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}

.btn {
    background-color: #66bb6a;
    color: white;
    padding: 10px 15px;
    border-radius: 4px;
    text-decoration: none;
    font-weight: bold;
}

.btn:hover {
    background-color: #388e3c;
}

table {
    border-collapse: collapse;
    width: 100%;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    margin-top: 10px;
    text-align: center;
}

table th, table td {
    border: 1px solid #c8e6c9;
    padding: 10px;
}

table th {
    background-color: #a5d6a7;
    color: #1b5e20;
}

a {
    color: #2e7d32;
    text-decoration: none;
    font-weight: bold;
}

a:hover {
    text-decoration: underline;
}

.form-container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 70vh; /* agar vertikal tengah di sebagian besar layar */
}

form {
    background-color: #ffffff;
    text-align: left;
    padding: 20px;
    width: 100%;
    max-width: 1200px;
    border-radius: 8px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

input[type="text"],
input[type="number"],
input[type="date"],
input[type="datetime-local"],
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #a5d6a7;
    border-radius: 4px;
    resize: vertical;
}

input[type="submit"] {
    background-color: #66bb6a;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100%;
}

input[type="submit"]:hover {
    background-color: #388e3c;
}
</style>

<h2><?= $id_buku ? "Edit" : "Tambah" ?> Buku</h2>

<div class="form-container">
    <div>
        <form method="post">
            <label>Judul Buku:</label><br>
            <input type="text" name="judul_buku" value="<?= $data['judul_buku'] ?>" required><br>

            <label>Penulis:</label><br>
            <input type="text" name="penulis" value="<?= $data['penulis'] ?>" required><br>

            <label>Penerbit:</label><br>
            <input type="text" name="penerbit" value="<?= $data['penerbit'] ?>" required><br>

            <label>Tahun Terbit:</label><br>
            <input type="number" name="tahun_terbit" value="<?= $data['tahun_terbit'] ?>" required><br>

            <input type="submit" value="Simpan">
        </form>

        <!-- Tombol Kembali di bawah form -->
        <div style="text-align: center; margin-top: 15px;">
            <a href="Buku.php" class="btn">← Kembali</a>
        </div>
    </div>
</div>
