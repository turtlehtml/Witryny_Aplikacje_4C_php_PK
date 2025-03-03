<?php
session_start();
$success = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nazwa = $_POST['nazwa'];
    $text = $_POST['zawartosc'];
    $expire = $_POST['wygas'];
    $success = setcookie($nazwa, $text, time() + $expire, "/");
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
    <form action="" method="post">
        <label for="nazwa">Nazwa<sup>*</sup>:</label><br>
        <input type="text" name="nazwa" id="nazwa" placeholder="nazwa" required readonly  value="favourite_movie"><br><br>
        <label for="zawartosc">Zawartość ciastka:</label><br>
        <textarea name="zawartosc" id="zawartosc" placeholder="zawartosc ciastka" cols="50" rows="5"></textarea><br><br>
        <label for="expire">Wygasa: </label><br>
        <input type="number" name="wygas" id="expire" value="60"><br><br>
        <input type="submit" value="Ustaw">
    </form>
</body>

</html>