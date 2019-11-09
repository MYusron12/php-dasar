<?php
//array asociative
//adalah array numerik, kecuali
//key adalah string yang kita buat sendiri
$karyawan = [
    [
        "Nama" => "Yusron", "Nik" => "19050155",
        "Jabatan" => "Cos",
        "Toko" => "Medang 2"
    ],
    [
        "Nama" => "Anonnim", "Nik" => "19050123",
        "Jabatan" => "Cos",
        "Toko" => "Dasana 2"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARRAY ASSOSIATIF</title>
</head>

<body>
    <h1>Contoh Array Assosiatif</h1>
    <?php foreach ($karyawan as $data) { ?>
        <ul>
            <li>Nama : <?php echo $data["Nama"] ?></li>
            <li>Nik : <?php echo $data["Nik"] ?></li>
            <li>Jabatan : <?php echo $data["Jabatan"] ?></li>
            <li>Toko : <?php echo $data["Toko"] ?></li>
        </ul>
    <?php } ?>
</body>

</html>