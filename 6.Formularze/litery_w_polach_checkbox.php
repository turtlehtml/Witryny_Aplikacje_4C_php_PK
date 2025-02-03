<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        fieldset{
            border: 1px solid blue;
        }
        label{
            margin-right: 15px;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>Alfabet</legend>
        <?php
        $litery = range('a','z');
        ?>
        <?php foreach ($litery as $key => $value) { ?>
           <input type="checkbox" name="litera[]" id="litera_<?= $value?>">
            <label for="litera_<?= $value?>"> <?php echo"$value";?></label>
           
        <?php } ?><br>
        <input type="submit" value="Wybierz">
        <?php if(isset($value)){
            $value = 'checked';
        }
        else{
            $val
        }    

        
        

    </fieldset>
    
</body>
</html>