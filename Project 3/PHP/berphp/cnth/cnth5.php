<?php

for ($x = 0; $x < 5; $x++ ){
    echo "Data : $x <br>";
}

for ($i = 0; $i <2; $i++) {
    for ($j = 0; $j <3; $j++) {
        echo "Ini perulangan ke ($i, $j)<br>";
    }
}

$x = 0;
while ($x < 5) {
    echo "Data : $x <br>";
    $x++;
} 

$x = 0;
do  {
    echo "Data : $x <br><br>";
    $x++;
} while ($x <= 10);

?>
