<?php

include 'koneksi.php';

if(isset($_GET['npm'])){

    $npm = $_GET['npm'];

    mysqli_query(
        $link,
        "DELETE FROM t_mahasiswa
         WHERE npm='$npm'"
    );
}

header("location:viewmahasiswa.php");

?>