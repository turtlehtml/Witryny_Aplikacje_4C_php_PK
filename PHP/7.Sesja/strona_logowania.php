<?php session_start()?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.php';?>
    <form action="" method="POST">
    <label for="login">Login:</label><br>
    <input type="text" name="login" id="login" autofocus required placeholder="login"><br><br>
    <label for="pass">Hasło:</label><br>
    <input type="password" name="pass" id="pass" required placeholder="hasło"><br><br>
    <input type="submit" value="Zaloguj">
    </form>
    <?php if($_SERVER['REQUEST_METHOD']==='POST'){
        if($_POST['login']=="admin" && $_POST['pass']=="admin123"){
            $_SESSION['login']='admin';
            $_SESSION['pass']='admin123';
            $_SESSION['login_status']=true;

        }
        else {
            echo "Nie udało się zalogować. Spróbuj jeszcze raz!!!";
        }
    }
     ?>
     <?php include 'print_r.php';?>
</body>
</html>