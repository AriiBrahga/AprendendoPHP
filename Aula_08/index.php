<?php
/*echo "<h1>FOR</h1>";
    for ($i = 0; $i < 10; $i++){
        echo "$i <br>";
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
        for ($j = 1; $j <= 10; $j++) {
            echo "Tabuada do {$j} <br>";
            for ($i = 0; $i < 10; $i++) {
        ?>
                <li><?= $j ?> * <?= $i; ?> = <?= ($j * $i) ?></li>
        <?php
            }
        }
        ?>
    </ul>
</body>

</html>