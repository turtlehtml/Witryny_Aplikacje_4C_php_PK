<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            border: 1px solid cornflowerblue;
            padding: 10px;
            
        }
        p{
            background-color: green;
            border-radius: 2px;
            color: white;
            font-size: larger;
        }
        div{
            background-color: greenyellow;
            border: 1px solid greenyellow;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
    $folder = "zdjecia";
    ?>
   <p>Pliki w katalogu<?php $a = scandir($folder);?></p>
    <?php foreach ($a as $key => $value) { ?>
        <div><?=$value;?> <?= filesize("$folder");?><br></div>
    <?php } ?>
    
</body>
</html>