<?php
echo "<h1>Array</h1>";

$arraynomes = ["Pedro", "Arielson", "Caio", "Lucas"];
/*
    echo "{$arraynomes[2]}";
    for ($i = 0; $i < count($arraynomes); $i++) {
        echo "{$arraynomes[$i]} <br>";
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
    <select name="alProfessores" id="alProfessores">
        <?php
        for ($i = 0; $i < count($arraynomes); $i++) {
        ?>
            <option value="<?= $i; ?>"><?= $arraynomes[$i]; ?></option>
        <?php
        }
        ?>
    </select>
    <button onclick="alert(document.getElementById('alProfessores').value)">Selecionar</button>
</body>

</html>

<?php
echo "<h1>Array Associativo </h1> <br>";
$arraynotas = array(
    "aluno1" => array(
        "nome" => "Julia",
        "nota" => 10
    )
);
echo $arraynotas["aluno1"]["nome"];

echo "<br>Inserindo Valores no Array Atraves do For <br>";

$arr = [];
for ($i = 0; $i <= 100; $i++) {
    $arr[] = $i;
}
for ($i = 0; $i <= 100; $i++) {
    echo "2 * {$arr[$i]} = " . (2 * $arr[$i]) . " <br>";
}
