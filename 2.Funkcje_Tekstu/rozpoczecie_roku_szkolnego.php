<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
    background-color: lightsteelblue;
    border: 2px dotted blueviolet;
    border-radius: 5px;
    font-style: italic;
    }
    padding: 15px;
    }
    </style>
</head>
<body>
    <p>Rozpoczęcie tego roku szkolnego odbyło się w <?php echo date("l", mktime(9,0,0,9,2,2024));?> i był to <?php echo date("z", mktime(9,0,0,9,2,2024));?> dzień roku</p>
</body>
</html>