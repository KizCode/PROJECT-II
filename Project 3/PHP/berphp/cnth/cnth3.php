<?php
$lampu = "green";

switch ($lampu) {
    case 'red':
        echo "STOP! Anda Harus berhenti";
        break;
    case 'yellow':
        echo "Harap Hati - Hati";
        break;
    case 'green':
        echo "Silahkan Jalan";
        break;
    default:
        echo "Warna tidak sesuai";
}