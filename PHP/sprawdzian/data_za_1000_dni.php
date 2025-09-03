<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .akapit1{
        border: dashed 2px lightpink;
        color: lightpink;
        padding: 20px;
        }
        .akapit2{
        border: dashed 2px lightcoral;
        color: lightcoral;
        padding: 20px;
        }
    </style>
</head>
<body>
    <p class="akapit1">Dzisiejsza data: <strong><?php echo date("d.n.Y");?></strong></p>
    <p class="akapit2">Data za 1000 dni: <strong><?php echo date("d.n.Y",strtotime("+1000days"));?></strong></p>
</body>
</html>