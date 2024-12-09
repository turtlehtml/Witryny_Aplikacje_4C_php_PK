<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            color: yellowgreen;
            border-top: 10px double greenyellow;
            border-bottom: 10px double greenyellow;
            font-size: 24px;
            padding: 10px 10px;
            text-shadow: 1px 1px 5px forestgreen;

        }
    </style>
</head>

<body>
    <p>
        <?php for ($i = -10; $i <= 10; $i++) {
            echo $i;
            echo $i == 10 ? '.' : ',';
        }
        ?>
    </p>
</body>

</html>