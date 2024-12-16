<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form  method="post" action="">
    <input type="email" placeholder="email" name="email"><br>
    <input type="date" name="date"><br>
    <input type="month" name="month"><br>
    <input type="time" name="time"><br>
    <input type="week" name="week"><br>
    <input type="submit" value="wyślij" name="wyślij">
    </form>
    <pre><?php print_r($_POST);?></pre>
</body>

</html>