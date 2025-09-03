<h1>Autoryzacja</h1>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['login']=="admin" && $_POST['haslo']=="admin123") { 
        echo '<h2 class="jej">Jesteś zalogowany</h2>';
        $_SESSION['login'] = 'admin';
        $_SESSION['login_status'] = 'zalogowany';
    }
}
?>
<?php
if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == 'zalogowany') { ?>
    <h4 style="color: white;">Jesteś zalogowany jako <?= $_SESSION['login'];?></h4>
    <button style=""><a href="?page=wyloguj">Wylogowywanie</a></button>

 <?php } else { ?>
   <form action="?page=logowanie" method="post">
    <table>
        <tr>
            <td>Login</td>
            <td><input type="text" name="login" placeholder="login" id="login"></td>
        </tr>
        <tr>
            <td>Hasło</td>
            <td><input type="password" name="haslo" id="haslo" placeholder="hasło"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"><input type="submit" value="Zaloguj"></td>
        </tr>
    </table>
</form> 
<?php } ?>


