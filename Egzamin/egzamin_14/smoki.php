<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smoki</title>
    <link rel="stylesheet" href="styl.css">
    <script src="main.js"></script>
</head>
<body>
    <?php 
    $connect = mysqli_connect("localhost","root","","smoki");
    ?>
    <header>
        <h2>Poznaj smoki!</h2>
    </header>
    <div class="flexbox">
        <nav>
            <div id="blok1" onclick="zmiana1()">Baza</div>
            <div id="blok2" onclick="zmiana2()">Opisy</div>
            <div id="blok3">Galeria</div>
        </nav>
        <main>
            <section id="sekcja1">
                <h3>Baza smoków</h3>
                <form action="smoki.php" method="post">
                    <select name="pochodzenie_smokow" id="pochodzenie_smokow">
                    <?php
                    $kwerenda1 = "SELECT DISTINCT(smok.pochodzenie) FROM smok ORDER BY smok.pochodzenie ASC;";
                    $zapytanie1 = mysqli_query($connect,$kwerenda1);
                    while( $row=mysqli_fetch_assoc($zapytanie1) ) { ?>
                        <option value="<?= $row['pochodzenie'];?>"><?= $row['pochodzenie'];?></option>
                    <?php } ?>
                    </select>
                    <input type="submit" value="Szukaj" name="szukaj">
                </form>
                <table>
                    <tr>
                        <th>Nazwa</th>
                        <th>Długość</th>
                        <th>Szerokość</th>
                    </tr>
                    <?php
                    $kraj = $_POST['pochodzenie_smokow'];
                    if (isset($_POST['szukaj'])) {
                        $kwerenda2 = "SELECT smok.nazwa,smok.dlugosc,smok.szerokosc FROM smok WHERE smok.pochodzenie='$kraj';";
                        $zapytanie2 = mysqli_query($connect,$kwerenda2);
                        while( $wiersz=mysqli_fetch_assoc($zapytanie2) ) { ?>
                            <tr>
                                <td><?= $wiersz['nazwa'];?></td>
                                <td><?= $wiersz['dlugosc'];?></td>
                                <td><?= $wiersz['szerokosc'];?></td>
                            </tr>
                    <?php    } ?>
                    <?php } ?>
                    
                    
                </table>
            </section>
            <section id="sekcja2">
                <h3>Opisy smoków</h3>
                <dl>
                    <dt>Smok czerwony</dt>
                    <dd>Pochodzi z Chin. Ma 1000 lat. Żywi się mniejszymi zwierzętami. Posiada łuski cenne na rynkach wschodnich do wyrabiania lekarstw. Jest dziki i groźny.</dd>
                    <dt>Smok zielony</dt>
                    <dd>Pochodzi z Bułgarii. Ma 10000 lat. Żywi się mniejszymi zwierzętami, ale tylko w kolorze zielonym. Jest kosmaty. Z sierści zgubionej przez niego, tka się najdroższe materiały.
                    </dd>
                    <dt>Smok niebieski</dt>
                    <dd>Pochodzi z Francji. Ma 100 lat. Żywi się owocami morza. Jest natchnieniem dla najlepszych malarzy. Często im pozuje. Smok ten jest przyjacielem ludzi i czasami im pomaga. Jest jednak próżny i nie lubi się przepracowywać.</dd>
                </dl>
            </section>
            <section id="sekcja3">
                <h3>Galeria</h3>
                <img src="smok1.JPG" alt="Smok czerwony">
                <img src="smok2.JPG" alt="Smok wielki">
                <img src="smok3.JPG" alt="Skrzydlaty łaciaty">
            </section>
        </main>
    </div>
    <footer>
        Strone opracował: 1234567890
    </footer>
</body>
<?php
mysqli_close($connect);
?>
</html>