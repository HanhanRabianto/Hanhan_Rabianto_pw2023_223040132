<style type="text/css">
    .kotak {
        text-align: center;
        width: 30px;
        height: 30px;
        background-color: tomato;
        border: 1px solid black;
    }
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2c</title>
    <link rel="stylesheet" href="css2c.css">
</head>
<body>

    <table>
        <?php for( $i = 10; $i >= 1; $i-- ) : ?>
            <tr style="display: flex;">
                <?php for ( $x = 1; $x <= $i; $x++) { ?>
                    <td class="kotak"><?php echo "$x";?></td>
                <?php } ?>
            </tr>

        <?php endfor; ?>
    </table>
</body>
</html>