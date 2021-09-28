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
            <input class="login_inputs" type="text" name="username" required="" placeholder="email"> <br>
            <input class="login_inputs" type="email" name="password" required="" placeholder="password"> <br>
            <input class="login_inputs" id="login_button" type="submit">
        </form>
        <form action="">
            <?php print("email = '" . $_POST['email'] . "'") ?>
            <?php print("password = '" . $_POST['password'] . "'") ?>
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
</html>

<?php

?>