<?php
//Array Bersarang / Nested Array
$mahasiswa = [
    ['Alisha', '243040055', 'alishasalampessy@gmail.com', 'Teknik Informatika'],
    ['cica', '243040027', 'cica@gmail.com', 'Teknik Informatika'],
    ['caca', '243040028', 'caca@gmail.com', 'Teknik Informatika'],
];
// echo $mahasiswa[1][2];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $m) : ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>NIM: <?= $m[1]; ?></li>
            <li>Email: <?= $m[2]; ?></li>
            <li>Jurusan: <?= $m[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>