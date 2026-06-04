<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <style>
        .error {
            color: red;
            font-size: 12px;
        }
    </style>
</head>
<body>

<?php

$u = $p = "";
$unameErr = $emailErr = "";

// Fungsi untuk membersihkan input
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// Pemeriksaan input
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["u"])) {
        $unameErr = "masukkan username";
    } else {
        $u = bersihkan_input($_POST["u"]);
    }

    if (empty($_POST["p"])) {
        $emailErr = "masukkan password";
    } else {
        $p = bersihkan_input($_POST["p"]);
    }
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Username:
    <input type="text" name="u">
    <span class="error">* <?php echo $unameErr; ?></span>

    <br><br>

    Password:
    <input type="password" name="p">
    <span class="error">* <?php echo $emailErr; ?></span>

    <br><br>

    <input type="submit" value="Login">

</form>

<?php

// Menampilkan hasil jika kedua input terisi
if (!empty($u) && !empty($p)) {
    echo "<hr>";
    echo "Username : " . $u . "<br>";
    echo "Password : " . $p . "<br>";
}

/*
==================================================
KESIMPULAN
==================================================

1. Form login digunakan untuk menerima username
   dan password dari pengguna.

2. Fungsi bersihkan_input() digunakan untuk
   membersihkan data sebelum diproses.

3. trim() menghapus spasi di awal dan akhir.

4. stripslashes() menghapus karakter backslash.

5. htmlspecialchars() mengubah karakter HTML
   menjadi teks biasa sehingga lebih aman.

6. Validasi menggunakan empty() memastikan
   username dan password tidak kosong.

7. Pesan error ditampilkan dengan warna merah
   agar mudah dikenali pengguna.

*/
?>

</body>
</html>