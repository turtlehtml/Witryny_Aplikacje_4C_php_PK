<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firma przewozowa</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    $connect = mysqli_connect("localhost","root","","przewozy");
    ?>
    <header>
        <h1>Firma przewozowa Półdarmo</h1>
    </header>
    <nav>
        <a href="kw1.png">kwerenda1</a>
        <a href="kw2.png">kwerenda2</a>
        <a href="kw3.png">kwerenda3</a>
        <a href="kw4.png">kwerenda4</a>
    </nav>
    <main>
        <section id="bloklewy">
            <h2>Zadania do wykonania</h2>
            <table>
                <tr>
                    <th>Zadanie do wykonania</th>
                    <th>Data realizacji</th>
                    <th>Akcja</th>
                    <!-- skrypt 1 skrypt 2 -->
                </tr>
                <?php
                $kwerenda1 = "SELECT zadania.id_zadania,zadania.zadanie,zadania.data FROM zadania;";
                $zapytanie1 = mysqli_query($connect,$kwerenda1);
                while( $row=mysqli_fetch_assoc($zapytanie1) ) { ?>
                    <tr>
                        <td><?= $row['zadanie'];?></td>
                        <td><?= $row['data'];?></td>
                        <td><a href="">Usuń</a></td>
                    </tr>
                <?php } ?>
            </table>
            <form action="przewozy.php" method="post">
                <label for="zadanie">Zadanie do wykonania</label><input type="text" name="zadanie"><br>
                <label for="data_realizacji">Data realizacji</label><input type="date" name="data_realizacji"><br>
                <input type="submit" value="Dodaj" name="dodaj">
                <?php
                if (isset($_POST['dodaj'])) {
                $zadanie = $_POST['zadanie'];
                $data = $_POST['data_realizacji'];
                $kwerenda2 = "INSERT INTO `zadania` (`zadanie`, `data`, `osoba_id`) VALUES ($zadanie , $data , '1');";
                $zapytanie2 = mysqli_query($connect,$kwerenda2);
                }
                // header("location: przewozy.php");
                // Ja pierdole
                ?>
            </form>
        </section>
        <section id="blokprawy">
            <img src="auto.png" alt="auto firmowe">
            <h3>Nasza specjalność</h3>
            <ul>
                <li>Przeprowadzki</li>
                <li>Przewóz mebli</li>
                <li>Przesyłki gabarytowe</li>
                <li>Wynajem pojazdów</li>
                <li>Zakupy towarów</li>
            </ul>
        </section>
    </main>
    <footer>
        <p>Strone wykonał: 1234567890</p>
    </footer>
    <?php mysqli_close($connect);?>
</body>
</html>