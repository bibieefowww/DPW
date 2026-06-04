<?php

try {

    $username = "admin";
    $password = "12345";

    if (empty($username) || empty($password)) {
        throw new Exception("Username atau password tidak boleh kosong");
    }

    echo "Login berhasil";

}
catch (Exception $e) {

    echo "Terjadi Error : " . $e->getMessage();
}

/*
KESIMPULAN
1. Exception digunakan untuk menangani error secara terstruktur.
2. throw digunakan untuk melempar error.
3. catch digunakan untuk menangkap error dan menampilkan pesan.
*/
?>