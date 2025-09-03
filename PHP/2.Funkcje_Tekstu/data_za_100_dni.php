<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kolor1{
             color: chocolate;
             border: 1px solid chocolate;
        }
        .kolor2{
             color: darkgoldenrod;
        }
    </style>
</head>
<body>
    <fieldset class="kolor1">
        <legend>Dzisiejsza data</legend>
        <?php echo date("d-m-Y");?>
    </fieldset>
    <fieldset class="kolor2">
        <legend>Data za 100 dni</legend>
        <?php echo date("d-m-Y",strtotime("+100days"));?>
    </fieldset>
</body>
</html>