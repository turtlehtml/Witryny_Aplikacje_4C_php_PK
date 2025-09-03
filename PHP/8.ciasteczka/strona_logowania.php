<?php session_start() ?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include 'menu.php'; ?>
    <h1>Strona logowania</h1>
    <form action="" method="post">
    <?php
    if(!empty($_SESSION['login_status']) && $_SESSION['login_status'] == true) { ?>
        <p>Jesteś zalogowany jako: <?php echo $_SESSION['login'];?></p>
        <input type="submit" value="Wyloguj">
        <?php if ($_SERVER['REQUEST_METHOD']==='POST') {
            session_unset();
            session_destroy();
            echo "Wylogowałeś sie";
        }
        ?>
        <?php } else { ?>
                <label for="login">Login:</label><br>
    <input type="text" name="login" id="login" autofocus required placeholder="login"><br><br>
    <label for="pass">Hasło:</label><br>
    <input type="password" name="pass" id="pass" required placeholder="hasło"><br><br>
    <input type="submit" value="Zaloguj">
    <?php if ($_SERVER['REQUEST_METHOD']==='POST' && $_POST['login']=='admin' && $_POST['pass'] == 'admin123' ) {
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['pass'] = $_POST['pass'];
        $_SESSION['login_status'] = true;
    }
    else {
        //echo 'Nie udało sie';
    }
    ?>
    <?php } ?>
    <?php include 'stopka.php';?>
</body>

</html>