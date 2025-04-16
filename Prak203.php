<!-- PRAK203.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Konversi Suhu</title>
</head>
<body>
    <form method="POST">
        <p>Nilai : <input type="text" name="nilai"></p>
        <p>Dari :</p>
        <input type="radio" name="dari" value="C" checked> Celcius<br>
        <input type="radio" name="dari" value="F"> Fahrenheit<br>
        <input type="radio" name="dari" value="Re"> Rheaumur<br>
        <input type="radio" name="dari" value="K"> Kelvin<br>

        <p>Ke :</p>
        <input type="radio" name="ke" value="C"> Celcius<br>
        <input type="radio" name="ke" value="F" checked> Fahrenheit<br>
        <input type="radio" name="ke" value="Re"> Rheaumur<br>
        <input type="radio" name="ke" value="K"> Kelvin<br><br>

        <input type="submit" name="konversi" value="Konversi">
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $hasil = 0;

        // Konversi ke Celcius terlebih dahulu
        switch ($dari) {
            case 'C':
                $celcius = $nilai;
                break;
            case 'F':
                $celcius = ($nilai - 32) * 5 / 9;
                break;
            case 'Re':
                $celcius = $nilai * 5 / 4;
                break;
            case 'K':
                $celcius = $nilai - 273.15;
                break;
        }

        // Konversi dari Celcius ke satuan yang diinginkan
        switch ($ke) {
            case 'C':
                $hasil = $celcius;
                $satuan = "°C";
                break;
            case 'F':
                $hasil = $celcius * 9 / 5 + 32;
                $satuan = "°F";
                break;
            case 'Re':
                $hasil = $celcius * 4 / 5;
                $satuan = "°Re";
                break;
            case 'K':
                $hasil = $celcius + 273.15;
                $satuan = "K";
                break;
        }

        echo "<h3><b>Hasil Konversi: " . round($hasil, 1) . " $satuan</b></h3>";
    }
    ?>
</body>
</html>
