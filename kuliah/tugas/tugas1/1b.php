<?php 
$l ='32' 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       <p>
           saya adalah angka <b><?php echo $l ?></b>
        </p>
        <p>
            jika aku dikali 5, maka aku sekarang menjadi <b><?php echo $l*5 ?></b>
        </p>
        <p>
            Jika aku dibagi 2, maka aku sekarang menjadi <b><?php echo $l*5/2 ?></b>
        </p>
        <p>
            Jika aku ditambah 75, maka aku sekarang menjadi <b><?php echo $l*5/2+75 ?></b>
        </p>
        <p>
            Jika aku dikurang 20, maka aku sekarang menjadi <b><?php echo $l*5/2+75-20 ?></b>
        </p>
</body>
</html>