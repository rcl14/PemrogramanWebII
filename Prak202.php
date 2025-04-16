<!DOCTYPE html>
<html>
<head>
    <title>PRAK202</title>
    <style>
        .error {
            color: red;
            font-size: 0.9em;
        }
        .required {
            color: red;
        }
    </style>
</head>
<body>
    <?php
    $nama = "";
    $nim = "";
    $jk = "";
    $error_nama = "";
    $error_nim = "";
    $error_jk = "";
    $output = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $jk = isset($_POST['jk']) ? $_POST['jk'] : "";

        $valid = true;

        if (empty($nama)) {
            $error_nama = "*";
            $valid = false;
        }

        if (empty($nim)) {
            $error_nim = "nim tidak boleh kosong";
            $valid = false;
        }

        if (empty($jk)) {
            $error_jk = "jenis kelamin tidak boleh kosong";
            $valid = false;
        }

        if ($valid) {
            $output = "<h3>Output:</h3>";
            $output .= "$nama<br>$nim<br>$jk";
        }
    }
    ?>

    <form method="POST" action="">
        Nama: <input type="text" name="nama" value="<?= htmlspecialchars($nama) ?>">
        <span class="required"><?= $error_nama ?></span><br>

        NIM: <input type="text" name="nim" value="<?= htmlspecialchars($nim) ?>">
        <?php if (!empty($error_nim)) echo "<span class='error'> $error_nim</span>"; ?>
        <br>

        Jenis Kelamin:
        <span class="required"> *</span>
        <?php if (!empty($error_jk)) echo "<span class='error'> $error_jk</span>"; ?><br>

        <input type="radio" name="jk" value="Laki-laki" <?= ($jk == "Laki-laki") ? "checked" : "" ?>> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" <?= ($jk == "Perempuan") ? "checked" : "" ?>> Perempuan<br>

        <input type="submit" name="submit" value="Submit"><br><br>
    </form>

    <?= $output ?>
</body>
</html>
