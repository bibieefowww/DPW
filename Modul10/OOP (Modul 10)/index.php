<?php

require_once("kelas/Manusia.php");


// Data Andi
$andi = new Manusia();
$andi->setNama("Andi Pratama");
$andi->setUmur(20);


// Data Budi
$budi = new Manusia();
$budi->setNama("Budi Santoso");
$budi->setUmur(21);


// Data Saya (ganti sesuai identitas Anda)
$saya = new Manusia();
$saya->setNama("Nama Anda");
$saya->setUmur(19);


// Menampilkan data Andi
echo "Nama : " . $andi->getNama();
echo "<br>";
echo "Umur : " . $andi->getUmur();
echo "<br>";
echo "NIK : " . $andi->getNIK();

echo "<hr>";


// Menampilkan data Budi
echo "Nama : " . $budi->getNama();
echo "<br>";
echo "Umur : " . $budi->getUmur();
echo "<br>";
echo "NIK : " . $budi->getNIK();

echo "<hr>";


// Menampilkan identitas saya
echo "Nama : " . $saya->getNama();
echo "<br>";
echo "Umur : " . $saya->getUmur();
echo "<br>";
echo "NIK : " . $saya->getNIK();

echo "<hr>";

/*
==================================================
KESIMPULAN
==================================================

1. Class digunakan sebagai cetakan (blueprint)
   untuk membuat objek.

2. Property digunakan untuk menyimpan data
   yang dimiliki objek.

3. Method digunakan untuk mengolah atau
   mengakses data dalam objek.

4. Setter digunakan untuk mengisi nilai
   property.

5. Getter digunakan untuk mengambil nilai
   property.

6. Objek Andi, Budi, dan Saya dibuat dari
   class Manusia sehingga memiliki property
   dan method yang sama.

7. Konsep ini disebut OOP (Object Oriented
   Programming) yang membuat program lebih
   terstruktur dan mudah dikembangkan.

*/

?>