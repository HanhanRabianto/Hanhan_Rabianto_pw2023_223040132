<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .b1, .b2, .b3{
            width: 200px;
            height: 55px
        }
        .b1 {
            top: 0px;
        }
        .b2 {
            top: 50px;
        }
        .b3 {
            top: 100px;
        }
        .b1 div, .b2 div, .b3 div{
            float: left;
            background: brown;
            border: 2px solid black;
            width: 50px;
            height: 50px;
            text-align: center;
        }
        </style>
</head>
<body>
    <div class="b1">
          <div><p>1</p></div>
    </div>
    <div class="b2">
        <div><p>2</p></div>
        <div><p>2</p></div>
    </div>
    <div class="b3">
        <div><p>3</p></div>
        <div><p>3</p></div>
        <div><p>3</p></div>
    </div>
</body>
</html>