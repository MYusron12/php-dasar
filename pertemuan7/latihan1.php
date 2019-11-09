<?php
//SUPERGLOBALS
// variable global milik php
//merupakan array assosiative

//$_GET
$karyawan = [
    [
        "Nama" => "Yusron",
        "Nik" => "19050155",
        "Jabatan" => "Cos",
        "Toko" => "Medang 2",
        "gambar" => "1.jpg"
    ],
    [
        "Nama" => "Anonnim",
        "Nik" => "19050123",
        "Jabatan" => "Cos",
        "Toko" => "Dasana 2",
        "gambar" => "2.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
    <style>
        .img {
            height: 100px;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>DAFTAR KARYAWAN</h1>
    <ul>
        <?php foreach ($karyawan as $dakar) { ?>
            <!-- <ul>
                <li><img class="img" src="img/<?php echo $dakar["gambar"]; ?>" alt=""></li>
                <li><?php echo $dakar["Nama"]; ?></li>
                <li><?php echo $dakar["Nik"]; ?></li>
            </ul> -->
            <li>
                <a href="latihan2.php?Nama=<?php echo $dakar["Nama"]; ?>&Nik=<?php echo $dakar["Nik"]; ?>&Jabatan=<?php echo $dakar["Jabatan"]; ?>&Toko=<?php echo $dakar["Toko"]; ?>&gambar=<?php echo $dakar["gambar"]; ?>"><?php echo $dakar["Nama"]; ?></a>
            </li>
        <?php } ?>

    </ul>
</body>

</html>