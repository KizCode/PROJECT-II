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
        <form action="" method="post">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="">
                    </td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kelas" id="">
                    </td>
                </tr>
                <tr>
                    <td>Metematika</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="mtk" id="">
                    </td>
                </tr>
                <tr>
                    <td>B. Inggris</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="bing" id="">
                    </td>
                </tr>
                <tr>
                    <td>B. Indonesia</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="bind" id="">
                    </td>
                </tr>
                <tr>
                    <td>Produktif</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="prod" id="">
                    </td>
                </tr>
        
            </table>
            <input type="submit" name='kirim' value="KIRIM">
        </form>
    </center>
</body>
</html>



<?php
if (isset ($_POST['kirim'])){
    $nama = $_POST['nama'];
    $kls = $_POST['kelas'];
    $mtk = $_POST['mtk'];
    $bing = $_POST['bing'];
    $bind = $_POST['bind'];
    $prod = $_POST['prod'];

}

class siswa{
    
    function siswa($nama1, $kelas1) {
    
        ?>
    
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?= $nama1 ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?= $kelas1 ?></td>
            </tr>
        </table>

    <?php 
            
    }
    
}

class nilai{

    function nilai($mtk1, $bing1, $bind1, $prod1){
        
        ?>

        <table>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td><?= $mtk1 ?></td>
            </tr>
        </table>

        <?php

    }

}

$siswa = new siswa();
$nilai = new nilai();
echo $siswa -> siswa($nama, $kls);
echo $nilai -> nilai($mtk, $bing, $bind, $prod);

?>