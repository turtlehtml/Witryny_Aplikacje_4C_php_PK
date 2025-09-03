<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $parzyste = range(0, 12, 2);
    $dziesiatki = range(-10, 100, 10);
    $polowki = range(-5.5, 5.5, 0.5);
    $litery_od_wm = range('m', 'u');
    $litery_wstecz = range('X', 'E');
    ?>
    <pre><?php print_r($parzyste); ?></pre>
    <p><?php
        foreach ($parzyste as $liczby) {
            echo "$liczby ";
        }
        ?>
    </p>
    <p><?php
        foreach ($dziesiatki as $value) {
            echo "$value ";
        }
        ?>
    </p>
    <p><?php
        foreach ($polowki as $x) {
            echo "$x ";
        }
        ?>
    </p>
    <p><?php
        foreach ($litery_od_wm as $m) {
            echo "$m ";
        }
        ?>
    </p>
    <p><?php
        foreach ($litery_wstecz as $litery) {
            echo "$litery ";
        }
        ?>
    </p>
</body>

</html>