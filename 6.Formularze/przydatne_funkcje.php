<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="puste_znaki">Usuń "białe" znaki </label>
        <input type="text" name="puste_znaki" id="puste_znaki"><br>
        <label for="ukosniki">Usuń ukośniki (backslash) </label>
        <input type="text" name="ukosniki" id="ukosniki"><br>
        <label for="encje_html">Zmień znaki HTML na tzw. encje </label>
        <input type="text" name="encje_html" id="encje_html"><br>   
        <input type="submit" value="Wyślij">
    </form>
    <?php if ($_SERVER['REQUEST_METHOD']==="POST") { ?>
        <span>Tekst z pola <i>puste_znaki</i> bez funkcji <b>trim</b>: <?php var_dump($_POST['puste_znaki']);?></span><br>
        <span>Tekst z pola <i>ukosniki</i> bez funkcji <b>stripslashes</b>: <?php var_dump($_POST['ukosniki']);?></span><br>
        <span>Tekst z pola <i>encje_html</i> bez funkcji <b>htmlspecialchars</b>: <?php var_dump($_POST['encje_html']);?></span>
        <p></p>
        <span>Tekst z pola <i>puste_znaki</i> z zastosowaniem funkcji <b>trim</b>: <?php var_dump(trim($_POST['puste_znaki']));?></span><br>
        <span>Tekst z pola <i>ukosniki</i> z zastosowaniem funkcji <b>stripslashes</b>: <?php var_dump(stripslashes($_POST['ukosniki']));?></span><br>
        <span>Tekst z pola <i>encje_html</i> z zastosowaniem funkcji <b>htmlspecialchars</b>: <?php var_dump(htmlspecialchars($_POST['encje_html']));?></span>
    <?php } ?>
</body>
</html>