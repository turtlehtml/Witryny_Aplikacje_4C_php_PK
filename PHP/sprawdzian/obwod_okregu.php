<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
    font-family: Arial;
    border: double 4px lightsalmon;
    text-align: center;
    }
    </style>
</head>
<body>
    <?php 
    $r = 6;
    ?>
    <p>Obwód okręgu o promieniu <?= "$r";?> jest równy <?= round(2*pi()*$r,2);?></p>
</body>
</html>