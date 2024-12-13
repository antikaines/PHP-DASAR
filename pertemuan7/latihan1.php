<?php
// $_GET

$mahasiswa = [
    [
        "nama" => "inezzzz",
        "nrp"  => "09298744",
        "email" => "antkinz@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar"  => "antika.jpg.jpg"
    ],
    [
        "nama" => "dosiii",
        "nrp"  => "03874672",
        "email" => "dodsi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ines.jpg.jpg"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>GET</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>
        
<?php foreach( $mahasiswa as $mhs) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>">
            <?= $mhs["nama"]; ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>
</body>
</html>