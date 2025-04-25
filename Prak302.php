<!DOCTYPE html>
<html>
<head>
    <title>PRAK302</title>
</head>
<body>
    <form method="post">
        Tinggi : <input type="number" name="tinggi" required><br>
        Alamat Gambar : 
        <input type="text" name="gambar" required><br>
        <input type="submit" value="Cetak">
    </form>
    <br>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tinggi = $_POST["tinggi"];
        $gambar = trim($_POST["gambar"]);

        // Cek apakah alamat gambar tidak kosong
        if (!empty($gambar)) {
            for ($i = $tinggi; $i >= 1; $i--) {
                // Spasi
                for ($spasi = 0; $spasi < ($tinggi - $i); $spasi++) {
                    echo "<span style='display:inline-block; width:30px;'></span>";
                }
                // Gambar
                for ($j = 1; $j <= $i; $j++) {
                    echo "<img src='$gambar' width='30'>";
                }
                echo "<br>";
            }
        } else {
            echo "<p style='color:red;'>Silakan masukkan alamat gambar terlebih dahulu!</p>";
        }
    }
    ?>
</body>
</html>
