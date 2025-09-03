<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            table-layout: fixed;
            border-collapse: collapse;
        }
        td{
            border: 1px solid dodgerblue;
            padding: 10px 10px;
            color: blue;
            text-align: center;
            background-color: aliceblue;
            
        }
    </style>
</head>
<body>
    <?php
    $liczby=range(0,10);
    shuffle($liczby);
    ?>
    <table>
        <tr>
            <?php
            foreach($liczby as $mieszane){
                echo "<td>$mieszane</td>";
            }
            ?>
        </tr>
    </table>
</body>
</html>