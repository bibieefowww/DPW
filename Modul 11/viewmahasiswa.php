<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>

<style>

table{
    width:1000px;
    margin:auto;
}

h1{
    text-align:center;
}

</style>

</head>
<body>

<h1>Data Mahasiswa</h1>

<center>
<a href="inputmahasiswa.php">Input Data</a>
</center>

<br>

<center>
<form method="GET">
    <input type="text"
           name="keyword"
           placeholder="Cari Nama Mahasiswa">
    <input type="submit" value="Cari">
</form>
</center>

<br>

<table border="1">

<tr>
    <th>NPM</th>
    <th>Nama Mahasiswa</th>
    <th>Prodi</th>
    <th>Alamat</th>
    <th>No HP</th>
    <th>Pilihan</th>
</tr>

<?php

$keyword = $_GET['keyword'] ?? '';

$query = mysqli_query(
    $link,
    "SELECT * FROM t_mahasiswa
     WHERE namaMhs LIKE '%$keyword%'
     ORDER BY npm ASC"
);

while($data = mysqli_fetch_assoc($query)){

    echo "<tr>";

    echo "<td>".$data['npm']."</td>";
    echo "<td>".$data['namaMhs']."</td>";
    echo "<td>".$data['prodi']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['noHP']."</td>";

    echo "<td>
        <a href='editmahasiswa.php?npm=".$data['npm']."'>Edit</a> /
        <a href='hapusmahasiswa.php?npm=".$data['npm']."'
        onclick=\"return confirm('Yakin hapus data?')\">
        Hapus</a>
        </td>";

    echo "</tr>";
}

?>

</table>

</body>
</html>