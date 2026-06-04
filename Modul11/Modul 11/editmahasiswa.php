<?php

include 'koneksi.php';

if(isset($_GET['npm'])){

    $npm = $_GET['npm'];

    $query = "SELECT * FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link,$query);

    if(!$result){
        die("Query Error : ".
            mysqli_errno($link).
            " - ".
            mysqli_error($link));
    }

    $data = mysqli_fetch_assoc($result);

    $npm      = $data['npm'];
    $namaMhs  = $data['namaMhs'];
    $prodi    = $data['prodi'];
    $alamat   = $data['alamat'];
    $noHP     = $data['noHP'];

}else{

    header("location:viewmahasiswa.php");
}

?>

<!DOCTYPE html>
<html>
<head>

<style>

h1{
    text-align:center;
}

.container{
    width:500px;
    margin:auto;
}

</style>

</head>
<body>

<h1>Edit Data Mahasiswa</h1>

<div class="container">

<form action="proses_editmahasiswa.php" method="post">

<fieldset>

<legend>Edit Data Mahasiswa</legend>

<p>
NPM :
<input type="text"
       name="npm"
       value="<?php echo $npm; ?>"
       readonly>
</p>

<p>
Nama Mahasiswa :
<input type="text"
       name="namaMhs"
       value="<?php echo $namaMhs; ?>">
</p>

<p>
Prodi :
<input type="text"
       name="prodi"
       value="<?php echo $prodi; ?>">
</p>

<p>
Alamat :
<input type="text"
       name="alamat"
       value="<?php echo $alamat; ?>">
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