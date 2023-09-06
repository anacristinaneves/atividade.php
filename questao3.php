

<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $salario_fixo = floatval($_GET["salario_fixo"]);
        $valor_apurado = floatval($_GET["valor_apurado"]);
        $comissao = $valor_apurado * 0.04;
        $salario_final = ($salario_fixo + $comissao);
    }
    ?>

    <h1>Resultado do Cálculo</h1>
    <p>Salário Fixo: R$ <?php echo number_format($salario_fixo, 2, '.', ','); ?></p>
    <p>Valor Total de Vendas: R$ <?php echo number_format($valor_apurado, 2, '.', ','); ?></p>
    <p>Comissão: R$ <?php echo number_format($comissao, 2, '.', ','); ?></p>
    <p>Salário Final: R$ <?php echo number_format($salario_fixo + $comissao, 2, '.', ','); ?></p>