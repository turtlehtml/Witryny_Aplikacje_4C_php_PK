<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "kozlowski";
    $password = "12345678";
    $database = "kozlowski";
    $con = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    ?>
    <?php
    $querry = mysqli_query($con, "SELECT ksiazki.Tytul, ksiazki.Imie, ksiazki.Nazwisko, ksiazki.Wydawnictwo, ksiazki.Miejsce_wyd, ksiazki.Objetosc_ks, ksiazki.Cena, ksiazki.Rok_wyd, dzialy.Nazwa FROM ksiazki INNER JOIN dzialy ON dzialy.Id_dzial = ksiazki.Id_dzial;");
    ?>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <p><q><?= $row['Tytul'] ?></q> - <?= $row['Imie'] ?> <?= $row['Nazwisko'] ?>, wydawnictwo <?= $row['Wydawnictwo'] ?> (<?= $row['Miejsce_wyd'] ?> <?= $row['Rok_wyd'] ?>), <?=$row['Objetosc_ks']?> str. Cena:<?= $row['Cena']?> zł (dział: <?= $row['Nazwa']?>)</p>
    <?php }
    } else {
        echo "0 results";
    }

    mysqli_close($con);
    ?>
</body>

</html>