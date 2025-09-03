<?php session_start();
if (!isset($_SESSION['question_index'])) {
    $_SESSION['question_index'] = 0;
    $_SESSION['score'] = 0;
}
;?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $questions = [
        0 => ["Stolica Włoch to:", "Rzym"],
        1 => ["Ile wynosi 8 + 12?", "20"],
        2 => ["Największa planeta w Układzie Słonecznym to:", "Jowisz"],
        3 => ["Który kontynent jest najmniejszy?", "Australia"]
    ];
    ?>
    <form action="" method="post">
    <p>Pytanie nr. <?= $_SESSION['question_index'];?></p>
    <p><?php print_r($questions[0][0]);?> </p>
    <?php if (isset($_POST['check'])) {
        
    }
    ?>
    </form>
</body>

</html>