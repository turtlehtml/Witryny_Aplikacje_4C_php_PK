<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <h1>Zdjęcia</h1>
    </header>
    <div class="flexbox">
        <aside class="lewy">
            <h2>Tematy zdjęć</h2>
            <ol>
                <li>Zwierzęta</li>
                <li>Krajobrazy</li>
                <li>Miasta</li>
                <li>Przyroda</li>
                <li>Samochody</li>
            </ol>
        </aside>
        <main>
            <?php
            $connect = mysqli_connect("localhost","root","","galeria");
            $result = mysqli_query($connect,"SELECT zdjecia.tytul,zdjecia.plik,zdjecia.polubienia,autorzy.imie,autorzy.nazwisko FROM zdjecia JOIN autorzy ON zdjecia.autorzy_id=autorzy.id ORDER BY autorzy.nazwisko ASC;");
            while( $row=mysqli_fetch_assoc($result) ) { ?>
            <section>
                <img src="<?= $row['plik'];?>" alt="zdjecie">
                <h3><?= $row['tytul'];?></h3>
                <?php if ($row['polubienia'] > 40) { ?>
                    <p>Autor:<?=$row['imie'];?> <?=$row['nazwisko'];?>.<br>Wiele osób polubiło ten obraz</p>
                <?php } else { ?>
                    <p>Autor: <?= $row['imie'];?> <?= $row['nazwisko'];?></p>
                <?php } ?>
                <a href="<?= $row['plik'];?>" download>Pobierz</a>
            </section>
            <?php } ?>
        </main>
        <aside class="prawy">
            <h2>Najbardziej lubiane</h2>
            <?php
            $zapytanie = mysqli_query($connect,"SELECT zdjecia.tytul,zdjecia.plik FROM zdjecia WHERE zdjecia.polubienia >= 100;");
            while($wiersz=mysqli_fetch_assoc($zapytanie)) { ?>
            <img src="<?= $wiersz['plik'];?>" alt="<?= $wiersz['tytul'];?>">
            <?php } ?>
            <b>Zobacz wszystkie nasze zdjęcia</b>
        </aside>
    </div>
    <footer>
        <h5>Stronę wykonał: 1234567890</h5>
    </footer>
</body>
</html>
<?php mysqli_close($connect);?>