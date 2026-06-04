<?php

require_once("kelas/akunBank.php");

// Data rekening 1
$data1 = new akunBank("001", 10000);
$data1->setNama("Andi");

// Data rekening 2
$data2 = new akunBank("002", 15000);
$data2->setNama("Budi");


// =================================
// Rekening Andi
// =================================

echo "<h3>Data Rekening Andi</h3>";

echo "Nama : " . $data1->getNama() . "<br>";
echo "No Rekening : " . $data1->getAccountNumber() . "<br>";
echo "Saldo Awal : Rp " . $data1->tampilkanSaldo() . "<br>";

$data1->tambahUang(5000);

echo "Setelah tambah saldo : Rp "
    . $data1->tampilkanSaldo() . "<br>";

$data1->kurangiUang(2000);

echo "Setelah tarik saldo : Rp "
    . $data1->tampilkanSaldo() . "<br>";

echo "Pajak (11%) : Rp "
    . $data1->hitungPajak() . "<br>";

echo "<hr>";


// =================================
// Rekening Budi
// =================================

echo "<h3>Data Rekening Budi</h3>";

echo "Nama : " . $data2->getNama() . "<br>";
echo "No Rekening : " . $data2->getAccountNumber() . "<br>";
echo "Saldo Awal : Rp " . $data2->tampilkanSaldo() . "<br>";

$data2->tambahUang(10000);

echo "Setelah tambah saldo : Rp "
    . $data2->tampilkanSaldo() . "<br>";

$data2->kurangiUang(3000);

echo "Setelah tarik saldo : Rp "
    . $data2->tampilkanSaldo() . "<br>";

echo "Pajak (11%) : Rp "
    . $data2->hitungPajak() . "<br>";

?>