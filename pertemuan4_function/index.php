<?php
function pengurus($organisasi, $jabatan)
{
    return "Faisal dari $organisasi, sebagai $jabatan";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contoh Fuction</title>
</head>

<body>
    <h1><?php echo pengurus("IMM", "Pengurus"); ?> </h1>
    <table>
        <thead>
            <tr>
                <th>Nomer</th>
                <th>Nama</th>
                <th>Nik</th>
                <th>Toko</th>
                <th>Kode Toko</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1</th>
                <td>Yusron</td>
                <td>19050155</td>
                <td>Medang Lestari 2</td>
                <td>TE07</td>
            </tr>
        </tbody>
    </table>
</body>

</html>