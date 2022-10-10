<?php
/*echo "<h1>Do While</h1>";
    $i = 0;
    do {
        echo "Valor {$i} <br>";
        $i++;
    }while($i < 10);
*/
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
        $i = 0;
        do {
        ?>
            <li>Valor = <?= $i ?></li>
        <?php
            $i++;
        } while ($i <= 10);
        ?>
    </ul>
</body>

</html>