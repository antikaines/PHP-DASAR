<?php
require 'functions.php';
// cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {


    // cek apakah data berhasil di tambahkan atau tidak
    if(   tambah($_POST) > 0  ) {
        echo "
             <script>
               alert('data berhasil di tambahkan!');
               document .location.href = 'index.php';
             </script>
        ";
    } else {
        echo"
          <script>
               alert('data gagal di tambahkan! ' );
               document .location.href = 'index.php';
          </script>
";

    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data MahaSiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <from action="" methode="post">
        <ul>
            <li>
          <label for="nrp">"NRP : "</label>
          <input type="text" name="nrp" id="nrp" required>
</li>
<li>