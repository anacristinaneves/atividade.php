<?php

    $base_maior =$_REQUEST ['base_maior'];
    $base_menor =$_REQUEST ['base_menor'];
    $altura = $_REQUEST['altura'];

    $area = ($base_maior + $base_menor) * $altura / 2;

    echo "A área do trapézio é: $area";