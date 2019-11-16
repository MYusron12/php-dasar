<?php
//array
// varible yang bisa menampung banyak nilai
// element pada array boleh memiliki tipe data berbeda
// pasangan antara key dan value
// keynya adalah index yang dimulai dari 0

// membuat array 
//cara lama
$hari = array("senin", "selasa", "rabu");
$karyawan = array("Yusron", "Dimas");

//cara baru
$bulan = ["januari", "februari", "maret"];
$arr1 = [123, "tulisan", false];
$buruh = ["jaenal", "Asep"];

//menapilkan array
// var_dump, print_r
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 element pada array
// echo $arr1[0];

//menambahkan element baru pada array
var_dump($hari);
$hari[] = "kamis";
echo "<br>";
var_dump($hari);
