<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        <label for="login"></label>
        <input type="text" id="login" placeholder="login" name="login"><br>
        <label for="haslo"></label>
        <input type="text" id="haslo" placeholder="hasło" name="haslo"><br>
        <input type="submit" value="wyślij" name="wyslij">
    </form>
    <pre><?php print_r($_GET); ?></pre>
</body>

</html>