<?php
    $nome = $_REQUEST['nome'];
    $nota1 = floatval($_REQUEST['nota1']);
    $nota2 = floatval($_REQUEST['nota2']);
    $media = ($nota1 + $nota2) / 2;

    echo "O aluno(a) " . $nome . " ficou com " . $media . " de média.";
    ?>