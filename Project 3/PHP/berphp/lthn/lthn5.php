<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
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
                <td name:><input type="radio" name="pri">Pria
                <input type="radio" name="wan" id="">Wanita</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alam" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama" id="">
                        <option value="islam">Islam</option>
                        <option value="kristen">Kristen</option>
                        <option value="budha">Budha</option>
                        <option value="hindu">Hindu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan Terakhir</td>
                <td>:</td>
                <td>
                    <select name="pete" id="">
                        <option value="sd">SD</option>
                        <option value="mst">SMP/MTs</option>
                        <option value="smka">SMA/SMK</option>
                        <option value="klh">Kuliah</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <select name="sta" id="">
                        <option value="sdh">Sudah Menikah</option>
                        <option value="blm">Belum Menikah</option>
                        <option value="pljr">Pelajar</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td><input type="checkbox" name="hobi" id="">Membaca 
                <input type="checkbox" name="hobi" id="">Menulis 
                <input type="checkbox" name="hobi" id=""> Ngepush</td>
            </tr>
            <tr>
                <td>Cita-Cita</td>
                <td>:</td>
                <td>
                    <select name="cit" id="">
                        <option value="Program">Programer</option>
                        <option value="youtube">Youtuber</option>
                    </select>    
                </td>   
            </tr>
            <tr>
                <td>Kata-kata Bijak</td>
                <td>:</td>
                <td><textarea name="ktbjk" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="KIRIM" name="kirim"></td>
            </tr>
        </table>
    </form>
    <?php 
    if (isset ($_GET ['kirim'])) {
        $nama : $_POST['nama'];
        $temla : $_POST['temla'];   
        $tangla : $_POST['tangla'];
        $jekla : $_POST['jekla'];
        $alamat : $_POST['alam'];
        $agama : $_POST['agama'];
        $pete : $_POST['pete'];
        $sta : $_POST['sta'];
        $hobi : $_POST['hobi'];
        $cita : $_POST['cit'];
        $bjk : $_POST['ktbjk'];
    }

    echo "Nama = $nama<br>"
    echo "Tempat Lahir = $temla<br>"
    ?>
</body>
</html>
