<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="laundrygi.css">
    <title>LAUNDRY</title>
</head>
<body>
    <center>
        <div class="menu">
            <form action="" method="post">
                <table>
                <h1>SELAMAT DATANG DI LAUNDRY KYTA</h1>
                <tr>
                    <td><b>Nama Pelanggan</b></td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                    <td></td>
                    <td><b>Nomer pesanan</b></td>
                    <td>:</td>
                    <td><input type="number" name="nomer"></td>
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
                    <td><b>15rb/Kg</b></td>
                    <td>:</td>
                    <td><input type="number" name="kg"></td>
                    <td>Kg</td>
                    <td>Bayar</td>
                    <td>:</td>
                    <td> <input type="number" name="bayar"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="oke" value="SET"></td>
                </tr>
                </table>
            </form>
        </div>
    </center>
		<?php
		if(isset ($_POST['oke'])){
			$nama = $_POST['nama'];
			$nomer = $_POST['nomer'];
			$tanggal = $_POST['tanggal'];
			$kg = $_POST['kg'];
			$total = $kg * 15000;
			$tonggal = $_POST['tonggal'];
			$bayar = $_POST['bayar'];
            if ($bayar > $total) {
                $hasil = $bayar - $total;
            } else if ($bayar = $total) {
                $hasil = "Tidak Ada Kembalian";
            } else {
                $hasil = "Uang Anda Tidak Cukukp";
            }
		}
		?>
    <div class="output">
        <table>
            <u><b class="tm">Struk Laundry</b></u>
            <tr>
                <td><?= date("l"); ?></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
            <tr>
                <td>Nama Pelanggan</td>
                <td>:</td>
                <td><?= $nama ?></td>
            </tr>
            <tr>
                <td>Nomer Pesanan</td>
                <td>:</td>
                <td><?= $nomer ?></td>
            </tr>
            <tr>
                <td>Tanggal Pesanan</td>
                <td>:</td>
                <td><?= $tanggal ?></td>
            </tr>
            <tr>
                <td>Tanggal Selesai</td>
                <td>:</td>
                <td><?= $tonggal ?></td>
            </tr>
            <tr>
                <td>Berat Laundryan</td>
                <td>:</td>
                <td><?= $kg ?> Kg</td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td>:</td>
                <td>Rp.<?=$total?></td>
            </tr>
            <tr>
                <td>Kembalian</td>
                <td>:</td>
                <td><?=$hasil?></td>
            </tr>
            <tr>
                <td><br></td>
            </tr>
        </table>
        <br>
        <b>Terima Kasih Sudah Mencuci Di Tempat Kami</b><br>
    </div>

</body>
</html>