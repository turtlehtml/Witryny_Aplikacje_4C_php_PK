<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        .column {
            float: left;
            padding: 10px;

        }

        .left {
            background-color: #2C2A4A;
            width: 25%;
            /* height: 1000px; */


        }

        .right {
            background-color: #4F518C;
            width: 75%;
            height: auto;
            min-height: 150px;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        a {
            display: block;
            padding: 10px;
            width: 100%;
            text-decoration: none;
            color: white;

        }

        @media screen {}

        a:hover {
            background-color: #907AD6;
        }

        a.active {
            background-color: #907AD6;
            color: black;
        }

        td,
        th {
            border: 1px solid black;
            padding: 10px;
            color: white;
        }

        table {
            border-collapse: collapse;
        }
        .plus{
            color: white;

        }
        .olowek{
            color: greenyellow;
        }
        .krzyzyk{
            color: red;
        }
        p{
            color: white;
            font-size: larger;
        }
        .prawo{
            text-align: right;
        }
        h1{
            color: white;
        }
    </style>
</head>

<body>
    <?php include "db/connect.php"; ?>
    <div class="row">
        <div class="column left">
            <a class="<?= ($_GET['page'] ?? '') == 'glowna' ? 'active' : '' ?>" href="?page=glowna">
                Strona główna
            </a>
            <a class="<?= ($_GET['page'] ?? '') == 'czytelnicy' ? 'active' : '' ?>" href="?page=czytelnicy">
                Tabela <i>czytelnicy</i>
            </a>
            <a class="<?= ($_GET['page'] ?? '') == 'dzialy' ? 'active' : '' ?>" href="?page=dzialy">
                Tabela <i>działy</i>
            </a>
            <a class="<?= ($_GET['page'] ?? '') == 'ksiazki' ? 'active' : '' ?>" href="?page=ksiazki">
                Tabela <i>książki</i>
            </a>
            <a class="<?= ($_GET['page'] ?? '') == 'pracownicy' ? 'active' : '' ?>" href="?page=pracownicy">
                Tabela <i>pracownicy</i>
            </a>
            <a class="<?= ($_GET['page'] ?? '') == 'stanowiska' ? 'active' : '' ?>" href="?page=stanowiska">
                Tabela <i>stanowiska</i>
            </a>
            <a class="<?= ($_GET['page'] ?? '') == 'wypozyczenia' ? 'active' : '' ?>" href="?page=wypozyczenia">
                Tabela <i>wypożyczenia</i>
            </a>
        </div>
        <div class="column right">
            <?php
            if (isset($_GET['page'])) {
                if (file_exists('pages/' . $_GET['page'] . '.php')) {
                    include 'pages/' . $_GET['page'] . '.php';
                } else {
                    echo '<h1>Nie znaleziono żądanej strony</h1>';
                }
            } else {
                include 'pages/glowna.php';
            }
            ?>
        </div>
    </div>
    <?php include "db/disconnect.php"; ?>
</body>

</html>