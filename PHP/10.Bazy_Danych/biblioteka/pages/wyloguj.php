<h1>Wyloguj</h1>
<?php
if (isset($_SESSION['login_status']) && $_SESSION['login_status'] == 'zalogowany') {
    session_unset();
    session_destroy();
    echo '<h4 class="wyl">Zostałeś wylogowany</h4>';
}
else {
    echo '<h4>Nie jesteś zalogowany</h4>';    
}
?>
