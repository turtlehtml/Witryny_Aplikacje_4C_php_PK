<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid black;
            padding: 5px;
        }
        .prawo{
            text-align: right;
        }
        
    </style>
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
    $querry = mysqli_query($con, "SELECT ksiazki.Sygnatura, ksiazki.Tytul, CONCAT(ksiazki.Imie,' ',ksiazki.Nazwisko) AS 'Autor', ksiazki.Wydawnictwo, ksiazki.Rok_wyd, ksiazki.Cena FROM ksiazki WHERE (ksiazki.Wydawnictwo LIKE 'PWN' OR ksiazki.Wydawnictwo LIKE 'Helion') AND ksiazki.Rok_wyd > 1990 AND ksiazki.Rok_wyd < 2011 ORDER BY `ksiazki`.`Rok_wyd` ASC;");
    ?>
    <table>
        <tr>
            <th>Sygnatura</th>
            <th>Tytuł</th>
            <th>Autor</th>
            <th>Wydawnictwo</th>
            <th>Rok wydania</th>
            <th>Cena</th>
        </tr>
        <?php
        if (mysqli_num_rows($querry) > 0) {
            while($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Sygnatura']?></td>
                <td><?= $row['Tytul']?></td>
                <td><?= $row['Autor']?></td>
                <td><?= $row['Wydawnictwo']?></td>
                <td><?= $row['Rok_wyd']?></td>
                <td class="prawo"><?= explode('.',$row['Cena'])[0];?> zł <?= explode('.',$row['Cena'])[1];?> gr</td>
            </tr>
        <?php } } ?>
    </table>
</body>

</html>