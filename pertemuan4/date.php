<?php
//untuk menampilkan tanggal dengan format tertentu
//echo date("l, d-M-Y");

//time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
//echo date("l", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 5, 15, 1993));

// strtotime
echo date("l", strtotime("15 may 1993"));
