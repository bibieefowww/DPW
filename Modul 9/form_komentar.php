<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
</head>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Nama:
    <input type="text" name="nama">
    <br><br>

    E-mail:
    <input type="text" name="email">
    <br><br>

    Komentar:
    <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>

    <input type="submit" value="simpan">
    <input type="reset" value="bersihkan">

</form>

<?php

// ======================================
// FUNGSI FILTER INPUT
// ======================================

function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// ======================================
// PROSES DATA FORM
// ======================================

$nama = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = bersihkan_input($_POST["nama"]);
    $email = bersihkan_input($_POST["email"]);
    $comment = bersihkan_input($_POST["comment"]);

    echo "<hr>";
    echo "Nama : " . $nama . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Komentar : " . $comment . "<br>";
}

?>

</body>
</html>