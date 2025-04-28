<h1>Tabela stanowiska</h1>
<?php
include "db/connect.php";
$querry = mysqli_query($con, "SELECT stanowiska.Id_stanowisko, stanowiska.Nazwa FROM stanowiska;");
?>
<p>Zawiera <?php ?> wierszy</p>
<table>
    <tr>
        <th>Id_stanowisko</th>
        <th>Nazwa</th>
    </tr>
<?php
if (mysqli_num_rows($querry) > 0) {
    while ($row = mysqli_fetch_assoc($querry)) { ?>
    <tr>
        <td><?=$row['Id_stanowisko'];?></td>
        <td><?=$row['Nazwa'];?></td>
    </tr>
<?php }
} else {
    echo "0 results";
}
?>
</table>