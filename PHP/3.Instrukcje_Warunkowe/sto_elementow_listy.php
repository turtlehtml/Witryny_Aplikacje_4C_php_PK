<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ol {
            margin-left: 40px;
        }
    </style>
</head>

<body>
    <ol type="I">
        <?php for ($i = 1; $i <= 100; $i++) {
            echo "<li>To jest $i. element listy <br></li>";
        }
        ?>
    </ol>
</body>

</html>