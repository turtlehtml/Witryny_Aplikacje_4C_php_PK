<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border: 1px solid black;
            border-collapse: collapse;
        }
        td,th{
            border: 1px solid black;
            padding: 10px;
            
        }
    </style>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "kozlowski";
    $password = "12345678";
    $database = "kozlowski";
    $con = mysqli_connect($servername, $username, $password, $database);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
    ?>
    <?php
    $querry = mysqli_query($con, "SELECT wypozyczenia.Nr_transakcji, wypozyczenia.Data_wypozyczenia, wypozyczenia.Data_zwrotu, DATEDIFF(IF(wypozyczenia.Data_zwrotu IS null, now(),wypozyczenia.Data_zwrotu),wypozyczenia.Data_wypozyczenia) AS 'Liczba_dni' FROM wypozyczenia ORDER BY Liczba_dni ASC;");
    ?>
    <table>
        <tr>
            <th>Numer transakcji</th>
            <th>Data wypożyczenia</th>
            <th>Data zwrotu</th>
            <th>Liczba dni</th>
        </tr>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?> 
            <tr>
                <td><?=$row['Nr_transakcji']?></td>
                <td><?=$row['Data_wypozyczenia']?></td>
                <td><?=$row['Data_zwrotu']?></td>
                <td><?=$row['Liczba_dni']?></td>
            </tr>
    <?php } } ?>
    </table>
</body>

</html>