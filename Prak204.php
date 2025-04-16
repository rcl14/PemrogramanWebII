<!-- Simpan dengan nama: PRAK204.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Ejaan Bilangan</title>
</head>
<body>
    <form method="POST">
        Nilai : <input type="number" name="bil"><br>
        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $bil = $_POST['bil'];

        if ($bil < 0 || $bil >= 1000) {
            echo "<h3><b>Hasil: Anda Menginput Melebihi Limit Bilangan</b></h3>";
        } elseif ($bil == 0) {
            echo "<h3><b>Hasil: Nol</b></h3>";
        } elseif ($bil < 10) {
            echo "<h3><b>Hasil: Satuan</b></h3>";
        } elseif ($bil < 20) {
            echo "<h3><b>Hasil: Belasan</b></h3>";
        } elseif ($bil < 100) {
            echo "<h3><b>Hasil: Puluhan</b></h3>";
        } else {
            echo "<h3><b>Hasil: Ratusan</b></h3>";
        }
    }
    ?>
</body>
</html>
