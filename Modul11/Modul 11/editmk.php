<?php

include 'koneksi.php';

if(isset($_GET['kodeMK'])){

    $kodeMK = $_GET['kodeMK'];

    $query = "SELECT * FROM t_matakuliah WHERE kodeMK='$kodeMK'";
    $result = mysqli_query($link,$query);

    $data = mysqli_fetch_assoc($result);

    $kodeMK = $data['kodeMK'];
    $namaMK = $data['namaMK'];
    $sks = $data['sks'];
    $jam = $data['jam'];

}else{

    header("location:viewmk.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<style>
.container{
    width:500px;
    margin:auto;
}
h1{
    text-align:center;
}
</style>
</head>
<body>

<h1>Edit Mata Kuliah</h1>

<div class="container">

<form action="proses_editmk.php" method="post">

<p>
Kode MK :
<input type="text"
       name="kodeMK"
       value="<?php echo $kodeMK; ?>"
       readonly>
</p>

<p>
Nama MK :
<input type="text"
       name="namaMK"
       value="<?php echo $namaMK; ?>">
</p>

<p>
SKS :
<input type="number"
       name="sks"
       value="<?php echo $sks; ?>">
</p>

<p>
Jam :
<input type="number"
       name="jam"
       value="<?php echo $jam; ?>">
</p>

<p>
<input type="submit"
       name="update"
       value="Update Data">
</p>

</form>

</div>

</body>
</html>