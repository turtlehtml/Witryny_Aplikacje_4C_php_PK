<h1>Tabela czytelnicy</h1>
<?php include "db/connect.php"; ?>
<?php
$result = $querry = mysqli_query($con, 'SELECT czytelnicy.Nr_czytelnika, czytelnicy.Nazwisko, czytelnicy.Imie, czytelnicy.Data_ur, czytelnicy.Ulica, czytelnicy.Kod, czytelnicy.Miasto, czytelnicy.Data_zapisania, czytelnicy.Data_skreslenia, czytelnicy.Nr_legitymacji, czytelnicy.Funkcja, czytelnicy.Plec FROM czytelnicy;');
?>
<?php
$rowcount = mysqli_num_rows($result) ?>
<p>Zawiera <?php echo ($rowcount); ?> wierszy</p>
<table>
    <tr>
        <th>Nr_czytelnika</th>
        <th>Nazwisko</th>
        <th>Imie</th>
        <th>Data_ur</th>
        <th>Ulica</th>
        <th>Kod</th>
        <th>Miasto</th>
        <th>Data_zapisania</th>
        <th>Data_skreślenia</th>
        <th>Nr_legitymacji</th>
        <th>Funkcja</th>
        <th>Płeć</th>
    </tr>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Nr_czytelnika']; ?></td>
                <td><?= $row['Nazwisko']; ?></td>
                <td><?= $row['Imie']; ?></td>
                <td><?= $row['Data_ur']; ?></td>
                <td><?= $row['Ulica']; ?></td>
                <td><?php echo substr($row['Kod'],-5,2);?>-<?php echo substr($row['Kod'],2);?></td>
                <td><?= $row['Miasto']; ?></td>
                <td><?= $row['Data_zapisania']; ?></td>
                <td><?= $row['Data_skreslenia']; ?></td>
                <td><?= $row['Nr_legitymacji']; ?></td>
                <td><?= $row['Funkcja']; ?></td>
                <td><?php if ($row['Plec'] == 'K') {
                    echo "Kobieta";
                }else {
                        echo "Mężczyzna";       
                    }
                 ?>
                </td>
            </tr>
    <?php }
    } else {
        echo "0 results";
    }
    ?>
</table>