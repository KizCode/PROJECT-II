<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="laundry.css">
    <title>LAUNDRY</title>
</head>

<body>
    <div class="menu">
        <form action="laundry1.php" method="post">
            <center>
                <table>
                    <h1>SELAMAT DATANG DI LAUNDRY KITA</h1>
                    <tr>
                        <td><b>Nama Pelanggan</b></td>
                        <td>:</td>
                        <td><input type="text" name="nama"></td>
                        <td></td>
                        <td><b>Nomer Pesanan</b></td>
                        <td>:</td>
                        <td><input type="number" name="nomer"></td>
                    </tr>
                    <tr>
                    </tr>
                    <tr>
                        <td><b>Tanggal</b></td>
                        <td>:</td>
                        <td><input type="date" name="tanggal"></td>
                        <td></td>
                        <td><b>Selesai</b></td>
                        <td>:</td>
                        <td><input type="date" name="tonggal"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="menu1">
                                <input type="submit" name="oke" value="SET">
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </center>
        </form>
    </div>
</body>
</html>