<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>lorem50</legend>
            <?php if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo "Oto wpisany tekst";
            ?>
            <p>
            <?php foreach ($_POST as $x) {
                echo $x;
            
            }?>
            </p>
            <?php }
            else { ?>
            <textarea name="sa" id="sa" cols="50" rows="5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Molestias, consectetur explicabo esse possimus iure id a dolore magni veniam cumque velit hic laboriosam quasi quibusdam et ut unde delectus repudiandae ducimus ipsa facilis nulla eveniet ea maiores. Dolorum, deleniti dicta reprehenderit, placeat velit praesentium, rem nihil eveniet quisquam eaque quibusdam.</textarea>
            <br>
            <input type="submit" value="Wyślij">
            <?php }?>
        </fieldset>
    </form>
</body>
</html>