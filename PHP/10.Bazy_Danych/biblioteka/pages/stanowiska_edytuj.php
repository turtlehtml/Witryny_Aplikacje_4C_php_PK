<h1>Edycja wiersza tabeli <i>stanowiska</i></h1>
<p style="color: #EEE82C;">Edytuj wiersz w tabeli</p>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazwa = htmlspecialchars(trim($_POST['nazwa']));
    $id1 = $_POST['id1'];
    $sql = "UPDATE stanowiska SET Nazwa='$nazwa' WHERE Id_stanowisko='$id1' ";
    mysqli_query($con, $sql);
} else { ?>

    <form action="?page=stanowiska_edytuj" method="post">
        <table>
            <tr>
                <td>Id_stanowisko</td>
                <td><input type="text" readonly name="id1" id="id1" value="<?= $_GET['id'] ?>"></td>
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
<p>Powrót do tabeli <a href="?page=stanowiska">stanowiska</a></p>