<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>

<style>

table{
    width:900px;
    margin:auto;
}

h1{
    text-align:center;
}

</style>

</head>
<body>

<h1>Data Mata Kuliah</h1>

<center>
    <a href="inputmk.php">Input Data</a>
</center>

<br>

<center>
<form method="GET">

    <input type="text"
           name="keyword"
           placeholder="Cari Nama Mata Kuliah">

    <input type="submit" value="Cari">

</form>
</center>

<br>

<table border="1">

<tr>
    <th>Kode MK</th>
    <th>Nama MK</th>
    <th>SKS</th>
    <th>Jam</th>
    <th>Pilihan</th>
</tr>

<?php

$keyword = $_GET['keyword'] ?? '';

$query = mysqli_query(
    $link,
    "SELECT * FROM t_matakuliah
     WHERE namaMK LIKE '%$keyword%'
     ORDER BY kodeMK ASC"
);

while($data = mysqli_fetch_assoc($query)){

    echo "<tr>";

    echo "<td>".$data['kodeMK']."</td>";
    echo "<td>".$data['namaMK']."</td>";
    echo "<td>".$data['sks']."</td>";
    echo "<td>".$data['jam']."</td>";

    echo "<td>
        <a href='editmk.php?kodeMK=".$data['kodeMK']."'>Edit</a> /
        <a href='hapusmk.php?kodeMK=".$data['kodeMK']."'
        onclick=\"return confirm('Yakin hapus data?')\">
        Hapus</a>
        </td>";

    echo "</tr>";
}

?>

</table>

</body>
</html>