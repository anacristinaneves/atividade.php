

<?php
$custo_fabrica = floatval($_REQUEST["custo_fabrica"]);

if ($custo_fabrica <= 39999.99) {
    $valor_carro = $custo_fabrica + ($custo_fabrica * 0.05);
} elseif ($custo_fabrica >= 40000 && $custo_fabrica <= 69999.99) {
    $valor_carro = $custo_fabrica + ($custo_fabrica * 0.10) + ($custo_fabrica * 0.15);
} else {
    $valor_carro = $custo_fabrica + ($custo_fabrica * 0.15) + ($custo_fabrica * 0.20);
}

echo "O valor do carro é R$" . number_format($valor_carro, 2, '.', ',');

?>


