<?php

$negara = [
    "Indonesia" => [
        'Ibu Kota' => 'Jakarta',
        'Tahun Kemerdekaan' => '1945',
        'Mata Uang' => 'Rupiah'
    ],
    "Malaysia" => [
        'Ibu Kota' => 'Kuala Lumpur',
        'Tahun Kemerdekaan' => '1957',
        'Mata Uang' => 'Ringgit'
    ],
    "Brunei Darussalam" => [
        'Ibu Kota' => 'Bandar Seri Begawan',
        'Tahun Kemerdekaan' => '1984',
        'Mata Uang' => 'Dolar Brunei Darussalam'
    ],
    "Singapore" => [
        'Ibu Kota' => 'Singapura',
        'Tahun Kemerdekaan' => '1959',
        'Mata Uang' => 'Dolar Singapura' 
    ],
    "Timor Leste" => [
        'Ibu Kota' => 'Dili',
        'Tahun Kemerdekaan' => '1975',
        'Mata Uang' => 'Dolar Amerika Serikat'
    ],
    "Filipina" => [
        'Ibu Kota' => 'Manila',
        'Tahun Kemerdekaan' => '1898',
        'Mata Uang' => 'Peso'
    ],
    "Thailand" => [
        'Ibu Kota' => 'Bangkok',
        'Tahun Kemerdekaan' => '1932',
        'Mata Uang' => 'Baht'
    ],
    "Vietnam" => [
        'Ibu Kota' => 'Hanoi',
        'Tahun Kemerdekaan' => '1945',
        'Mata Uang' => 'dong'
    ],
    "Laos" => [
        'Ibu Kota' => 'Vientiane',
        'Tahun Kemerdekaan' => '1953',
        'Mata Uang' => 'Kip'
    ],
    "Kamboja" => [
        'Ibu Kota' => 'Phnom Penh',
        'Tahun Kemerdekaan' => '1953',
        'Mata Uang' => 'Riel'
    ],
];

echo "<h2> Output Pertama </h2>";

$size = count($negara);
$keys = array_keys($negara);
for($i = 0; $i < $size; $i++)
{
    echo "Negara : ".$keys[$i]. "<br>";
    foreach($negara[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="array2.css">
    <title>Document</title>
</head>
<body>
    <div class="nega">
        <h2>Output ke-2</h2>
        <table border="1" cellspacing = "0">
            <tr class = "tr">
                <th>NEGARA</th>
                <th>IBU KOTA</th>
                <th>KEMERDEKAAN</th>
                <th>MATA UANG</th>
            </tr>
            
                <?php
                $size = count($negara);
                $keys = array_keys($negara);
                for($i = 0; $i < $size; $i++)
                {
                    echo "<tr class = tr1><td>".$keys[$i]."</td>";
                    foreach($negara[$keys[$i]] as $key => $value) {
                        echo "<td> " . $value . "</td>";
                    }
                    echo "</tr>";
                }
                ?>
        </table>
    </div>
</body>
</html>