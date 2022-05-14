<?php

$artikel = ["Kategori" => "Olahrga", "Tanggal" => "Jumat (11/2/2022)"];
$isi = ["Judul" => "Hari Ini Persib Bandung Akan Menghadapi PSS Selman", "isi" => "Suara.com - PSS Sleman akan melakoni misi berat melawan Persib Bandung dalam pekan ke-24 BRI Liga 1
2021/2022 di Stadion Kapten 1 Wayan Dipta, Gianyar, Bali, Jumat (11/2/2022)"];

echo "<p> Kategori : ".$artikel["Kategori"]."<p>";
echo "<p> Tanggal : ".$artikel["Tanggal"]."</p>";  

echo "<h2>".$isi["Judul"]."</h2>";
echo "<p>".$isi["isi"]."</p>";
 

?>