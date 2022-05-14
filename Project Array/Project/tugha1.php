
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
 <?php

if (isset($_POST['pro'])) {
    $nis = $_POST['nis'];
    $nma = $_POST['nma'];
    $kls = $_POST['kls'];
    $bin = $_POST['bin'];
    $big = $_POST['big'];
    $mtk = $_POST['mtk'];
    $prd = $_POST['prd'];

}

$ab = $bin + $big + $mtk + $prd;
if ($ab <= 400 && $ab >= 0) {
    $total = $ab ;
} else {
    $total = 0;
}

$rtrt = $total/4;
if ($rtrt > 77 && $rtrt < 100) {
    $sta = "Lulus";
} else if ($rtrt <= 77){
    $sta = "Gagal";
} else {
    $sta = "Gagal Input";
}

    $judul = ["Judul" => "Data Siswa Kelas XI RPL"];
    echo "<h2>".$judul["Judul"]."</h2>";
    
    $index = [
        ["NIS" => $nis, $nma, $kls, $bin, $big, $mtk, $prd, $total, $rtrt, $sta]
    ];
    
    ?>
            <table border="1">
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Bahasa Indonesia</th>
                    <th>Bahasa Inggris</th>
                    <th>Matematika</th>
                    <th>Produktif</th>
                    <th>Total Nilai</th>
                    <th>Rata-rata</th>
                    <th>Status</th>
                </tr>
            <?php
            for ($row = 0; $row < 1; $row++) {
                echo "<tr>";
                for ($col = 0; $col < 10; $col++) {
                    echo "<td>".$index[$row][$col]."</td>";
                     
                }
                echo "</tr>";
            } 
            ?>
            </table>
        </center>
    </body>
</html>