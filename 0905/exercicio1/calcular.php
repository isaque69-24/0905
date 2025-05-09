<?php
function calcularMultiplicacao($a, $b) {
    return ($a * $b);
}

$valor1 = $_POST['valor1'];
$valor2 = $_POST['valor2'];
$Multiplicacao = calcularMultiplicacao($valor1, $valor2);

echo "O resultado é $Multiplicacao";
?>