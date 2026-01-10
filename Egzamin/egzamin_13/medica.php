<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przychodnia Medica</title>
    <link rel="shortcut icon" href="pliki3/obraz2.png" type="image/x-icon">
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <?php
    $connect = mysqli_connect("localhost","root","","medica");
    ?>
    <header>
        <h1>Abonamenty w przychodni Medica</h1>
    </header>
    <article>
        <?php
        $kwerenda1 = "SELECT abonamenty.nazwa,abonamenty.cena,abonamenty.opis FROM abonamenty;";
        $zapytanie1 = mysqli_query($connect,$kwerenda1);
        while( $wiersz1=mysqli_fetch_assoc($zapytanie1) ) { ?>
            <h3>Pakiet <?= $wiersz1['nazwa'];?> - cena <?= $wiersz1['cena'];?> zł</h3>
            <p><?= $wiersz1['opis'];?></p>
        <?php } ?>
        <a href="opis.html">Dowiedz się więcej</a>
    </article>
    <main>
        <section>
            <h2>Standardowy</h2>
            <ul>
                <?php
                $kwerenda2 = "SELECT abonamenty.nazwa,cechy.cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy ON szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id=1;";
                $zapytanie2 = mysqli_query($connect,$kwerenda2);
                while( $wiersz2=mysqli_fetch_assoc($zapytanie2) ) { ?>
                    <li><?= $wiersz2['cecha'];?></li>
                <?php } ?>
            </ul>
        </section>
        <section>
            <h2>Premium</h2>
            <ul>
                <?php
                $kwerenda3 = "SELECT abonamenty.nazwa,cechy.cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy ON szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id=2;";
                $zapytanie3 = mysqli_query($connect,$kwerenda3);
                while( $wiersz3=mysqli_fetch_assoc($zapytanie3) ) { ?>
                    <li><?= $wiersz3['cecha'];?></li>
                <?php } ?>
            </ul>
        </section>
        <section>
            <h2>Dziecko</h2>
            <ul>
                <?php
                $kwerenda4 = "SELECT abonamenty.nazwa,cechy.cecha FROM abonamenty JOIN szczegolyabonamentu ON abonamenty.id=szczegolyabonamentu.Abonamenty_id JOIN cechy ON szczegolyabonamentu.Cechy_id=cechy.id WHERE abonamenty.id=3;";
                $zapytanie4 = mysqli_query($connect,$kwerenda4);
                while( $wiersz4=mysqli_fetch_assoc($zapytanie4) ) { ?>
                    <li><?= $wiersz4['cecha'];?></li>
                <?php } ?>
            </ul>
        </section>
    </main>
    <footer>
        <p><img src="pliki3/obraz2.png" alt="przychodnia">Stronę przygotował: 1234567890</p>
    </footer>
</body>
<?php mysqli_close($connect);?>
</html>