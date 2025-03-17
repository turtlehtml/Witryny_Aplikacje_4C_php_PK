<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    sup {
        color: red;
    }

    form {
        background-color: lightblue;

    }
    span {
        color: red;
        font-size: 14px;
    }
</style>

<body> <?php
        $err = [
            'nazwa' => '',
            'email' => '',
            'lata' => '',
            'tekst' => '',
            'zgoda' => ''
        ];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (!empty($_POST['nazwa'])) {
                if (str_word_count(trim($_POST['nazwa'])) === 2) {
                    $err['nazwa'] = '';
                } else {
                    $err['nazwa'] = "Imię i nazwisko musi składać się z dwóch wyrazów";
                }
            }
            if (!empty($_POST['email'])) {
                if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                    $err['email'] = '';
                } else {
                    $err['email'] = "Niepoprawny adres email";
                }
            }
            if (empty($_POST['old'])) {
                $err['old'] = "Wybierz przedział wiekowy";
            } else {
                $err['old'] = '';
            }
            if (strlen($_POST['texta']) < 10) {
                $err['texta'] = "Wiadomość musi zawierać conajmniej 10 znaków";
            } else {
                $err['texta'] = '';
            }
            if (empty($_POST['zgoda'])) {
                $err['zgoda'] = "Potwierdź swoją zgodę";
            } else {
                $err['zgoda'] = '';
            }
        } ?>
    <form action="" method="post">
        <label for="nazwa">Imię i Nazwisko<sup>*</sup></label><br>
        <input type="text" name="nazwa" id="nazwa">
        <br>
        <span><?= $err['nazwa'] ?></span>
        <br>
        <label for="email">Adres Email<sup>*</sup></label><br>
        <input type="text" name="email" id="email">
        <br>
        <span><?= $err['email'] ?></span>
        <br>
        <label for="lata">Przedział wiekowy<sup>*</sup></label><br>
        <select name="lata" id="lata">
            <option value=""></option>
            <option value="25">do 25</option>
            <option value="25-50">25-50</option>
            <option value="50-75">50-75</option>
            <option value="75">powyżej 75</option>
        </select>
        <br>
        <span><?= $err['lata'] ?></span>
        <br>
        <label for="texta">Wiadomość<sup>*</sup></label><br>
        <textarea name="texta" id="texta"></textarea>
        <br>
        <span><?= $err['texta'] ?></span>
        <br>
        <input type="checkbox" name="zgoda" id="zgoda">
        <label for="zgoda">Zgoda na przetwarzanie danych<sup>*</sup></label>
        <br>
        <span><?= $err['zgoda'] ?></span>
        <br><br>
        <input type="submit" value="Wyślij">
    </form>
    <pre><?php echo (date("Y-m-d G:i:s"));
            echo "\n";
            print_r($_POST) ?>
    </pre>

    <?php
    if (empty($err['nazwa']) && empty($err['email']) && empty($err['lata']) && empty($err['texta']) && empty($err['zgoda'])) {
        $file = fopen('formularz_kontaktowy.txt', 'a');
        $tab = date("Y-m-d G:i:s") . "\n" . print_r($_POST, true);
        fwrite($file, $tab);
        fclose($file);
    }
    ?>
</body>

</html>
