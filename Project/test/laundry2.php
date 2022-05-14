<?php

if (isset($_POST['set'])) {
    $bayar = $_POST['bayar'];
    $tg = $_POST['kg'];
    $total = $kg * 15000;
	$hasil = $bayar - $total;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="akhir">
        <table>
            <tr>
                <td>
                    <b>Berat</b>
                </td>
                <td>:</td>
                <td>
                    <?= $tg ?>/Kg
                </td>
                <td></td>
            </tr> 
            <form action="" method="post">
                <tr>
                    <td>
                        <b>Bayar</b>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="bayar" id="">
                    </td>        
                </tr>
            </form>
        </table>
    </div>
</body>
</html>