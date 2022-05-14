<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tutorial Belajar form HTML - PHP</h2>
    <form action="" method="get">
        Nama :  <input type="text" name="nama" />
        <br>
        E-Mail : <input type="text" name="email" />
        <br>
        <input type="submit" name="proses" value="Proses">
    </form>
    <?php 
    if (isset ($_GET ['proses'])) {
         $nama : $_GET['nama'];
        $email : $_GET['email'];   
    }
    ?>
</body>
</html>
