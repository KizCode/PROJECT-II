<?php 

switch ($_SERVER["REQUEST_URI"]) {

    case "/profil":
        include("profil.php");
        break;
    case "/home":
        echo "ini halaman Home";
        break;
    default:
        echo "404: Halaman tidak ditemukan";
}
?>