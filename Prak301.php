<!DOCTYPE html>
<html>
<head>
    <title>PRAK301</title>
</head>
<body>
    <form method="post">
        Jumlah Peserta : <input type="number" name="jumlah" required>
        <input type="submit" value="Cetak">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = $_POST["jumlah"];
        $i = 1;
        while ($i <= $jumlah) {
            $warna = ($i % 2 == 1) ? "red" : "green";
            echo "<p style='color:$warna'>Peserta ke-$i</p>";
            $i++;
        }
    }
    ?>
</body>
</html>
