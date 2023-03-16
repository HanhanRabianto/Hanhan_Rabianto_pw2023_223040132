<?php 
$pc = ['Motherboard','Prosesor','Hard Disk','PC Coller','VGA Crad','SSD'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>
<body>

<h2>Macam-macam perangkat keras komputer</h2>
<ol>
<?php foreach($pc as $b) { ?>
        <li><?=$b; ?></li>
        <?php } ?>
</ol>
<hr>
<h2>Macam-macam perangkat keras komputer baru</h2>
<ol>
<?php 
    array_push($pc , 'Crad Reader' , 'Modem');
    sort($pc);
    foreach($pc as $ba) { ?>
        <li><?=$ba; ?></li>
    <?php  }?>

</ol>
    
</body>
</html>
