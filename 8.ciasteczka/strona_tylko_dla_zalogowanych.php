<?php 
session_start();
$success=false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazwa = $_POST['nazwa'];
    $text = $_POST['zawartosc'];
    $expire = $_POST['wygas'];
    $sucess = setcookie($nazwa, $text, time() + $expire,"/");
}    
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'menu.php';?>
    <h1>Strona administracyjna</h1>
    <?php
    if (!empty($_SESSION['login_status'])) { ?>
        <form action="" method="post">
            <label for="nazwa">Nazwa<sup>*</sup>:</label>
            <input type="text" name="nazwa" id="nazwa" placeholder="nazwa" required><br>
            <label for="zawartosc">Zawartość:</label><br>
            <textarea name="zawartosc" id="zawartosc" placeholder="zawartosc" cols="50" rows="5" ></textarea><br>
            <label for="expire">Wygasa: (w sekundach)</label><br>
            <input type="number" name="wygas" id="expire" value="3600"><br><br>
            <input type="submit" value="Ustaw">
        </form>
        <pre><?php print_r($_COOKIE)?></pre>
        <?php } else { ?>
            <p>Musisz być zalogowany, aby ustawić ciastko</p>
        <?php } ?>
        <?php include 'stopka.php';?>
    
    
</body>
</html>