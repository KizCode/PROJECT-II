<?php
echo "A+ = 96-100 Sempurna <br>";
echo "A+ = 96-100 Sempurna <br>";
echo "A+ = 96-100 Sempurna <br>";
echo "A+ = 96-100 Sempurna <br>";
echo "A+ = 96-100 Sempurna <br>";
echo "A+ = 96-100 Sempurna <br>";
echo "<br>";

$nilai = 20;

if ($nilai > 100) {
    echo "Nilai Tidak Ada";
} elseif ($nilai > 95 ) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda A+ <br>";
    echo "Anda Berhasil Melebihi KKM <br>";
    echo "Dengan Predikat Sempurna";
} elseif ($nilai > 89) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda A <br>";
    echo "Anda Berhasil Melebihi KKM <br>";
    echo "Dengan Predikat Sangat Baik";
} elseif ($nilai > 85) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda A- <br>";
    echo "Anda Berhasil Melebihi KKM <br>";
    echo "Dengan Predikat Baik Sekali";
} elseif ($nilai > 79) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda B+ <br>";
    echo "Anda Berhasil Melebihi KKM <br>";
    echo "Dengan Predikat Baik";
} elseif ($nilai > 74) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda B <br>";
    echo "Anda Berhasil  KKM <br>";
    echo "Dengan Predikat Baik";
} elseif ($nilai > 69) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda B- <br>";
    echo "Nilai Anda Kurang Dari KKM <br>";
    echo "Dengan Predikat Baik";
} elseif ($nilai > 65) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda C+ <br>";
    echo "Nilai Anda Kurang Dari KKM <br>";
    echo "Dengan Predikat Cukup ";
} elseif ($nilai > 59) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda C <br>";
    echo "Nilai Anda Kurang Dari KKM <br>";
    echo "Dengan Predikat Kurang";
} elseif ($nilai >= 0) {
    echo "KKM 70 <br>";
    echo "Grade Nilai Anda D <br>";
    echo "Nilai Anda Kurang Dari KKM <br>";
    echo "Dengan Predikat Sangat Kurang";
} else {
    echo "Nilai Tidak Ada";
}
   
?>