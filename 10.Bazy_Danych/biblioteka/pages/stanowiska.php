<h1>Tabela stanowiska</h1>
<?php
include "db/connect.php";
$result = $querry = mysqli_query($con, "SELECT stanowiska.Id_stanowisko, stanowiska.Nazwa FROM stanowiska;");
?>
<?php
$rowcount = mysqli_num_rows($result) ?>
<p>Zawiera <?php echo ($rowcount); ?> wierszy</p>
<table>
    <tr>
        <th>Id_stanowisko</th>
        <th>Nazwa</th>
        <th><a class="plus" href="?page=stanowiska_dodaj"><span>&#10133;</span></a></th>
    </tr>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td style="text-align: center;"><?= $row['Id_stanowisko']; ?></td>
                <td><?= $row['Nazwa']; ?></td>
                <td>
                    <a style="width:auto; float: left;" href="?page=stanowiska_edytuj&id=<?= $row['Id_stanowisko'] ?>" class="olowek"><span>&#128395;</span></a>
                    <a style="width:auto; float: left;" href="?page=stanowiska_usun&id=<?= $row['Id_stanowisko'] ?>&nazwa2=<?= $row['Nazwa']?>" class="krzyzyk"><span>&#120143;</span></a>
                </td>
            </tr>
    <?php }
    } else {
        echo "0 results";
    }
    ?>
</table>