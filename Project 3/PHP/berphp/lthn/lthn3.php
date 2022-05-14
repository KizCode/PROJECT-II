<?php

$ipk = -1;

if ($ipk > 4 || $ipk < 0) {
    echo "Anda tidak dapat mengambil 24 sks <br>";
    echo "Nilai yang anda masukan salah";
} elseif ($ipk >= 3) {
    echo "Anda bisa mengambil 24 sks";
} elseif ($ipk >= 2.5 ) {
    echo "Anda bisa mengambil 21 sks";
} elseif ($ipk >= 2) {
    echo "Anda bisa mengambil 18 sks";
} elseif ($ipk >= 1.5) {
    echo "Anda bisa mengambil 15 sks";
} elseif ($ipk < 1.5) {
    echo "Anda bisa mengambil 12 sks";
} else {
    echo "Anda tidak dapat mengambil 24 sks <br>";
    echo "Nilai yang anda masukan salah";
}