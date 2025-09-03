<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
        }

        th,td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $haslo1 = 'mbank.pl';
    $haslo2 = 'rnbank.pl';
    ?>
    <table>
        <tr>
            <th><?= "$haslo1"; ?></th>
            <th><?= "$haslo2"; ?></th>
        </tr>
        <tr>
            <td colspan=2><?php if ($haslo1 == $haslo2) {
                                echo "Hasła są takie same";
                            } else {
                                echo "Hasła są różne";
                            } ?></td>
        </tr>
    </table>
</body>

</html>