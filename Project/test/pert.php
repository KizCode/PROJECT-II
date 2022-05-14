<?php

function pert($uang = 50000, $uangmasuk = 0, $uangkeluar = 0) {
    $uangtotal = $uang + $uangmasuk;
    $uangtotal = $uang + $uangkeluar;
    if ($uangtotal < 50000) {
        echo "Uang Tidak Bisa di Ambil<br>";
    } else {
        return "Uang Anda $uangtotal"; 
    }
}

?>

<?php

if (isset($_POST ['set'])) {
    $masuk = $_POST ['masuk'];
    
    if ($masuk >= 50000) {
        $uangmasuk = $masuk + 50000;
        echo pert($uangmasuk);

    } else {
        echo "Uang Kurang";
    }
} 

if (isset($_POST ['set1'])) {
    $masuk = $_POST ['masuk1'];
    
    if ($masuk >= 50000) {
        $uangkeluar = $masuk - 50000;
        echo pert($uangkeluar);

    } else {
        echo "Uang Kurang";
    }
} 

?>