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