<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ustaw ciasteczko</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'menu.php';?>
    <h1>Ustaw ciasteczko</h1>
    <h3>Jakie powinno być dobre hasło?</h3>
    <?php
    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $login = "admin";
        $value = "";

    }
    setcookie($login,$value,time())
    ;?>
    <?php include 'footer.php';?>
</body>
</html>