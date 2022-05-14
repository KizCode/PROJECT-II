<?php

$a = 0;
do {
    echo "<br>";
    $a++;
    $i = 1;
    do {
        print $i." ";
        $i++;
    } while ($i <= $a );
}  while ($a < 10);

echo "<br>";

$a = 0;
do {
    echo "<br>";
    $a++;
    $i = $a;
    do {
        print $i." ";
        $i++;
    } while ($i <= 10 );
}  while ($a < 10);

echo "<br>";

echo "<center>";
$a = 0;
do {
    echo "<br>";
    $a++;
    $i = 1;
    do {
        echo " ";
        $i++;
    } while ($i <= $a );
    $j = 10; 
    do {
        echo $j." ";
        $j--;
    } while ($j >= $a );
}  while ($a < 10 );
echo "</center>";


?>