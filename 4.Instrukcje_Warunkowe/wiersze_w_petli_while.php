<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid black;
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
                <tr><td>To jest wiersz numer</td></tr>
           <?php $i++; } ?>
            
        </tr>
    </table>
</body>

</html>