<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $str = 'Fajne są te drzwi';
    echo strtolower($str);
    ?><br>

    <?php
    $zdanie = 'ania miała 3 psy';
    echo strtoupper($zdanie);
    ?><br>

    <?php
    $str = 'witaj świecie';
    echo ucwords($str);
    ?><br>

    <?php
    $str = 'PHP jest ciekawy';
    echo $str.("<br>");
    echo trim($str,"Py")
    ?><br>

    <?php
    echo strstr("Witaj swiecie","swiecie");
    ?><br>

    
</body>
</html>