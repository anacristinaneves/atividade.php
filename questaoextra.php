
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $investimento = $_GET["investimento"];
        $valor = $_GET["valor"];
        $rendimento = 0;

        if ($investimento == "Poupança") {
            $rendimento = $valor * 0.03;
        } elseif ($investimento == "Fundos de renda fixa") {
            $rendimento = $valor * 0.04;
        } else {
            $rendimento = 0; 
        }
    }
    ?>

    <h1>Resultado do Investimento</h1>
    <p>Investimento selecionado: <?php echo $investimento; ?></p>
    <p>Valor investido: R$ <?php echo $valor; ?></p>
    <p>Rendimento mensal: R$ <?php echo $rendimento; ?></p>

