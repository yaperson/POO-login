<?php
// include "../header.php";
include "../conf.php";
include "../Classes/UserManager.php";


try {
    $db = new PDO($dsn, $usr, $pwd);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $UserManager = new UserManager($db);
    $users = $UserManager->getList();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/style/style.css">
    <link rel="stylesheet" href="/assets/style/table.css">
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
            <h1> Liste des utilisateurs </h1>
            <table>
                <tr>
                    <th>id</th>
                    <th>email</th>
                </tr>
                <tr>
                <?php
                foreach ($users as $user){
                    print('<th>' . $user->get_id() .'</th> <th>' . $user->get_email() .'</th>');
                } ?>
                </tr>
            </table>
            <a href="add.php">Add users</a>
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

<?php
} 
catch (PDOException $e){
    print($e->getMessage());
}

?>
</html>
