<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

$mpdf = new \Mpdf\Mpdf();

$html = '
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Halaman Daftar Mahasiswa</title>
</head>

<body>
<h1>Hallo</h1>

    
</body>

</html>
';
$mpdf->WriteHTML($html);
$mpdf->Output();
