<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            padding: 10px;
        }
        fieldset{
            border: 2px solid limegreen;
        }
        legend{
            border-left: 2px solid limegreen;
            border-right: 2px solid limegreen;
            padding: 7px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Najlepszy rok w muzyce</legend>
        <form action="" method="POST">
        <label for="rok">Wybierz najlepszy rok w muzyce:</label>
        <select name="rok" id="rok" required>
            <option value=""></option>
            <?php
            foreach (range(1500,2020) as $rok) { ?>
                <option value="<?= $rok;?>"><?=$rok;?></option>;
            <?php } ?>
        </select>
        <br>
        <br>
        <input type="submit" value="Wybierz najlepszy rok w muzyce">
        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') { ?>
            <p>Według ciebie najlepszy rok w muzyce był rok: <?php echo $_POST['rok'];?></p>
        <?php }?>
        </form>
        
    </fieldset>
</body>
</html>