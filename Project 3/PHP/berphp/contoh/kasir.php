<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SMK Mart</h2>
    <form action="kasirpro.php" method="post">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td>:</td> 
                <td><input type="text" name="nama_barang" value="" required></td> 
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td>:</td> 
                <td><input type="number" name="harga_barang" value="" required></td> 
            </tr>
            <tr>
                <td>Jumlah Barang</td>
                <td>:</td> 
                <td><input type="number" name="jumlah" value="" required></td> 
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="" value="Proses">
                    <input type="reset" name="" value="Reset">                
                    <br>
                    *diskon 5%, jika total +200.000
                </td>
            </tr>
        </table>
    </form>
</body>
</html>