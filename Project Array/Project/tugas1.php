
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="">Jumlah Siswa</label>
                </td>
                <td>:</td>
                <td>
                    <input type="number" name="jls" id="">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Proses" name="pro">
                </td>
            </tr>
        </table>
    </form>
    
    <?php
if (isset($_POST['pro'])) {
    $jls = $_POST['jls'];
    
    for ($a = 0; $a < $jls; $a++) {
        echo '
        <form action="tugha1.php" method="post">
            <h2>Data Siswa Ke - ' . $a+1 . '</h2>
            <table>
                <tr>
                    <td>
                        <label for="">NIS</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nis" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Nama</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nma" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Kelas</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="text" name="kls" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Bahasa Indonesia</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="bin" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Bahasa Inggris</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="big" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Matematika</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="mtk" id="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="">Produktif</label>
                    </td>
                    <td>:</td>
                    <td>
                        <input type="number" name="prd" id="">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <input type="submit" value="Simpan" name="pro">
                    </td>
                </tr>
            </table>
            <br>
            <br>
        </form>
        ';

    }
}

?>
</body>
</html>




