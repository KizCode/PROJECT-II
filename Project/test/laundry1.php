<?php


if(isset ($_POST['oke'])){
	$nama = $_POST['nama'];
	$nomer = $_POST['nomer'];
	$tanggal = $_POST['tanggal'];
	$tonggal = $_POST['tonggal'];

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
		<div class="struk">
			<h1>Struk Laundry</h1>
			<table>
				<tr>
					<td>
						<b>Nama Pelanggan<br>
					</td>
					<td>:</td>
					<td>
						<?=$nama?>
					</td>
				</tr>
				<tr>
					<td>
						<b>Nomer Pesanan</b>
					</td>
					<td>:</td>
					<td>
						<?=$nomer?>
					</td>
				</tr>
				<tr>
					<td>
						<b>Tanggal Pesanan</b>
					</td>
					<td>:</td>
					<td>
						<?=$tanggal?>
					</td>
				</tr>
				<tr>
					<td>
						<b>Tanggal Selesai</b>
					</td>
					<td>:</td>
					<td>
						<?=$tonggal?>
					</td>
				</tr>
			</table>	
				<b>Terima Kasih Sudah Mencuci Di Tempat Kami</b><br>
			</div>
			<div class="bayar">
				<form action="laundry2.php" method="post">
					<table>
						<tr>
							<td>
								<b>Berat Laundry</b>		    
							</td>
							<td>:</td>
							<td>
								<input type="number" name="kg" id="">
							</td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td><input type="submit" name="set" value="SET"></td>
						</tr>
					</table>
				</form>
			</div>
		</body>
		</html>
