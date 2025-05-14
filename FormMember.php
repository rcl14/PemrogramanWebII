<?php
require 'Model.php';

$id = $_GET['id'] ?? '';
$data = $id ? getMemberById($id) : ['nama_member' => '', 'nomor_member' => '', 'alamat' => '', 'tgl_mendaftar' => '', 'tgl_terakhir_bayar' => ''];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($id) {
        updateMember($id, $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    } else {
        insertMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    }
    header("Location: member.php");
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

<h2><?= $id ? "Edit" : "Tambah" ?> Member</h2>

<div class="form-container">
    <div>
        <form method="post">
            <label>Nama:</label><br>
            <input type="text" name="nama_member" value="<?= $data['nama_member'] ?>" required><br>

            <label>Nomor:</label><br>
            <input type="text" name="nomor_member" value="<?= $data['nomor_member'] ?>" required><br>

            <label>Alamat:</label><br>
            <textarea name="alamat" required><?= htmlspecialchars($data['alamat']) ?></textarea><br>

            <label>Tanggal Mendaftar:</label><br>
            <input type="datetime-local" name="tgl_mendaftar" value="<?= date('Y-m-d\TH:i', strtotime($data['tgl_mendaftar'])) ?>" required><br>

            <label>Tanggal Terakhir Bayar:</label><br>
            <input type="date" name="tgl_terakhir_bayar" value="<?= $data['tgl_terakhir_bayar'] ?>" required><br>

            <input type="submit" value="Simpan">
        </form>

        <!-- Tombol Kembali di bawah form -->
        <div style="text-align: center; margin-top: 15px;">
                    <a href="Member.php" class="btn">← Kembali</a>
                </div>
            </div>
        </div>