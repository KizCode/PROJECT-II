<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PERBANKAN</h1>
    <div class = "isi">
        <table>
            <form action="" method="post">
                <tr>
                    <td>
                        <label for="">
                            <h3>Pilih Program</h3>
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>Setor Tunai</td>
                </tr>
                <tr>
                    <td>Tarik Tunai</td>
                </tr>
                <tr>
                    <td>Nabung</td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="txt" id="">
                    </td>
                    <td>
                        <input type="submit" name="sub" value="SET">
                    </td>
                </tr>
            </form>
        </table>
    </div>
    <div class="pert">
    </div>
</body>

        <?php
            if(isset($_POST['sub'])) {
                $pro = $_POST['txt'];
                if ($pro == "Setor Tunai" || $pro == "1") {
                    echo '
                    <form action="pert.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <p>Masukan Jumlah</p>
                                </td>
                                <td>
                                    <input type="number" name="masuk" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="set" value="SET">
                                </td>
                            </tr>       
                        </table>
                    </form> 
                    ';
                } else if ($pro = "Tarik Tunai" || $pro == "2") {
                    echo '
                    <form action="pert.php" method="post">
                        <table>
                            <tr>
                                <td>
                                    <p>Masukan Jumlah</p>
                                </td>
                                <td>
                                    <input type="number" name="masuk1" id="">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="set1" value="SET">
                                </td>
                            </tr>       
                        </table>
                    </form> 
                    ';
                } else {
                    
                }
            }
        ?>

