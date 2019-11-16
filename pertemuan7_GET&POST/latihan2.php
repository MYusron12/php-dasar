<?php
if (
    !isset($_GET["Nama"]) ||
    !isset($_GET["Nik"]) ||
    !isset($_GET["Jabatan"]) ||
    !isset($_GET["Toko"]) ||
    !isset($_GET["gambar"])
) {
    header("Location: latihan1.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rincian Toko</title>
    <style>
        .img {
            height: 100px;
            width: 100px;
        }
    </style>
</head>

<body>
    <h1>Detai Rincian Toko</h1>
    <ul>
        <li>
            <h2><?php echo $_GET["Nama"]; ?></h2>
        </li>
        <li><img class="img" src="img/<?php echo $_GET["gambar"]; ?>"></li>
        <li><?php echo $_GET["Nik"]; ?></li>
        <li><?php echo $_GET["Jabatan"]; ?></li>
        <li><?php echo $_GET["Toko"]; ?></li>
    </ul>
    <a href="latihan1.php">Daftar Karyawan</a>
</body>

</html>