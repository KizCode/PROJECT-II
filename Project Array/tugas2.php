<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <table border="1">
            <tr>
                <th>Nama Barang</th>
                <th>Januari</th>
                <th>Februari</th>
                <th>Maret</th>
                <th>April</th>
                <th>Mei</th>
                <th>Total</th>
            </tr>
<?php

$lap = [
    ["Komputer", 100, 90, 120, 80, 110, 500],
    ["Laptop", 50, 70, 110, 100, 80, 410],
    ["Hp", 150, 200, 160, 110, 90, 710],
    ["Ps", 40, 20, 60, 30, 70, 220],
    ["Tablet", 110, 130, 100, 80, 50, 470],
    ["Modem", 350, 200, 100, 130, 230, 1010]
];

for ($raw = 0; $raw < 6; $raw++) {
    echo "<tr>";
    for ($col = 0; $col < 7; $col++){
        echo "<td>";
        echo $lap[$raw][$col];
        echo "</td>";
    }
    echo "</tr>";
}


?>
        </table>
    </center>
</body>
</html>



