<?php

// memanggil file koneksi.php untuk melakukan koneksi database
include 'koneksi.php';


// mengecek apakah tombol input dari form telah diklik
if (isset($_POST['input'])) {

    // membuat variabel untuk menampung data dari form
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    // jalankan query INSERT untuk menambah data ke database
    $query = "INSERT INTO t_dosen VALUES (NULL, '$namaDosen', '$noHP')";
    $result = mysqli_query($link, $query);

    // periksa query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " .
            mysqli_errno($link) .
            " - " .
            mysqli_error($link));
    }
}


// melakukan redirect (mengalihkan) ke halaman viewdosen.php
header("location:viewdosen.php");

/*
==================================================
KESIMPULAN
==================================================

1. File proses_inputdosen.php digunakan
   untuk memproses data dari form input.

2. Data dikirim menggunakan method POST.

3. mysqli_query() digunakan untuk menjalankan
   perintah SQL INSERT.

4. Data yang berhasil diproses akan disimpan
   ke tabel t_dosen.

5. header("location:viewdosen.php")
   digunakan untuk mengalihkan halaman setelah
   proses penyimpanan berhasil dilakukan.

*/
?>