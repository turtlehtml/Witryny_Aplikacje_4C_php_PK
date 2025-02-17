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
    <br>
    <br>
    <br>
    <form action="" method="POST">
        <input type="submit" value="Wyloguj mnie prosze - mam dość" <?php session_destroy()?>>
    </form>
    <?php include 'print_r.php';?>

</body>
</html>