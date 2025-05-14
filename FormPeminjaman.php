<?php
require 'Model.php';

$id = $_GET['id'] ?? '';
$data = $id ? getPeminjamanById($id) : ['id_member' => '', 'id_buku' => '', 'tgl_pinjam' => '', 'tgl_kembali' => ''];

$members = getAllMember();
$buku = getAllBuku();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($id) {
        updatePeminjaman($id, $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    } else {
        insertPeminjaman($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    header("Location: peminjaman.php");
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
    margin-top: 100px;
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

<h2><?= $id ? "Edit" : "Tambah" ?> Peminjaman</h2>
<div class="form-container">
    <div>
        <form method="post">
            <label>Member:</label><br>
            <select name="id_member" required>
                <?php while ($m = $members->fetch_assoc()): ?>
                    <option value="<?= $m['id_member'] ?>" <?= $m['id_member'] == $data['id_member'] ? 'selected' : '' ?>>
                        <?= $m['nama_member'] ?>
                    </option>
                <?php endwhile; ?>
            </select><br>

            <label>Buku:</label><br>
            <select name="id_buku" required>
                <?php while ($b = $buku->fetch_assoc()): ?>
                    <option value="<?= $b['id_buku'] ?>" <?= $b['id_buku'] == $data['id_buku'] ? 'selected' : '' ?>>
                        <?= $b['judul_buku'] ?>
                    </option>
                <?php endwhile; ?>
            </select><br>

            <label>Tanggal Pinjam:</label><br>
            <input type="date" name="tgl_pinjam" value="<?= $data['tgl_pinjam'] ?>" required><br>

            <label>Tanggal Kembali:</label><br>
            <input type="date" name="tgl_kembali" value="<?= $data['tgl_kembali'] ?>" required><br>

            <input type="submit" value="Simpan">
        </form>

        <!-- Tombol Kembali di bawah form -->
        <div style="text-align: center; margin-top: 15px;">
                    <a href="Peminjaman.php" class="btn">← Kembali</a>
                </div>
            </div>
        </div>