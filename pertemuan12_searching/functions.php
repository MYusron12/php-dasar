<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    //ambil data dari tiap halaman dari form
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    //lakukan query insert data
    $query = "INSERT INTO mahasiswa VALUES('','$nrp','$nama','$email','$jurusan','$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload
    if ($error === 4) {
        echo "<script>
                    alert('pilih gambar terlebih dahulu');
                </script>";
        return false;
    }
    //cek apakh yang di upload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar');
            </script>";
        return false;
    }
    //cek jika ukurannya terlalu besar
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }
    //lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, 'img/' . $namaFile);

    return $namaFile;
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($dataId)
{
    global $conn;
    //ambil data dari tiap halaman dari form
    $id = $dataId["id"];
    $nrp = htmlspecialchars($dataId["nrp"]);
    $nama = htmlspecialchars($dataId["nama"]);
    $email = htmlspecialchars($dataId["email"]);
    $jurusan = htmlspecialchars($dataId["jurusan"]);
    $gambar = htmlspecialchars($dataId["gambar"]);

    //lakukan query ubah data
    $query = "UPDATE mahasiswa SET 
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa 
    WHERE 
    nrp LIKE '%$keyword%' OR
    nama LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'
    ";
    return query($query);
}
