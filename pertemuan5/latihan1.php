<?php 
//array 
// variabel yg dapat memiliki banyak nilai
// element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin","selasa","rabu","kamis");
// cara baru
$bulan = ["januari","febuari","maret"];
$arr1 = [123,"tulisan",false];


// menampilkan array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "jum'at";
$hari[] = "sabtu";
echo "<br>";
var_dump($hari);




?>