<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            font-family: Arial;
            color: cornflowerblue;
            font-size: large;
            text-shadow: 1px 1px blue;
        }
    </style>
</head>

<body>
    <p>
    <?php $suma=0;?>
    <?php for ($i = 10; $i <= 99; $i++) {
        if($i%2==0 ){
            echo $i;
            echo $i==98?'':'|';
            $suma +=$i;
        }
        
        
    }
    ?>
    </p>
    <p>Suma liczb <?= "$suma"?></p>
</body>

</html>