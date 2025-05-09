<?php
function parOuImpar($numero) {
    return ($numero % 2 === 0) ? "Par" : "Ímpar";
}

$numero = $_POST['numero'];
$resultado = parOuImpar($numero);

echo "O número $numero é: $resultado";
?>
