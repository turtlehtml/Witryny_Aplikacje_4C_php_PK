<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $title = "<br> Pierwszy strona z PHP-em"; ?>
    <h1><?= $title ;?></h1>
    <ol>
        <li><?php $link_1 = "https://www.wp.pl/"; ?>
            <a href="$link_1">WP</a>
        </li>
        <li>
            <?php $link_2 = "https://www.zsi.kielce.pl/"; ?>
            <a href="$link_2">zsi</a>
        </li>
        <li>
            <?php $link_3 = "https://www.php.net/"; ?>
            <a href="$link_3">php.net</a>
        </li>
    </ol>

</body>

</html>