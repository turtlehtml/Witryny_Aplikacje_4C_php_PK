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
    <h1>Tylko dla zalogowanych</h3>
    <?php if ($_SESSION['login_status']===true) {
        include 'print_r.php';
    }
    ?>
</body>
</html>