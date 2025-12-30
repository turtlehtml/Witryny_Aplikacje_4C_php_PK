<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka miejska</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <header>
        <?php
    
        for ($i=0; $i <=20 ; $i++) {?>
            <img src="pliki4/obraz.png" alt="obraz">
        <?php }
        ?>
    </header>
    <div class="flexbox">
        <section>
            <h2>Liryka</h2>
            <form action="biblioteka.php" method="post">
                <select name="liryka" id="">
                    <?php
                    $connect = mysqli_connect("localhost","root","","biblioteka");
                    $zapytanie1=mysqli_query($connect,"SELECT ksiazka.id,ksiazka.tytul FROM ksiazka WHERE ksiazka.gatunek='liryka';");
                    while( $wiersz1=mysqli_fetch_assoc($zapytanie1) ){ ?>
                        <option value="<?= $wiersz1['id'];?>"><?= $wiersz1['tytul'];?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Rezerwuj" name="przycisk1">
            </form>
            <?php
            if (isset($_POST['przycisk1'])) {
                $id = $_POST['liryka'];
                $sql = "SELECT ksiazka.tytul FROM ksiazka WHERE ksiazka.id=$id;";
                $zapytanie5 = mysqli_query($connect,$sql);
                while ($wiersz5=mysqli_fetch_assoc($zapytanie5)) { ?>
                    <p>Książka <?=$wiersz5['tytul'];?> została zarezerwoana</p>
            <?php    }
                $sql2 = "UPDATE ksiazka SET ksiazka.rezerwacja=1 WHERE ksiazka.id=$id";
                $zapytanie6 = mysqli_query($connect,$sql2);
            }?>
        </section>
        <section>
            <h2>Epika</h2>
                        <form action="biblioteka.php" method="post">
                <select name="epika" id="">
                    <?php
                    $connect = mysqli_connect("localhost","root","","biblioteka");
                    $zapytanie2=mysqli_query($connect,"SELECT ksiazka.id,ksiazka.tytul FROM ksiazka WHERE ksiazka.gatunek='epika';");
                    while( $wiersz2=mysqli_fetch_assoc($zapytanie2) ){ ?>
                        <option value="<?= $wiersz2['id'];?>"><?= $wiersz2['tytul'];?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Rezerwuj" name="przycisk2">
                    </form>
                <?php
            if (isset($_POST['przycisk2'])) {
                $id1 = $_POST['epika'];
                $sql3 = "SELECT ksiazka.tytul FROM ksiazka WHERE ksiazka.id=$id1;";
                $zapytanie7 = mysqli_query($connect,$sql3);
                while ($wiersz7=mysqli_fetch_assoc($zapytanie7)) { ?>
                    <p>Książka <?=$wiersz7['tytul'];?> została zarezerwoana</p>
            <?php    }
                $sql4 = "UPDATE ksiazka SET ksiazka.rezerwacja=1 WHERE ksiazka.id=$id1";
                $zapytanie8 = mysqli_query($connect,$sql4);
            }?>
        </section>
        <section>
            <h2>Dramat</h2>
                        <form action="biblioteka.php" method="post">
                <select name="dramat" id="">
                    <?php
                    $connect = mysqli_connect("localhost","root","","biblioteka");
                    $zapytanie3=mysqli_query($connect,"SELECT ksiazka.id,ksiazka.tytul FROM ksiazka WHERE ksiazka.gatunek='dramat';");
                    while( $wiersz3=mysqli_fetch_assoc($zapytanie3) ){ ?>
                        <option value="<?= $wiersz3['id'];?>"><?= $wiersz3['tytul'];?></option>
                    <?php } ?>
                </select>
                <input type="submit" value="Rezerwuj" name="przycisk3">
                    </form>
                    <?php
            if (isset($_POST['przycisk3'])) {
                $id2 = $_POST['dramat'];
                $sql5 = "SELECT ksiazka.tytul FROM ksiazka WHERE ksiazka.id=$id2;";
                $zapytanie9 = mysqli_query($connect,$sql5);
                while ($wiersz9=mysqli_fetch_assoc($zapytanie9)) { ?>
                    <p>Książka <?=$wiersz9['tytul'];?> została zarezerwoana</p>
            <?php    }
                $sql6 = "UPDATE ksiazka SET ksiazka.rezerwacja=1 WHERE ksiazka.id=$id2";
                $zapytanie11 = mysqli_query($connect,$sql6);
            }?>
        </section>
        <section>
            <h2>Zaległe książki</h2>
            <ul>
                <?php
                $zapytanie4=mysqli_query($connect,"SELECT ksiazka.tytul,wypozyczenia.id_cz,wypozyczenia.data_odd FROM ksiazka JOIN wypozyczenia ON ksiazka.id=wypozyczenia.id_ks ORDER BY wypozyczenia.data_odd ASC LIMIT 15;");
                while ($wiersz4=mysqli_fetch_assoc($zapytanie4)) { ?>
                    <li><?= $wiersz4['tytul'];?> <?= $wiersz4['id_cz'];?> <?= $wiersz4['data_odd'];?></li>
                <?php } ?>
            </ul>
        </section>
    </div>
    <footer>
        <p><strong>Autor: 1234567890</strong></p>
    </footer>
</body>
<?php mysqli_close($connect);?>
</html>