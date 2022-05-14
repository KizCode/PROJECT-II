<?php

$sekolah = [
    "Dosen" => [
        "Nama" => "Ahmad"
    ],
    "Mahasiswa" => [
        "Nama" => "Asep",
        "Matkul" => [
            "mat" => "Java",
            "mat" => "PHP",
            "mat" => "OOP"
        ]

    ]
];

//foreach ($sekolah['dosen'] as $data) {
//    echo "Nama : ".$data;
//}
//foreach ($sekolah['mahasiswa'] as $maha => $value) {
//    echo "Nama : ".$maha;
//}
$size = count($sekolah);
$keys = array_keys($sekolah);
for($i = 0; $i < $size; $i++)
{
    echo $keys[$i]. "<br>";
    foreach($sekolah[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
    echo "<br>";
}

//echo $dosen["dos"];
//echo $dosen["mahasiswa"]["nama"];
//echo $dosen["mahasiswa"]["matkul"]["mat"];
?>