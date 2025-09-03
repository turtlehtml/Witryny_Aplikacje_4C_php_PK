<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $str = 'abcdef';
    echo strlen($str);
    ?><br>
    <?php /*element strlen pokazuje liczbe znaków*/ ?>
    
    <?php
    $str = "Lubie drzwi";
    echo str_word_count($str);
    /*Liczy słowa*/
    ?><br>

    <?php
    echo strrev("Witaj swiecie");
    /*odwraca dany tekst*/
    ?><br>

    <?php
    $mystring = 'abcdefgh';
    $findme   = 'c';
    $pos = strpos($mystring, $findme);
    if ($pos !== false) {
     echo "Zmienna '$findme' została znaleziona w ciągu znaków '$mystring'";
         echo " i istnieje w $pos";
    } else {
     echo "Zmienna'$findme' nie została znaleziona w '$mystring'";
    }
    /*wyszukuje dany element w innym zbiorze tzw. szuaknie igły w stogu siana =D*/
    ?>



</body>
</html>