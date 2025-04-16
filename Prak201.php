<!-- PRAK201.php -->
<!DOCTYPE html>
<html>
<head><title>Pengurutan Nama</title></head>
<body>
    <form method="POST">
        Masukkan Nama 1: <input type="text" name="nama1"><br>
        Masukkan Nama 2: <input type="text" name="nama2"><br>
        Masukkan Nama 3: <input type="text" name="nama3"><br>
        <input type="submit" name="urutkan" value="Urutkan">
    </form>

    <?php
    if (isset($_POST['urutkan'])) {
        $nama = [$_POST['nama1'], $_POST['nama2'], $_POST['nama3']];
        sort($nama);
        echo "<h3>Hasil Pengurutan:</h3>";
        foreach ($nama as $n) {
            echo $n . "<br>";
        }
    }
    ?>
</body>
</html>
