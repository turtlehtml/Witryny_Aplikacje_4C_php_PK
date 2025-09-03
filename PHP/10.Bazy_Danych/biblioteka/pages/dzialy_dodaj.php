<h1>Dodaj nowe dane do tabeli</h1>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nazwa = htmlspecialchars(trim($_POST['nazwa']));
        $qrr= "INSERT INTO `dzialy`(`Nazwa`) VALUES ('$nazwa')";
        mysqli_query($con,$qrr);
    } else { ?> 
    
<form action="?page=dzialy_dodaj" method="post" >
    <table>
        <tr>
            <td>id_dzial</td>
            <td><input type="text" disabled name="dzialid" id="dzialid"></td>
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
<p>Powrót do tabeli <a href="?page=dzialy">działy</a></p>