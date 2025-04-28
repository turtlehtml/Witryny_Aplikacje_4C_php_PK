<h1>Tabela wypożyczenia</h1>
<?php
$querry = mysqli_query($con, "SELECT wypozyczenia.Nr_transakcji, wypozyczenia.Sygnatura, wypozyczenia.Id_pracownika, wypozyczenia.Nr_czytelnika, wypozyczenia.Data_wypozyczenia, wypozyczenia.Data_zwrotu FROM wypozyczenia;
");
?>
<table>
    <tr>
        <th>Nr_transakcji</th>
        <th>Sygnatura</th>
        <th>Id_pracownika</th>
        <th>Nr_czytelnika</th>
        <th>Data_wypożyczenia</th>
        <th>Data_zwrotu</th>
    </tr>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Nr_transakcji']; ?></td>
                <td><?= $row['Sygnatura']; ?></td>
                <td><?= $row['Id_pracownika']; ?></td>
                <td><?= $row['Nr_czytelnika']; ?></td>
                <td><?= $row['Data_wypozyczenia']; ?></td>
                <td><?= $row['Data_zwrotu']; ?></td>
            </tr>
    <?php }
    } else {
        echo "0 results";
    }
    ?>
</table>