<?php

$data = array(
    array("nama"=>"Andi", "umur"=>20),
    array("nama"=>"Budi", "umur"=>21),
    array("nama"=>"Citra", "umur"=>19),
    array("nama"=>"Dewi", "umur"=>22),
    array("nama"=>"Eko", "umur"=>23),
    array("nama"=>"Fajar", "umur"=>20),
    array("nama"=>"Gita", "umur"=>24),
    array("nama"=>"Hani", "umur"=>19),
    array("nama"=>"Indra", "umur"=>25),
    array("nama"=>"Joko", "umur"=>18),
    array("nama"=>"Kiki", "umur"=>21),
    array("nama"=>"Lina", "umur"=>22),
    array("nama"=>"Mira", "umur"=>20),
    array("nama"=>"Nina", "umur"=>19),
    array("nama"=>"Oki", "umur"=>23)
);

$json = json_encode($data, JSON_PRETTY_PRINT);

echo "<pre>";
echo $json;
echo "</pre>";

/*
KESIMPULAN
1. Array dapat dikonversi menjadi format JSON menggunakan json_encode().
2. JSON sering digunakan untuk pertukaran data antara server dan aplikasi.
3. JSON lebih ringan dan mudah dibaca oleh berbagai bahasa pemrograman.
*/
?>