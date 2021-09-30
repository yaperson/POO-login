<?php
session_start();

include "../conf.php";
include "../Classes/UserManager.php";

if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $UserManager = new UserManager($db);
    $users = $UserManager->connectUser($email ,$password);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/style.css">
    <link rel="stylesheet" href="/assets/style/login.css">
    <title>Document</title>
</head>
<body>
    <header>
        <nav class="topnav" id="myTopnav">
            <a class="topnav__link" href="index.html">Home</a>
            <a class="topnav__link" href="#news">News</a>
            <a class="topnav__link" href="#contact">Contact</a>
            <a class="topnav__link" id="right" href="#">| Login</a>
        </nav>
    </header>
    <main>
        <form method="POST" class="login_form">
            <h1 class="login_title"> Connectez vous </h1>
            <input class="login_inputs" type="email" name="username" required="" placeholder="email"> <br>
            <input class="login_inputs" type="password" name="password" required="" placeholder="password"> <br>
            <input class="login_inputs" id="btn5" type="submit">
        </form>
    </main>
    <footer>
        <nav id="footer-navbar">
            <a class="nav-fo" href="#"> | Home </a>
            <a class="nav-fo" href="#projet"> | News </a>
            <a class="nav-fo" href="#liens"> | Contact </a>
            <a class="nav-fo" href="https://yanislegrand.000webhostapp.com/index.html">| Mon portfolio </a>
        </nav>
    </footer>
</body>
<script src="assets/script/btn5.js" type="text/javascript"></script>
</html>

<?php

?>