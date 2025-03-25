<?php
//Membuat Array
$hari = array('senin', 'selasa', 'rabu');
$bulan = array('Januari', 'Februari', 'Maret');
$myArray = ['Alisha', 39, true];

//Mencetak / Menampilkan Array
//Menampilkan seluruh isi (hanya untuk debugging)
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//Gunakan echo jika ingin mencetak 1 elemen (menggunakan index)
echo $hari[2];
echo "<br>";
echo $myArray[0];
echo "<hr>";

// Menambahkan isi Array
// gunakan []
$hari[] = 'Kamis';
$hari[] = "Jumat";
$bulan[] = 'April';
print_r($hari);
echo "<br>";
print_r($bulan);
