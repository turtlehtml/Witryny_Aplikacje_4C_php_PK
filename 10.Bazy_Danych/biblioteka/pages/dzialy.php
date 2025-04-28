<h1>Tabela działy</h1>
<?php
$querry = mysqli_query($con, "SELECT dzialy.Id_dzial, dzialy.Nazwa FROM dzialy;");
?>
<table>
    <tr>
        <th>Id_dział</th>
        <th>Nazwa</th>
    </tr>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <tr>
                <td><?= $row['Id_dzial']; ?></td>
                <td><?= $row['Nazwa']; ?></td>
            </tr>
    <?php }
    } else {
        echo "0 results";
    }
    ?>
</table>