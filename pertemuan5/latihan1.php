<?php
//array
//variable yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yang berbeda
//array pasangan antara key dan value
//key nya adalah index, yang dimulai dari 0

//membuat array 
//cara lama 
$hari = array("senin", "selasa", "rabu", "kamis", "jumad", "sabtu", "minggu");
//cara baru
$bulan = ["january", "february", "maret", "april", "mei", "juny", "jully", "agustus", "september", "oktober", "november", "desember"];
//contoh tipe data yang berbeda
$kalender = [123, "tanggalan", false];


//menampilkan array
//menggunakan var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";
//menampilkan 1 element pada array
// echo $kalender[0];
// echo "<br>";
// echo $bulan[2];

//menambahkan element baru pada array
var_dump($hari);
$hari[] = "libur";
$hari[] = "kerja";
echo "<br>";
var_dump($hari);