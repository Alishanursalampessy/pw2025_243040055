<?php
//while 
//1. Nilai Awal / Intial Value
//2. Kondisi Terminasi / Kapan looping berhenti
//3. Incerment / Decrement
$i = 10;
while ($i >= 1) {
    echo "Hello World $i x <br>";
    $i = $i - 1;
}

echo "<hr>";

for ($i = 1; $i <= 10; $i++) {
    echo "Hello World $i x <br>";
}
