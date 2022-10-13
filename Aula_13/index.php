<?php
echo "<h1>Function com parametro</h1><br>";

$salario = 1567.75;
$valorAjuste = 0;

function AjustarSalario($sal, &$valorAjuste){
    $valorAjuste = 300.00;
    return ($sal + $valorAjuste);
}

$valorFinal = AjustarSalario($salario, $valorAjuste);
echo "Valor ajustado é {$valorFinal}, com o aumento de: R$ {$valorAjuste}";

?>