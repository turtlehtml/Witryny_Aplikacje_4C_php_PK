<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $x = 5;
    $y = 15;
    $a = 4;
    $b = 35;
    $r = 16;
    $alfa = 93;
    ?>
    <fieldset>
        <legend>AD 2.</legend>
        <p>Wynik dodawania 5 i 15 wynosi <?= $x+$y;?></p>
        <p>Wynik odejmowania 5 i 15 wynosi <?= $x-$y;?></p>
        <p>Wynik mnożenia 5 i 15 wynosi <?= $x*$y;?></p>
        <p>Wynik dzielenia 5 przez 15 <?= $x/$y;?></p>
        <p>Reszta z dzielenia 5 przez 15 wynosi <?= $x%$y;?></p>
    </fieldset>
    <fieldset>
        <legend>AD 2.</legend>
        <p>Obwód prostokąta o bokach 4 i 35 jest równy <?= $a+$a+$b+$b;?></p>
        <p>Pole prostokąta o bokach 4 i 35 jest równy <?= $a*$b;?> j<sup>2</sup></p>
    </fieldset>
    <fieldset>
        <legend>AD 3.</legend>
        <p>Obwód koła o promieniu 9 jest równy <?= round( 2*pi()*$r,4);?></p>
        <p>Pole koła o promieniu 16 jest równe <?= round(pi()*$r**2,4);?> j<sup>2</sup></p>
        <p>Pole wycinka koła o promieniu 16 i kącie środkowym 93&#176; jest równe <?= round(($alfa/360)*pi()*$r**2,4);?> j<sup>2</sup></p>
    </fieldset>

</body>
</html>