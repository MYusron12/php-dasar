<?php
$mahasiswa = [
    ["Yusron", "D3", "Kelas Shift", "yusron@gmail.com"], ["Asep", "S1", "Malem", "asep@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ARRAY DALAM ARRAY</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $daftarMahasiswa) { ?>
        <ul>
            <li>Nama :
                <?php echo $daftarMahasiswa[0]; ?>
            </li>
            <li>Jurusan :
                <?php echo $daftarMahasiswa[1]; ?>
            </li>
            <li>Kelas :
                <?php echo $daftarMahasiswa[2]; ?>
            </li>
            <li>Email :
                <?php echo $daftarMahasiswa[3]; ?>
            </li>
        </ul>
    <?php } ?>
</body>

</html>