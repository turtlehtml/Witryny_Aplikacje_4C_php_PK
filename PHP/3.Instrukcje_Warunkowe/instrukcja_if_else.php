<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2 {
            text-align: center;
            color: darkorchid;
        }

        h4 {
            text-align: center;
            color: magenta;
        }

        #parzysta {
            text-align: center;
            color: navy;
        }

        #dycha {
            text-align: center;
            color: deeppink;
        }
    </style>
</head>

<body>
    <?php
    $losowa = rand(10, 30);
    ?>
    <h2><?= "$losowa" ?></h2>
    <h4><?php if ($losowa > 20) echo "Wylosowana liczba jest większa lub równa 20"; ?></h4>
    <h4 id="parzysta">
        <?php if ($losowa % 2 == 0) {
            echo "Wylosowana liczba jest parzysta";
        } else {
            echo "Wylosowana liczba jest nieparzysta";
        } ?>
    </h4>
    <h4 id="dycha"><?php if ($losowa < 11) {
                        echo "Pierwsza dziesiątka";
                    } elseif ($losowa < 21) {
                        echo "Druga dziesiątka";
                    } else {
                        echo "Trzecia dziesiątka";
                    }; ?>
    </h4>
</body>

</html>