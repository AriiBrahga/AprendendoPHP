<?php
echo "Estrutura de Condição (if, else, Elseif) <br>";
$idade = 5;
/*
if ($idade >= 18) {
    echo "Maior de Idade";
} else {
    echo "Menor de Idade";
}
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
    <?php
    if ($idade >= 18) {
    ?> <h1 style="color:green">Maior de 18</h1>
    <?php
    } else {
    ?>
        <h1 style="color:red">Menor de 18</h1>
    <?php
    }
    ?>
</body>

</html>