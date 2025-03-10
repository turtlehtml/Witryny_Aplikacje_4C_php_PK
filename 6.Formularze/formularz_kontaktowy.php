<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        sup{
            color: red;
        }
        form{
            background-color: aliceblue;
        }
    </style>
</head>
<body>
    <?php
        $errors = ['jeszcze raz nieuku'];
        
        if ($_SERVER['REQUEST_METHOD']==='POST') {
            if(isset($_POST['name'])){
                if (str_word_count(trim($_POST['name'])) == 2) {
                    echo "lubie pomarańcze";
                }
                else{
                    print_r($errors);
            }
            }
        }
        
    ?>
    <form action="" method="post">
    <label for="name">Imię i nazwisko<sup>*</sup></label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Adres email<sup>*</sup></label><br>
    <input type="email" name="email" id="email" required><br><br>
    <label for="wiek">Przedział wiekowy<sup>*</sup></label><br>
    <select name="wiek" id="wiek" required>
        <option value=""></option>
        <option value="25">do 25 lat</option>
        <option value="1">25-50 lat</option>
        <option value="2">50-75 lat</option>
        <option value="3">powyżej 75 lat</option>
    </select><br><br>
    <label for="mess">Wiadomość<sup>*</sup></label><br>
    <textarea name="mess" id="mess"></textarea><br><br>
    <input type="checkbox" name="zgoda" id="zgoda" required>
    <label for="zgoda">Zgoda na przetwarzanie danych<sup>*</sup></label><br><br>
    <input type="submit" value="Wyślij">
    </form>
</body>
</html>