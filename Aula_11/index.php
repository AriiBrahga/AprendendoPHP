<?php
echo "<h1>Foreach</h1>";

$arrayFruta = [
    1 => "Abacaxi",
    2 => "Banana",
    3 => "Goiaba",
    4 => "Acerola",
    5 => "Maça"
];

foreach ($arrayFruta as $key => $v) {
    echo "Key: " . ($key) . " => Value:" . $v . "<br>";
}

echo "<h1>Outro Exemplo</h1>";

$arrayNotas = array(
    "aluno1" => array(
        "nome" => "Julia",
        "nota" => 10
    ),
    "aluno2" => array(
        "nome" => "Rhuan",
        "nota" => 1
    ),
    "aluno3" => array(
        "nome" => "Jaum",
        "nota" => 0
    ),
    "aluno4" => array(
        "nome" => "Carlos",
        "nota" => 8
    )
);

foreach ($arrayNotas as $aluno) {
    foreach ($aluno as $chave => $valor) {
        echo "{$chave} = {$valor} <br>";
    };
};
