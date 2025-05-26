<h1>Tabela działy</h1>
<?php
$result = $querry = mysqli_query($con, "SELECT dzialy.Id_dzial, dzialy.Nazwa FROM dzialy;");
?>
<?php
$rowcount = mysqli_num_rows($result) ?>
<p>Zawiera <?php echo ($rowcount); ?> wierszy</p>
<table>
    <tr>
        <th>Id_dział</th>
        <th>Nazwa</th>
        <th><a class="plus" href="?page=dzialy_dodaj"><span>&#43;</span></a></th>
    </tr>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Id_dzial']; ?></td>
                <td><?= $row['Nazwa']; ?></td>
                <td><a href="?page=dzialy_edycja&id=<?=$row['Id_dzial']?>">edytuj</a></td>
            </tr>
    <?php }
    } else {
        echo "0 results";
    }
    ?>
</table>