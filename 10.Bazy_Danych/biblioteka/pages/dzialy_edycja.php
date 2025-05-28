<h1>Edycja wiersza tabeli <i>działy</i></h1>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazwa = htmlspecialchars(trim($_POST['nazwa']));
    $id1= $_POST['id1'];
    $sql= "UPDATE dzialy SET Nazwa='$nazwa' WHERE Id_dzial='$id1' ";
    mysqli_query($con, $sql);
} else { ?>

    <form action="?page=dzialy_edycja" method="post">
        <table>
            <tr>
                <td>id_dzial</td>
                <td><input type="text" name="id1" id="id1" value="<?=$_GET['id'] ?>"></td>
            </tr>
            <tr>
                <td>Nazwa</td>
                <td><input type="text" name="nazwa" id="nazwa"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Zapisz"></td>
            </tr>
        </table>
    </form>
<?php } ?>
<p>Powrót do tabeli <a href="?page=dzialy">działy</a></p>
