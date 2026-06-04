<!DOCTYPE html>
<html>
<head>
    <title>Input Mata Kuliah</title>

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

<h1>Input Data Mata Kuliah</h1>

<div class="container">

<form action="proses_inputmk.php" method="post">

    <fieldset>

        <legend>Input Mata Kuliah</legend>

        <p>
            Kode MK :
            <input type="text" name="kodeMK">
        </p>

        <p>
            Nama MK :
            <input type="text" name="namaMK">
        </p>

        <p>
            SKS :
            <input type="number" name="sks">
        </p>

        <p>
            Jam :
            <input type="number" name="jam">
        </p>

    </fieldset>

    <p>
        <input type="submit" name="input" value="Simpan">
    </p>

</form>

</div>

</body>
</html>