<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Galeri Gambar</title>

    <style>
        img{
            width:200px;
            height:150px;
            margin:10px;
            border:1px solid #ccc;
            padding:5px;
        }
    </style>

</head>
<body>

<h2>Galeri Gambar</h2>

<?php

$fileList = glob("gambar/*");

foreach ($fileList as $filename) {

    if (is_file($filename)) {

        echo "<img src='$filename' alt='gambar'>";
    }

}

/*
==================================================
KESIMPULAN
==================================================

1. Fungsi glob() digunakan untuk membaca
   semua file dalam folder tertentu.

2. Fungsi is_file() digunakan untuk
   memastikan data yang dibaca adalah file.

3. Tag <img> digunakan untuk menampilkan
   gambar ke halaman web.

4. Dengan perulangan foreach, seluruh
   gambar dalam folder dapat ditampilkan
   secara otomatis tanpa menulis satu
   per satu nama file.

5. Jika ada gambar baru yang diupload ke
   folder gambar, maka gambar tersebut
   otomatis muncul di galeri.
*/
?>

</body>
</html>