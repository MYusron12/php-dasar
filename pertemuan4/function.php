<?php
function salam($waktu = "Datang", $admin = "Admin")
{
    return "Selamat $waktu, $admin";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam(); ?></h1>
</body>

</html>