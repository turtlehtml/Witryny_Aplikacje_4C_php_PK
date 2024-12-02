<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid gray;
            background-color: lightgray;
            padding: 10px;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <?php
            $i = 1;
            while ($i <= 5) { ?>
                <tr>To jest wiersz numer <?= $i?></tr>
           <?php $i++; } ?>
            
        </tr>
    </table>
</body>

</html>