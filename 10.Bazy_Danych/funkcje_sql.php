<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    $querry = mysqli_query($con, "SELECT UPPER(CONCAT(pracownicy.Imie,' ',pracownicy.Nazwisko)) AS PRACOWNIK FROM pracownicy;");
    ?>
    <hr>
    <ul>
    <?php
    if (mysqli_num_rows($querry) > 0) {
        while ($row = mysqli_fetch_assoc($querry)) { ?>
            <li><?= $row['PRACOWNIK']?></li>
        <?php  } 
    }
    ?>

    </ul>
</body>

</html>