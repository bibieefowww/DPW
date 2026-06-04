<?php

// menyimpan cookie selama 1 jam
setcookie("nama", "Ahmad", time() + 3600);
setcookie("nim", "2241720001", time() + 3600);

echo "Cookie berhasil dibuat.<br>";

if(isset($_COOKIE["nama"]) && isset($_COOKIE["nim"])) {
    echo "Nama : " . $_COOKIE["nama"] . "<br>";
    echo "NIM : " . $_COOKIE["nim"];
}

/*
KESIMPULAN
1. Cookie digunakan untuk menyimpan data pada browser client.
2. Data cookie dapat digunakan kembali selama masa aktifnya belum habis.
3. Cookie cocok digunakan untuk menyimpan preferensi pengguna.
*/
?>