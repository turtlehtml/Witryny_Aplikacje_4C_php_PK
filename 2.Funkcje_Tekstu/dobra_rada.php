<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    define("DOBRA_RADA","Bez chleba, to się nie najesz.");
    ?>
    <h3>Stała ma wartość: <?php echo DOBRA_RADA;?></h3>
    <div>
        Do stałej DOBRA_RADA stosuje funkcje <strong>strlen</strong>: <?php echo strlen (DOBRA_RADA);
        //wypisuje liczbe znaków(liter) ?><br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>str_word_count</strong>: <?php echo str_word_count (DOBRA_RADA);
        //liczy słowa?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>strrev</strong>: <?php echo strrev (DOBRA_RADA);
        //odwraca całe zdanie lub wartość?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>strpos</strong>: <?= strpos (DOBRA_RADA,"to");
        //pokazuje pozycje danego słowa lub wartości(liczymy od zera)?>  <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>str_replace</strong>: <?= str_replace ("chleba","mięsa",DOBRA_RADA);
        //zamienia dane słowo z innym podanym przez nas ?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>strtolower</strong>: <?= strtolower (DOBRA_RADA);?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>strtoupper</strong>: <?= strtoupper (DOBRA_RADA);?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>ucwords</strong>: <?= ucwords (DOBRA_RADA);?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>trim</strong>: <?= trim (DOBRA_RADA);?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>strstr</strong>: <?= strstr (DOBRA_RADA, "nie najesz");?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>substr</strong>: <?= substr (DOBRA_RADA,10,5);?> <br>
        Do stałej DOBRA_RADA stosuje funkcje <strong>str_pad</strong>: <?= str_pad (DOBRA_RADA,41," -_- ",STR_PAD_BOTH);?><br>
    </div>
    
    
</body>
</html>