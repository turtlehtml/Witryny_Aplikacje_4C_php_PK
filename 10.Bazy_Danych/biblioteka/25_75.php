<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing: border-box;
        }
        .column{
            float: left;
            padding: 10px;
            
        }
        .left{
            background-color: lightgreen;
            width: 15%;
            

        }
        .right{
            background-color: greenyellow;
            width: 85%;
            height: auto;
            min-height: 150px;
        }
        .row:after{
            content:"" ;
            display: table;
            clear: both;
        }
        a{
          display: block;
          padding: 10px;
          width: 100%;
          text-decoration: none;

        }
        a:hover{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="column left">
            <h2>Column 1</h2>
            <p>Some text...</p>
            <a href="">link 1</a>
            <a href="">link 1</a>
            <a href="">link 1</a>
            <a href="">link 1</a>
            <a href="">link 1</a>
            <a href="">link 1</a>
            <a href="">link 1</a>
            <a href="">link 1</a>
        </div>
        <div class="column right">
            <h2>Column 2</h2>
            <p>Some text...</p>
        </div>
    </div>
</body>
</html>