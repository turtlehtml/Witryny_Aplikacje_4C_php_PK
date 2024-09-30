<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kolor1{
             color: tomato;
        }
        .kolor2{
            color: navy;
        }
    </style>
</head>
<body>
    <h3 class="kolor1">Aktualna godzina</h3>
    <p class="kolor1"><?php echo date("H.i.s");?></p>
    <h3 class="kolor2">Osiem godzin później</h3>
    <p class="kolor2"><?php echo date("H.i.s", time()+ 60*60*8);?> </p>
</body>
</html>