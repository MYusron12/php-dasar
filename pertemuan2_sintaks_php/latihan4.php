<!-- //materi kuliah -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Method GET & POST</title>
    <style>
        .container {
            background-color: #132fff;
        }
    </style>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <div class="container">
        <form method="post">
            <table>
                <tr>
                    <td>Masukan NIM :</td>
                    <td> <input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Masukan Nama :</td>
                    <td> <input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Masukan Tempat Lahir :</td>
                    <td> <input type="text" name="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Masukan Tanggal Lahir :</td>
                    <td> <input type="date" name="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>Masukan Jurusan :</td>
                    <td><select name="jurusan" id="">--Pilihan
                            <option value="sistem_informasi">S1</option>
                            <option value="manajemen_informatika">D3</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Masukan Alamat :</td>
                    <td><textarea name="alamat" id="" cols="30" rows="3"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="tampil">Tampil</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST['tampil'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];
    echo "<br> $nim";
    echo "<br> $nama";
    echo "<br> $tempat_lahir";
    echo "<br> $tanggal_lahir";
    echo "<br> $jurusan";
    echo "<br> $alamat";
}
?>