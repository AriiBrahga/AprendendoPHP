<?php
echo "<h1>Function</h1>";
/*
function Ola($nome, $email)
{
    return "Olá, Mundo! Meu nome {$nome} e meu email é {$email}";
}

$v = Ola("Arielson", "ariel@gmail.com");
echo $v;
*/

function Ajuste($p1, $p2) {
    return (($p1 + $p2) / 4);
}

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
    <h1><?= Ajuste(3, 10)?></h1>
    <ul>
        <?php
        for ($i = 0; $i < 10; $i++){
            ?>
            <li><?= Ajuste($i, ($i * 6))?></li>
            <?php
        }
        ?>
    </ul>
</body>
</html>