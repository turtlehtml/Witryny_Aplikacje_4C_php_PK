<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numbers=array(rand(0,99),rand(0,99),rand(0,99),rand(0,99),rand(0,99));
    rsort($numbers)
    ?>
    <ol type="I">
        <?php foreach($numbers as $x){
            echo "<li>$x</li>";
        }
        ?>
    </ol>
</body>
</html>