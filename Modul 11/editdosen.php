<?php

// memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

// mengecek apakah di url ada nilai GET idDosen
if (isset($_GET['idDosen'])) {

    // ambil nilai idDosen dari url dan simpan dalam variabel $id
    $id = $_GET['idDosen'];

    // menampilkan data dosen dari database yang mempunyai idDosen=$id
    $query = "SELECT * FROM t_dosen WHERE idDosen='$id'";
    $result = mysqli_query($link, $query);

    // mengecek apakah query gagal
    if (!$result) {
        die("Query Error : " .
            mysqli_errno($link) .
            " - " .
            mysqli_error($link));
    }

    // mengambil data dari database dan membuat variabel-variabel
    // yang akan ditampilkan pada form
    $data = mysqli_fetch_assoc($result);

    $idDosen = $data['idDosen'];
    $namaDosen = $data['namaDosen'];
    $noHP = $data['noHP'];

} else {

    // apabila tidak ada data GET idDosen maka redirect
    header("location:viewdosen.php");
}

?>

<!DOCTYPE html>
<html>
<head>

    <style>

        h1{
            text-align: center;
        }

        .container{
            width: 400px;
            margin: auto;
        }

    </style>

</head>

<body>

<h1>Edit Data</h1>

<div class="container">

<form action="proses_editdosen.php" method="post">

    <fieldset>

        <legend>Edit Data Dosen</legend>

        <p>
            ID :
            <input type="text"
                   name="idDosen"
                   value="<?php echo $idDosen; ?>"
                   readonly>
        </p>

        <p>
            Nama Dosen :
            <input type="text"
                   name="namaDosen"
                   value="<?php echo $namaDosen; ?>">
        </p>

        <p>
            No HP :
            <input type="text"
                   name="noHP"
                   value="<?php echo $noHP; ?>">
        </p>

    </fieldset>

    <p>
        <input type="submit"
               name="update"
               value="Update Data">
    </p>

</form>

</div>

</body>
</html>

<?php

?>