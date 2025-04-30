<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 12px;
            text-align: left;
        }
        th {
            background-color: #d3d3d3;
            text-align: center;
        }
        .revisi {
            background-color: red;
            color: black;
            text-align: center;
        }
        .tidak-revisi {
            background-color: green;
            color: black;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    ["nama_mhs" => "Ridho", "kuliah" => [
        ["mata_kuliah" => "Pemrograman I", "sks" => 2],
        ["mata_kuliah" => "Praktikum Pemrograman I", "sks" => 1],
        ["mata_kuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
        ["mata_kuliah" => "Arsitektur Komputer", "sks" => 3],
    ]],
    ["nama_mhs" => "Ratna", "kuliah" => [
        ["mata_kuliah" => "Basis Data I", "sks" => 2],
        ["mata_kuliah" => "Praktikum Basis Data I", "sks" => 1],
        ["mata_kuliah" => "Kalkulus", "sks" => 3],
    ]],
    ["nama_mhs" => "Tono", "kuliah" => [
        ["mata_kuliah" => "Rekayasa Perangkat Lunak", "sks" => 3],
        ["mata_kuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
        ["mata_kuliah" => "Komputasi Awan", "sks" => 3],
        ["mata_kuliah" => "Kecerdasan Bisnis", "sks" => 3],
    ]],
];

// Hitung total sks dan keterangan
foreach ($mahasiswa as &$mhs) {
    $jumlah_sks = 0;
    foreach ($mhs['kuliah'] as $mk) {
        $jumlah_sks += $mk['sks'];
    }
    $mhs['jumlah_sks'] = $jumlah_sks;
    $mhs['status'] = ($jumlah_sks < 7) ? "Revisi KRS" : "Tidak Revisi";
}
unset($mhs);

// Tampilkan tabel
echo "<table>";
echo "<tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
      </tr>";

foreach ($mahasiswa as $index => $mhs) {
    $baris_pertama = true;
    foreach ($mhs['kuliah'] as $mk) {
        echo "<tr>";
        if ($baris_pertama) {
            echo "<td>" . ($index + 1) . "</td>";
            echo "<td>{$mhs['nama_mhs']}</td>";
        } else {
            echo "<td></td><td></td>";
        }
        echo "<td>{$mk['mata_kuliah']}</td>";
        echo "<td>{$mk['sks']}</td>";
        if ($baris_pertama) {
            echo "<td>{$mhs['jumlah_sks']}</td>";
            $kelas = ($mhs['status'] == "Revisi KRS") ? "revisi" : "tidak-revisi";
            echo "<td class='$kelas'>{$mhs['status']}</td>";
            $baris_pertama = false;
        } else {
            echo "<td></td><td></td>";
        }
        echo "</tr>";
    }
}
echo "</table>";
?>
</body>
</html>
