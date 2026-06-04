<?php

require_once("kelas/Mahasiswa.php");


// Data Mahasiswa 1
$mhs1 = new Mahasiswa("Nama Anda");

$mhs1->setNIM("NIM Anda");
$mhs1->setKelas("Kelas Anda");
$mhs1->setJurusan("Teknik Informatika");


// Tampilkan data mahasiswa
echo "<h3>Data Mahasiswa</h3>";

echo "Nama : " . $mhs1->getNama();
echo "<br>";

echo "NIM : " . $mhs1->getNIM();
echo "<br>";

echo "Kelas : " . $mhs1->getKelas();
echo "<br>";

echo "Jurusan : " . $mhs1->getJurusan();
echo "<br>";

?>