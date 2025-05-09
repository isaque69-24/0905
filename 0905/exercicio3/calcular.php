<?php
function maiorNumero($a, $b, $c) {
    return max($a, $b, $c);
}

$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$maior = maiorNumero($n1, $n2, $n3);

echo "O maior número entre $n1, $n2 e $n3 é: $maior";
?>
