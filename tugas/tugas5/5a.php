<?php
$mahasiswa = [
    [
        "nama" => "Alisha Salampessy",
        "nrp" => "243040055",
        "email" => "alisha.salampessy@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar1.jpeg"
    ],
    [
        "nama" => "Naila Zalfa",
        "nrp" => "243040015",
        "email" => "naila.zalfa@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar2.jpeg"
    ],
    [
        "nama" => "Derania Safa",
        "nrp" => "243040038",
        "email" => "derania.safa@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar3.jpeg"
    ],
    [
        "nama" => "Lestari Vebrianti",
        "nrp" => "243040044",
        "email" => "lestari.vebrianti@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar4.jpeg"
    ],
    [
        "nama" => "Azizah Nurul",
        "nrp" => "24115311",
        "email" => "azizah.nurul@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar5.jpeg"
    ],
    [
        "nama" => "Justin marcel",
        "nrp" => "24116476",
        "email" => "justin.marcel@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar6.jpeg"
    ],
    [
        "nama" => "putra Bahar",
        "nrp" => "24119287",
        "email" => "putra.bahar@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar7.jpeg"
    ],
    [
        "nama" => "Prayoga Iksan",
        "nrp" => "24117356",
        "email" => "prayoga.iksan@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar8.jpeg"
    ],
    [
        "nama" => "Chandra Winata",
        "nrp" => "24111159",
        "email" => "chandra.winata@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar9.jpeg"
    ],
    [
        "nama" => "Rocky Pratama",
        "nrp" => "24117410",
        "email" => "roky.pratama@gmail.com",
        "jurusan" => "Teknik Informaika",
        "gambar" => "gambar10.jpeg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <hr>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
        </hr>
    <?php endforeach; ?>
</body>

</html>