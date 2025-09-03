<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $ciag ='Ala ma kota';
    $calkowita =5;
    $rzeczywista =3.14;
    $bool = true;
    define("pierwsza", "1994");
    define("druga", "Miramax");
    ?>
    <?= "echo dla ciągu znaków: $ciag"; ?><br>
    <?= "ecgo dla liczby całkowitej: $calkowita"; ?><br>
    <?= "echo dla liczby rzeczywistej: $rzeczywista"; ?><br>
    <?= "echo dla wartości bool'owskiej: $bool"; ?><br><br>
    <hr>
    <p>var_dump dla ciągu znaków: <?php var_dump($ciag);?></p>
    <p>var_dump dla liczby całkowitej: <?php var_dump($calkowita);?></p>
    <p>var_dump dla liczby rzeczywistej: <?php var_dump($rzeczywista);?></p>
    <p>var_dump dla wartości bool'owskiej: <?php var_dump($bool);?></p>
    <hr>
    <p>print dla pierwszej stałej: <?php print pierwsza;?></p>
    <p>print dla drugiej stałej: <?php print druga;?></p>
    <p>var_export dla pierwszej stałej: <?php var_export(pierwsza);?></p>
    <p>var_export dla drugiej stałej: <?php var_export(druga);?></p>
</body>

</html>