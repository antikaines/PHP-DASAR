<?php
$mahasiswa = [
    ["Antika Ines", "008372636", "antikanjb@gmail.com", "teknik informasi"],
    ["Bunga Fitria Lestari", "0077768556","bungaftrialstr3546@gmail.com", "teknik informatika"],
    ["Dosica Faussy", "0088812345","dosicafaussyy345@gmail.com", "teknik informatika"],
];

$mahasiswa = [
[
    "nama" => "Bunga fitria",
    "NISN" => "0077768556",
    "email" => "bungafitrialstr3546@gmail.com",
    "Jurusan" => "teknik informatika",
    "gambar" => "foto1.jpg"
],
[
    "nama" => "Dosica faussy",
    "NISN" => "0088812345",
    "email" => "dosicafaussyy345@gmail.com",
    "Jurusan" => "teknik informatika",
    "gambar" => "foto2.jpg"
]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/foto1.jpg<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NISN : <?= $mhs["NISN"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["Jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
    
</body>
</html>