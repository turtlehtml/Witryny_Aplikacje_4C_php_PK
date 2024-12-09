<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-size: 220px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <?php
    $liczba = date('s');
    $kolor = $liczba % 2 == 0 ? 'red' : 'blue'
    ?>
    <p style="color:<?= $kolor?>; border: 20px solid <?= $kolor ?>"><?= date("g:i:s"); ?></p>
</body>

</html>