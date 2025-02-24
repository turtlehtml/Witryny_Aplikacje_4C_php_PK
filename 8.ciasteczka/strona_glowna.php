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
    <pre>
    <?php
        print_r($_COOKIE);
    ?>
    </pre>
    <?php include 'stopka.php';?>
</body>
</html>