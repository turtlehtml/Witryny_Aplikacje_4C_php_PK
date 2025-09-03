<h1>Dodawanie weirszu do tabeli</h1>
<p style="color: greenyellow;">Dodaj wiersz do tabeli</p>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')  {
    $nazwa = htmlspecialchars(trim($_POST['nazwa']));
    $sql = "INSERT INTO `stanowiska`(`Nazwa`) VALUES ('$nazwa')";
    mysqli_query($con,$sql);
} else { ?>
    <form action="?page=stanowiska_dodaj" method="post" >
    <table>
        <tr>
            <td>Id_stanowisko</td>
            <td><input type="text" disabled name="stanid" id="stanid"></td>
        </tr>
        <tr>
            <td>Nazwa</td>
            <td><input type="text" name="nazwa" id="nazwa"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" value="Zapisz" ></td>
        </tr>
    </table>
</form>
<?php } ?>
<p>Powrót do tabeli <a href="?page=stanowiska">stanowiska</a></p>