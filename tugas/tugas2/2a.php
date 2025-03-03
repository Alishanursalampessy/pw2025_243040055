<?php
// variabel nama
$namadepan = "Alisha";
$namabelakang = "Salampessy";

// 1 - 100 menurun
for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "$namadepan $namabelakang";
    } elseif ($i % 3 == 0) {
        echo "$namadepan";
    } elseif ($i % 5 == 0) {
        echo "$namabelakang";
    } else {
        echo $i;
    }
    echo "<br>";
}
