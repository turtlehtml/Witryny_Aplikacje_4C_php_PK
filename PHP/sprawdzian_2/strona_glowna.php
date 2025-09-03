
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (isset($_COOKIE['dobre_haslo'])) { ?>
        <h2>Twój ulubiony film to <?php $_COOKIE['favourite_movie'];?></h2>
    <?php } ?>
    <?php include 'ustaw_ciastko.php';?>    
</body>
</html>