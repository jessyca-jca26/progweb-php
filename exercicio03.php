<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Php</title>
</head>

<body>
    <h1>Exercicios 3</h1>
    <hr>

    <?php
        $salario = 50000;//Entrada (qualque valor)
        echo "<p> salario antigo: R$$salario</p>" 
    
    ?>
    <?php

    if ($salario < 500) {
        $salarioNovo = $salario *1.15;
    } elseif ($salario <= 1000) {
        $salarioNovo = $salario * 1.10;
    } else{
        $salarioNovo = $salario * 1.05;
    }

    echo "<p> salario atualizado: R$$salarioNovo</p>";
    ?>
<!-- number_format(
    valor,
    quantidade de casas decimal",
    "separador de milhar"
)
-->

    <p> <?= number_format($salario,2,",",".")?>
    e <?=number_format($salarioNovo, 2,",", ".")?>
    </p>







</body>
</html>