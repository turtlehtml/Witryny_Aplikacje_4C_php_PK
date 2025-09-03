<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: aliceblue;
            background-color: darkblue;
            font-weight: bold;

        }
    </style>
</head>
<body>
    <p>Funckja abs dla liczby -2 zwraca wynik: <?php echo abs(-2);?></p>
    <p>Funkcja min dla zestawu liczb 0,150,30,20,-8,-200 zwraca wynik: <?= min(0,150,30,20,-8,-200);?></p>
    <p>Funkcja max dla zestawu liczb 0,150,30,20,-8,-200 zwraca wynik: <?= max(0,150,30,20,-8,-200);?></p>
    <p>Funkcja pi zwraca wynik: <?= pi();?></p>
    <p>Funkcja round dla liczby 3,4 zwraca wynik: <?= round(3,4);?></p>
    <p>Funkcja round dla liczby 3,6 zwraca wynik: <?= round(3,6);?></p>
    <p>Funkcja round dla liczby 5,045 zwraca wynik: <?= round(5.045,2);?></p>
    <p>Funckja round dla liczby 5,055 zwraca wynik: <?= round(5.055,2);?> </p>
    <p>Funkcja rand dla liczb z przedziału od 900 do 1000 zwraca wynik: <?= rand(900,1000);?></p>
    <p>Funkcja sqrt dla liczby 0 zwraca wynik: <?= sqrt(0);?></p>
    <p>Funkcja sqrt dla liczby 25 zwraca wynik: <?= sqrt(25);?></p>
    <p>Funkcja sqrt dla liczby 64 zwraca wynik: <?= sqrt(64);?></p>
    <p>Funkcja sqrt dla liczby 65536 zwraca wynik: <?= sqrt(65536);?></p>

</body>
</html>