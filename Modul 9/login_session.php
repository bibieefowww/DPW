<?php
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "12345") {

        $_SESSION["username"] = $username;

        header("Location: dashboard.php");
        exit();

    } else {

        $error = "Username atau Password salah!";
    }
}
?>

<form method="post">
    Username :
    <input type="text" name="username"><br><br>

    Password :
    <input type="password" name="password"><br><br>

    <input type="submit" value="Login">
</form>

<p style="color:red"><?php echo $error; ?></p>