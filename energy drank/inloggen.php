<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inloggen</title>
    <link rel="stylesheet" href="css/inloggen.css">
</head>
<body>
    <section id="login">
<form action="" method="post"> 
   <p class="text">Username</p>
    <input type="text" name="username" class="username">
    <p class="text">Password</p>
    <input type="password" name="password" class="password">
    <input type="submit" name="submit" value="Inloggen" class="button">
    </section>
</body>
</html>

<?php
$error = "vul je shit goed in lul";
if(isset($_POST['submit'])){
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $user = "Eray";
        $pass = "Eray";
        if ($username == $user && $password == $pass) {
            session_start();
            $_SESSION['ingelogd'] = true;
            header("Location: homepage.php");
        }
    } else {
        $error = "Username & password zijn verplicht";
    }
}
?>