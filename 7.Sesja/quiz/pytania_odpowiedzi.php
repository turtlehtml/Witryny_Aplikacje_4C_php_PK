<?php

$questions = [
    0 => ["Stolica Włoch to:", "Rzym"],
    1 => ["Ile wynosi 8 + 12?", "20"],
    2 => ["Największa planeta w Układzie Słonecznym to:", "Jowisz"],
    3 => ["Który kontynent jest najmniejszy?", "Australia"]
];
?>
to robimy tylko raz, po rozpoczęciu sesji:
if (!isset($_SESSION['question_index'])) {
$_SESSION['question_index'] = 0;
$_SESSION['score'] = 0;
}

formularz:
<form method="POST">
    ...
    ...

    if (isset($_POST['check'])) {
    // sprawdzamy odpowiedź
    // wyświetlamy podsumowanie danego pytania
    // i dotychczas zdobyte punkty
    // zwiększamy numer pytania o jeden
    if ($_SESSION['question_index'] < $totalQuestions) {
        // wyświetlamy przycisk "Następne" przenoszący nas do kolejnego pytania
        }
        }

        if (isset($_POST['next']) || $_SESSION['question_index']==0) {
        // wyświetlamy input do udzielenia odpowiedzi
        // wyświetlamy przycisk Sprawdź
        }
        </form>

        gdy odpowiemy na ostatnie pytanie:
        if ($_SESSION['question_index'] >= $totalQuestions) {
        // usuń zmienne sesji
        // wyświetl podsumowanie całego quizu
        }