<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload File</title>

    <meta name="description" content="Belajar PHP">
    <meta name="keywords" content="tulis nim anda disini">
    <meta name="author" content="tulis nama anda disini">
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
      method="post"
      enctype="multipart/form-data">

    <p>
        Label Pilih Gambar yang akan di upload :
        <br><br>

        <input type="file" name="gambar" id="gambar">
    </p>

    <input type="submit" value="Upload Image" name="submit">

</form>

<?php

// ==================================================
// Semua proses upload dijalankan hanya jika tombol
// submit ditekan agar tidak muncul warning
// ==================================================

if (isset($_POST["submit"])) {

    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $uploadOk = 1;
    $tipeGambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // cek apakah file berupa gambar
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);

    if ($check !== false) {

        echo "File berupa citra/gambar - "
            . $check["mime"] . ".<br>";

        $uploadOk = 1;

    } else {

        echo "File bukan gambar.<br>";
        $uploadOk = 0;
    }


    // ==================================================
    // cek apakah file sudah ada
    // ==================================================

    if (file_exists($target_file)) {

        echo "Sorry, file already exists.<br>";
        $uploadOk = 0;
    }


    // ==================================================
    // cek ukuran file
    // ==================================================

    if ($_FILES["gambar"]["size"] > 500000) {

        echo "Sorry, file anda terlalu besar.<br>";
        $uploadOk = 0;
    }


    // ==================================================
    // filter format file
    // ==================================================

    if (
        $tipeGambar != "jpg" &&
        $tipeGambar != "jpeg" &&
        $tipeGambar != "png" &&
        $tipeGambar != "gif"
    ) {

        echo "Sorry, hanya file JPG, JPEG, PNG & GIF.<br>";
        $uploadOk = 0;
    }


    // ==================================================
    // proses upload
    // ==================================================

    if ($uploadOk == 0) {

        echo "Sorry, file anda gagal upload.";

    } else {

        if (
            move_uploaded_file(
                $_FILES["gambar"]["tmp_name"],
                $target_file
            )
        ) {

            echo "<br>File "
                . htmlspecialchars(basename($_FILES["gambar"]["name"]))
                . " berhasil diupload.";

        } else {

            echo "Sorry, Ada error saat upload.";
        }
    }
}

/*
==================================================
KESIMPULAN
==================================================

1. Upload file menggunakan form dengan
   enctype="multipart/form-data".

2. File yang diupload dapat diperiksa
   jenis, ukuran, dan formatnya.

3. Fungsi getimagesize() digunakan untuk
   memastikan file adalah gambar.

4. Fungsi move_uploaded_file() digunakan
   untuk memindahkan file dari folder
   sementara ke folder tujuan.

5. Validasi file diperlukan untuk
   meningkatkan keamanan aplikasi.

6. Semua proses upload dijalankan hanya
   ketika tombol submit ditekan agar
   tidak muncul warning saat halaman
   pertama kali dibuka.
*/
?>

</body>
</html>