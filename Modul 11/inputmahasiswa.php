<!DOCTYPE html>
<html>
<head>
    <title>Input Mahasiswa</title>

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

<h1>Input Data Mahasiswa</h1>

<div class="container">

<form action="proses_inputmahasiswa.php" method="post">

    <fieldset>

        <legend>Input Data Mahasiswa</legend>

        <p>
            NPM :
            <input type="text" name="npm">
        </p>

        <p>
            Nama Mahasiswa :
            <input type="text" name="namaMhs">
        </p>

        <p>
            Prodi :
            <input type="text" name="prodi">
        </p>

        <p>
            Alamat :
            <input type="text" name="alamat">
        </p>

        <p>
            No HP :
            <input type="text" name="noHP">
        </p>

    </fieldset>

    <p>
        <input type="submit" name="input" value="Simpan">
    </p>

</form>

</div>

</body>
</html>