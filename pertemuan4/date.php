<?php

//date
//untuk menampilkan tanggal dengan format tertentu
//echo date("l,d-M-Y");

//time
//unix timestamp / epoch time
//echo time();
// kalau - = menghitung hari kebelakang
// kalau + = menghitung hari kedepan
//echo date("l d M Y", time()-60*60*24*100);

//mktime
//membat sendiri detik
//urutan nya = (jam,menit,detik,bulan,tanggal,tahun)
//echo date("l", mktime(0,0,0,3,11,2003));

//kebalikan nya jika strtotime itu string to time
//strtotime
//echo date("l", strtotime("11 mar 2003"));






?>