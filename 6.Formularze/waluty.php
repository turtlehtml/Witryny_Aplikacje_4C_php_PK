<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 10px;
            margin: 15px;
        }
    </style>
</head>
<body>
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
        <p>Oto twój wybór: <?= $_POST['kwota'];?> <?=$_POST['waluta'];?></p>
    <?php }
    else { ?>
        <form action="" method="POST">
            <label for="kwota">Podaj kwotę:</label>
            <input type="number" id="kwota" name="kwota">
            <br>
            <br>
            <label for="waluta">Wybierz walute:</label>
            <select name="waluta" id="waluta">
                <option value=""></option>
                <option value="Dolar USA">Dolar USA</option>
                <option value="euro">euro</option>
                <option value="Frank szwajcarski">Frank szwajcarski</option>
                <option value="Funt szterling">Funt szterling</option>
            </select>
            <input type="submit" value="Wybierz">
        </form>
        <?php }?>
        

</body>
</html>