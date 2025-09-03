<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        td {
            border: 1px dotted black;
            padding: 3px;
        }

        table {
            border-collapse: collapse;
        }

        th {
            border: 1px dotted black;
            padding: 3px;
        }
    </style>
</head>

<body>
    <?php
    $movies = array(
        "Skazani na Shawshank" => "dramat",
        "Nietykalni" => "biograficzny",
        "Władca Pierścieni: Powrót króla" => "fantasy",
        "Pulp Fiction" => "gangsterski",
        "Siedem" => "kryminał",
        "Podziemny krąg" => "thriller",
        "Django" => "western",
        "Król Lew" => "animacja",
        "Avengers: Wojna bez granic" => "akcja",
        "Dobry, zły i brzydki" => "western"
    );
    ?>
    <table>
        <caption>Sortowanie malejąco według wartości [asort]</caption>
        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
        <?php
        asort($movies);
        foreach ($movies as $x => $key) { ?>
            <tr>
                <td><?php print_r($x); ?></td>
                <td><?php print_r($key); ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <table>
        <caption>Sortowanie malejąco według wartości [arsort]</caption>
        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
        <?php
        arsort($movies);
        foreach ($movies as $x => $key) { ?>
            <tr>
                <td><?php print_r($x); ?></td>
                <td><?php print_r($key); ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <table>
        <caption>Sortowanie malejąco według wartości [ksort]</caption>
        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
        <?php
        ksort($movies);
        foreach ($movies as $x => $key) { ?>
            <tr>
                <td><?php print_r($x); ?></td>
                <td><?php print_r($key); ?></td>
            </tr>
        <?php } ?>
    </table>
    <br>
    <table>
        <caption>Sortowanie malejąco według wartości [krsort]</caption>
        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
        <?php
        krsort($movies);
        foreach ($movies as $x => $key) { ?>
            <tr>
                <td><?php print_r($x); ?></td>
                <td><?php print_r($key); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>