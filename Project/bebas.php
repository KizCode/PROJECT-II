<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bebas.css">
</head>
<body>
  <h1 align ="center">Selamat datang</h1>
  <p align ="center">Silahkan pilih nomor destinasi anda</p>

  <table cellspacing ="15" align ="center">
    <tr>
      <th></th>
      <th>Tempat</th>
      <th>Harga</th>
    </tr>
    <tr>
      <td></td>
      <td>1. Bukit Bintang</td>
      <td>Rp. 10.000</td>
    </tr>
    <tr>
      <td></td>
      <td>2. Pantai Sadranan</td>
      <td>Rp. 15.000</td>
    </tr>
    <tr>
      <td></td>
      <td>3. Candi Borobudur</td>
      <td>Rp. 50.000</td>
    </tr>
    <tr>
      <td></td>
      <td>4. Candi Prambanan</td>
      <td>Rp. 50.000</td>
    </tr>
    <tr>
      <td></td>
      <td>5. Keraton Yogyakarta</td>
      <td>Rp. 5.000</td>
    </tr>
    <tr>
      <td></td>
      <td>6. Malioboro</td>
      <td>Rp. 5.000</td>
    </tr>
    <tr>
      <td></td>
      <td>7. Pendopo Lawas</td>
      <td a href ="#">- >cafe</td>
    </tr>
    <tr>
      <td></td>
      <td>8. Goa Pindul</td>
      <td>Rp. 100.000</td>
    </tr>
  </table>
<center>
  <form action="" method="post">
  <p>Silahlan pilih nomor diatas </p>
  <input type="number" name ="bebas">
  <button name ="kirim" class ="button">ok</button>
  </form>
  <?php
  if (isset ($_POST['kirim'])) {
    $bebas = $_POST ['bebas'] ;
    if ($bebas == 1) {
      echo 'Bukit Bintang <br><br>';
      echo 'Harga tiket/orang : Rp.10.000<br>';
      echo '<input type ="number" name ="bebas">';
      echo '<button name ="kirimm" class ="button">Kirim</button>';
      if(isset($_POST ['kirimm'])) {
        $jumlah=$_POST['jumlah'];
        $total=$jumlah*10000;
        echo "total bayar :
        $total<br>";
        echo "bayar : $bayar<br>";
      }
    } elseif ($bebas == 2) {
      echo 'Pantai Sadranan<br> <br>';
      echo 'Harga tiket/orang : Rp.15.000<br>';
      echo '<input type ="number" name ="bebas">';
      echo '<button name ="kirimmm" class ="button">Kirim</button>';
    } elseif ($bebas == 3) {
      echo 'Candi Borobudur <br> <br>';
      echo 'Harga tiket/orang : Rp.50.000<br>';
      echo '<input type ="number" name ="bebas">';
      echo '<button name ="kirimmm" class ="button">Kirim</button>';
    }else if ($bebas == 4) {
      echo 'Candi Prambanan <br> <br>';
      echo 'Harga tiket/orang : Rp.50.000<br>';
      echo '<input type ="number" name ="bebas">';
      echo '<button name ="kirimmm" class ="button">Kirim</button>';
    }elseif ($bebas == 5) {
      echo 'Keraton Yogyakarta <br> <br>';
      echo 'Harga tiket/orang : Rp.5.000<br>';
      echo '<input type ="number" name ="bebas">';
      echo '<button name ="kirimmm" class ="button">Kirim</button>';
    }elseif ($bebas == 6) {
      echo 'Malioboro <br> <br>';
      echo 'Harga tiket/orang : Rp.5.000<br>';
      echo '<input type ="number" name ="bebas">';
      echo '<button name ="kirimmm" class ="button">Kirim</button>';
    }elseif ($bebas == 7) {
      echo 'Pendopo Lawas <br> <br>';
      if ($bebas == 7) {
        echo 'MAIN MENU :<br>';
        echo '<table cellspacing ="15" align ="center">
        <tr>
        <th></th>
        <th>Menu</th>
        <th>Harga</th>
        </tr>
        <tr>
        <td></td>
        <td>1.Coffe Starbuck</td>
        <td>Rp.67.000</td>
        </tr>
        <tr>
        <td></td>
        <td>2.Chatime</td>
        <td>Rp.20.000</td>
        </tr>
        <tr>
        <td></td>
        <td>3.Xi Boba</td>
        <td>Rp.23.000</td>
        </tr>
        <tr>
        <td></td>
        <td>4.Chicken Nuggets</td>
        <td>Rp.38.000</td>
        </tr>
        <tr>
        <td></td>
        <td>5.French fries</td>
        <td>Rp.30.000</td>
        </tr>
        <tr>
        <td></td>
        <td>6.Mexican Tacos</td>
        <td>Rp.25.000</td>
        </tr>
        </table><br> <br>';
        echo 'Silahkan pilih makanan dan minuman anda :';
        echo '&nbsp &nbsp';
        echo '<input type ="number">';
        echo '<button name ="kirim5" class ="button">Sumbit</button>';
        if (isset($_POST ['kirim5'])) {
          if ($kirim == 1) {
            echo 'Starbuck Rp.67.000';
          }else {
            echo 'maaf menu yang anda masukan salah';
          }
        }
      }
    }elseif ($bebas == 8) {
      echo 'Goa Pindul <br> <br>';
      echo 'Harga tiket/orang : Rp.10.000<br>';
      echo '<input type ="number">';
      echo '<button name ="kirim5" class ="button">Sumbit</button>';
    }else {
      echo 'maaf inputan tidak ada';
    }
  }
  ?>
  </center>
</body>
</html>