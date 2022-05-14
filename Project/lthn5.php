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
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="temla"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tangla"></td>
            </tr>
            <tr>
                <td>Jenis Klamin</td>
                <td>:</td>
                <td><input type="radio" name="jekla" value="Pria">Pria
                <input type="radio" name="jekla" id="" value="Wanita">Wanita</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="" cols="30" rows="10" value=""></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama" id="">
                        <option value="Islam">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Budha">Budha</option>
                        <option value="Hindu">Hindu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td>
                    <select name="pete" id="">
                        <option value="SD">SD</option>
                        <option value="SMP/MTs">SMP/MTs</option>
                        <option value="SMA/SMK">SMA/SMK</option>
                        <option value="Kuliah">Kuliah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="status" id="">
                        <option value="Sudah Menikah">Sudah Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Pelajar">Pelajar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" id="" value="Membaca">Membaca 
                <input type="checkbox" name="hobi" id="" value="Menulis">Menulis 
                <input type="checkbox" name="hobi" id="" value="Ngpush"> Ngepush</td>
            </tr>
            <tr>
                <td>Cita-Cita</td>
                <td>:</td>
                <td>
                    <select name="cit" id="">
                        <option name="cit" value="Program">Programer</option>
                        <option name="cit" value="Youtube">Youtuber</option>
                    </select>    
                </td>   
            </tr>
            <tr>
                <td>Kata-kata Bijak</td>
                <td>:</td>
                <td><textarea name="ktbjk" id="" cols="30" rows="10" value=""></textarea></td>
            </tr>
        </table>
        <input type="submit" value="KIRIM" name="proses">
    </form>
    
    <?php 
    if (isset ($_POST ['proses'])) {
        $nama = $_POST['nama'];
        $temla = $_POST['temla'];   
        $tangla = $_POST['tangla'];
        $jekla = $_POST['jekla'];
        $alamat = $_POST['alamat'];
        $agama = $_POST['agama'];
        $pete = $_POST['pete'];
        $sta = $_POST['status'];
        $hobi = $_POST['hobi'];
        $cita = $_POST['cit'];
        $bjk = $_POST['ktbjk'];
    }
    
    echo "<br>";
    echo "<br>";
    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $temla<br>";
    echo "Tanggal Lahir : $tangla<br>";
    echo "Jenis Klamin : $jekla<br>";
    echo "Alamat : $alamat<br>";
    echo "Agama : $agama<br>";
    echo "Pendidikan Terakhir : $pete<br>";
    echo "Status : $sta<br>";
    echo "Hobi : $hobi<br>";
    echo "Cita-Cita : $cita<br>";
    echo "Kata-Kata Bijak : $bjk<br>";
    ?>
</body>
</html>
