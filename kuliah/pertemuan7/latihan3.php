<?php
$mahasiswa = [
    [
        'nama' => 'Alisha',
        'nim' => '243040055',
        'email' => 'alisha@gmail.com',
        'jurusan' => 'Teknik Informatika'
    ],
    [
        'nama' => 'Kinanti',
        'nim' => '243040066',
        'jurusan' => 'Teknik Industri',
        'email' => 'kinanti@gmail.com',
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h2>Daftar Mahasiswa</h2>
    <ul>
        <?php foreach ($mahasiswa as $m) : ?>
            <li>
                <a href="latihan4.php?nama=<?= $m['nama']; ?>&nim=<?= $m['nim']; ?>&email=<?= $m['email']; ?>&jurusan=<?= $m['jurusan']; ?>">
                    <?= $m['nama']; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>