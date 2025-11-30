<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <div class="baner">
        <div class="flexbox">
            <header>
                <img src="pliki3/obraz1.png" alt="Mapa Polski">
            </header>
            <header>
                <h1>Rzeki w województwie dolnośląskim</h1>
            </header>
        </div>
        <menu>
            <form action="poziomrzeki.html" method="post">
                <input type="radio" name="opcja" value="wszystko" id="wszystko">
                <label for="wszystkie">Wszystkie</label>
                <input type="radio" name="opcja" value="pso" id="pso">
                <label for="pso">Ponad stan ostrzegawczy</label>
                <input type="radio" name="opcja" value="psa" id="psa">
                <label for="psa">Ponad stan alarmowy</label>
                <input type="submit" value="Pokaż" name="btn">
            </form>
        </menu>
    </div>
    <main>
        <aside class="lewy">
            <h3>Stany na dzień 2022-05-05</h3>
            <table>
                <tr>
                    <th>Wodomierz</th>
                    <th>Rzeka</th>
                    <th>Ostrzegawczy</th>
                    <th>Alarmowy</th>
                    <th>Aktualny</th>
                </tr>
                <?php
                $connect = mysqli_connect("localhost","root","","rzeki");
                $btn = $_POST['btn'];
                $opcja = $_POST['opcja'];
                if (isset($opcja) && $opcja === "wszystko" && isset($btn)) {
                    $result=mysqli_query($connect,"SELECT wodowskazy.nazwa,wodowskazy.rzeka,wodowskazy.stanOstrzegawczy,wodowskazy.stanAlarmowy,pomiary.stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE pomiary.dataPomiaru='2022-05-05';");
                    while( $row=mysqli_fetch_assoc($result) ) { ?>
                <tr>
                    <td>
                        <?= $row['nazwa'];?>
                    </td>
                    <td>
                        <?= $row['rzeka'];?>
                    </td>
                    <td>
                        <?= $row['stanOstrzegawczy'];?>
                    </td>
                    <td>
                        <?= $row['stanAlarmowy'];?>
                    </td>
                    <td>
                        <?= $row['stanWody'];?>
                    </td>
                </tr>
                <?php } ?>
                <?php } elseif (isset($opcja) && $opcja === "pso" && isset($btn)) {
                    $result=mysqli_query($connect,"SELECT wodowskazy.nazwa,wodowskazy.rzeka,wodowskazy.stanOstrzegawczy,wodowskazy.stanAlarmowy,pomiary.stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE pomiary.dataPomiaru='2022-05-05' AND pomiary.stanWody>wodowskazy.stanOstrzegawczy;");
                    while( $row=mysqli_fetch_assoc($result) ) { ?>
                <tr>
                    <td>
                        <?= $row['nazwa'];?>
                    </td>
                    <td>
                        <?= $row['rzeka'];?>
                    </td>
                    <td>
                        <?= $row['stanOstrzegawczy'];?>
                    </td>
                    <td>
                        <?= $row['stanAlarmowy'];?>
                    </td>
                    <td>
                        <?= $row['stanWody'];?>
                    </td>
                </tr>
                <?php }} else {
                    $result=mysqli_query($connect,"SELECT wodowskazy.nazwa,wodowskazy.rzeka,wodowskazy.stanOstrzegawczy,wodowskazy.stanAlarmowy,pomiary.stanWody FROM wodowskazy JOIN pomiary ON wodowskazy.id=pomiary.wodowskazy_id WHERE pomiary.dataPomiaru='2022-05-05' AND pomiary.stanWody>wodowskazy.stanAlarmowy;");
                    while( $row=mysqli_fetch_assoc($result) ) { ?>
                <tr>
                    <td>
                        <?= $row['nazwa'];?>
                    </td>
                    <td>
                        <?= $row['rzeka'];?>
                    </td>
                    <td>
                        <?= $row['stanOstrzegawczy'];?>
                    </td>
                    <td>
                        <?= $row['stanAlarmowy'];?>
                    </td>
                    <td>
                        <?= $row['stanWody'];?>
                    </td>
                    <?php }} ?>
            </table>

        </aside>
        <aside class="prawy">
            <h3>Informacje</h3>
            <ul>
                <li>Brak ostrzeżeń o burzach z gradem</li>
                <li>Smog w mieście Wrocław</li>
                <li>Średnie stany wód</li>
            </ul>
            <h3>Średnie stany wód</h3>
            <?php $result=mysqli_query($connect,"SELECT pomiary.dataPomiaru,AVG(pomiary.stanWody) FROM pomiary GROUP BY pomiary.dataPomiaru;");
            while( $row=mysqli_fetch_assoc($result) ) { ?>
            <p>
                <?=$row['dataPomiaru'];?>:
                <?=$row['AVG(pomiary.stanWody)'];?>
            </p>
            <?php } ?>
            <a href="https://komunikaty.pl">Dowiedz się więcej</a>
            <img src="pliki3/obraz2.jpg" alt="rzeka">
        </aside>
    </main>
    <footer>
        <p>Stronę wykonał: 1234567890</p>
    </footer>
</body>

</html>