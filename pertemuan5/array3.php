<?php
$mahasiswa = ["antika ines", "043040023", "Teknik informatika", "antkinzz@gmail.com"];
             ["bunga", "098765534", "Teknik informatika", "bungalst@gmail.com"];
             ["dosica", "08735456", "Teknik informatika", "disc@gmail.com"];
             ["dina", "08987347", "Teknik informatika", "dinaa@gmail.com"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs)   :?>
<ul>
   <li><?php echo $mahasiswa[0]; ?></li>
   <li><?php echo $mahasiswa[1]; ?></li>
   <li><?php echo $mahasiswa[2]; ?></li>
   <li><?php echo $mahasiswa[3]; ?></li>
</ul>
<?php endforeach;   ?>


</body>
</html>


