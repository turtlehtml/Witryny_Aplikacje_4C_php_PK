<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            border: 3px solid pink;
        }
        label{
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <fieldset>
            <legend>Miesiące</legend>
            <?php
            $miesiace = array("Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", 'Listopad', "Grudzień");
            foreach ($miesiace as $x) {
                if (!empty($_POST) && in_array($x, $_POST)) {
                    $check = 'checked';
                } else {
                    $check = '';
                }
            ?>
                <input <?= $check ?> type="checkbox" name="miesiac_<?= $x ?>" id="miesiac_<?= $x ?>" value="<?= $x ?>">
                <label for="miesiac_<?= $x ?>" style="padding-right: 15px"><?= $x ?></label>
            <?php } ?>

            <br> <input type="submit" value="Wybierz">
            <?php
            if (count($_POST) == 1) {
            ?> <p>Ten miesiąc został wybrany: <?= implode('', $_POST) ?></p> <?php
                } elseif (!empty($_POST)) {
                    ?> <p>Te miesiące zostały wybrane: <?= implode(', ', $_POST) ?></p> <?php
                } else {
                ?> <p>Żaden miesiąc nie został wybrany</p> <?php
                }
                ?>
        </fieldset>
    </form>
</body>

</html>