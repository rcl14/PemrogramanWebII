<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Smartphone Samsung</title>
    <style>
        td, th {
            border: solid 1px;
        }
        .kotak-luar {
            border: solid 1px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="kotak-luar">
        <?php
        $smartphones = array(
            "Samsung Galaxy S22",
            "Samsung Galaxy S22+",
            "Samsung Galaxy A03",
            "Samsung Galaxy Xcover 5"
        );
        ?>
        <table>
            <tr>
                <th>Daftar Smartphone Samsung</th>
            </tr>
            <?php foreach ($smartphones as $phone): ?>
                <tr>
                    <td><?= $phone; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
