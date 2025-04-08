<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        td, th {
            border: solid 1px;
        }
        th {
            background-color: red;
            font-size: 20px;
            font-weight: bold;
            padding: 20px;
        }
        .kotak-luar {
            border: solid 1px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="kotak-luar">
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php
            $smartphones = array(
                "Hp1" => "Samsung Galaxy S22",
                "Hp2" => "Samsung Galaxy S22+",
                "Hp3" => "Samsung Galaxy A03",
                "Hp4" => "Samsung Galaxy Xcover 5"
            );
            ?>
            <tr>
                <td><?= $smartphones['Hp1']; ?></td>
            </tr>
            <tr>
                <td><?= $smartphones['Hp2']; ?></td>
            </tr>
            <tr>
                <td><?= $smartphones['Hp3']; ?></td>
            </tr>
            <tr>
                <td><?= $smartphones['Hp4']; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
