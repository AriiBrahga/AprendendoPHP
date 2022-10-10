<?php
/*$cont = 10;
    while ($cont < 20){
        echo "Cont {$cont} <br>";
        $cont++;
    }*/

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
    <ul>
        <?php
        $cont = 0;
        while ($cont < 10) {
            if ($cont > 5) { ?>
                <li><?= $cont; ?></li>
        <?php
            }
            $cont++;
        }
        ?>
    </ul>
</body>

</html>