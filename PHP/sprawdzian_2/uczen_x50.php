<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td{
            border: 1px solid lightgrey;
            padding: 7px;
        }
        table{
            border-collapse: collapse;
        }
        .guzik{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <caption>Oceny</caption>
                <?php foreach (range(1,50) as $key) { ?>
                    <tr>
                        <td><label for="uczen_<?= $key?>">Uczeń <?= $key?>:</label></td>
                        <td>
                           <input type="text" name="uczen_<?= $key?>" id="uczen_<?= $key?>">
                        </td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="3" class="guzik"><input type="submit" value="Zapisz"></td>

                </tr>
                
        </table>
    </form>
</body>
</html>