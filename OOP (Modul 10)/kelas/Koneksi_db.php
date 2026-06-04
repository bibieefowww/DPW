<?php

class Koneksi_db
{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "dbakademik";

    private $koneksi;

    public function connect()
    {
        $this->koneksi = mysqli_connect(
            $this->db_host,
            $this->db_user,
            $this->db_pass,
            $this->db_name
        );

        if (!$this->koneksi) {
            die("Koneksi gagal : " . mysqli_connect_error());
        }

        echo "Koneksi database berhasil";

        return $this->koneksi;
    }
}

/*
==================================================
KESIMPULAN
==================================================

1. mysqli_connect() digunakan untuk
   menghubungkan PHP dengan MySQL.

2. Jika koneksi gagal maka akan muncul
   pesan error.

3. Jika koneksi berhasil maka database
   dapat digunakan untuk proses CRUD.

*/
?>