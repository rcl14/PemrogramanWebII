<!DOCTYPE html>
<html>
<head>
    <title>PRAK305</title>
</head>
<body>

    <form method="post">
        Masukkan String: <input type="text" name="input" required>
        <input type="submit" value="Cetak">
    </form>
    <br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST["input"];
        $panjang = strlen($input);

        echo "<strong>Input:</strong><br>";
        echo htmlspecialchars($input) . "<br><br>";

        echo "<strong>Output:</strong><br>";
        for ($i = 0; $i < $panjang; $i++) {
            // Huruf pertama kapital, sisanya kecil sebanyak panjang - 1
            $huruf = strtoupper($input[$i]) . str_repeat(strtolower($input[$i]), $panjang - 1);
            echo $huruf;
        }
    }
    ?>

</body>
</html>