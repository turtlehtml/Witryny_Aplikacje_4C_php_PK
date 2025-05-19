<h1>Tabela książki</h1>
<?php
$result = $querry = mysqli_query($con, "SELECT ksiazki.Sygnatura, ksiazki.Tytul, ksiazki.Nazwisko, ksiazki.Imie, ksiazki.Wydawnictwo, ksiazki.Miejsce_wyd, ksiazki.Rok_wyd, ksiazki.Objetosc_ks, ksiazki.Cena, dzialy.Nazwa FROM ksiazki INNER JOIN dzialy ON ksiazki.Id_dzial=dzialy.Id_dzial ORDER BY `ksiazki`.`Sygnatura` ASC;
");
?>
<?php
$rowcount = mysqli_num_rows($result) ?>
<p>Zawiera <?php echo ($rowcount); ?> wierszy</p>
<table>
    <tr>
        <th>Sygnatura</th>
        <th>Tytuł</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Wydawnmictwo</th>
        <th>Miejsce_wyd</th>
        <th>Rok_wyd</th>
        <th>Objetosc_ks</th>
        <th>Cena</th>
        <th>Id_dział</th>

    </tr>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Sygnatura']; ?></td>
                <td><?= $row['Tytul']; ?></td>
                <td><?= $row['Nazwisko']; ?></td>
                <td><?= $row['Imie']; ?></td>
                <td><?= $row['Wydawnictwo']; ?></td>
                <td><?= $row['Miejsce_wyd']; ?></td>
                <td><?= $row['Rok_wyd']; ?></td>
                <td><?= $row['Objetosc_ks']; ?></td>
                <td><?= $row['Cena']; ?></td>
                <td><?= $row['Nazwa']; ?></td>
            </tr>
    <?php }
    } else {
        echo "0 results";
    }
    ?>
</table>