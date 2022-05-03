<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Funções no PHP</h1>
    <hr>

    <h2>Funções básicas (sem retorno)</h2>

<?php
function dadosAutor(){
    echo "<div>";
    echo "<p> Jessica C Alves </p>";
    echo date ("d/m/Y");
    echo "</div>";

}

?>

<section>
    <p>Projeto de site Back-end</p>
    <?=dadosAutor()?>
</section>



<h2>Funções com retorno de dados</h2>
<?php
function dadosCurso(){
    return "programador web - 240 horas";
}
?>

<p>informações : <?=dadosCurso()?></p>
<p>O Senac Penha tem o curso
<?=dadosCurso()?></p>


<h2>Funções com parâmetros/argumentos</h2>

<?php
function soma ($valor1, $valor2){
    return $valor1 + $valor2;
}
?>

<p><?=soma(150,200)?></p>
<p><?=soma(28,87)?></p>

<?php
$primeiro = 1257.45;
$segundo = 10489;
?>

<p><?=soma($primeiro, $segundo)?></p>

<?php
$preco = 1578.99;
$desconto = 75.4789;
$salarioMinimo = 1212;
$novoSalario = 2500.47;

function formatarNumero(float $valor, int $casasDecimais = 2):string{
    return "R$" .number_format($valor, $casasDecimais, ",", ".");
}

?>

<ul>

<li>Preço:<?=formatarNumero($preco)?></li>
<li>Desconto:<?= formatarNumero($desconto,4)?></li>
<li>Salário Minimo:<?=formatarNumero($salarioMinimo)?></li>
<li>Novo Salário:<?=formatarNumero($novoSalario,1)?></li>

</ul>

<h2>Indução de tipos de dados</h2>
<?php

function calculaMedia(float $nota1, float$nota2):float{
    return ($nota1 + $nota2) / 2;

}
?>

<p><?=calculaMedia('texto',5)?></p>
<p><?=calculaMedia(5.5, 7.7)?></p>
<p><?=calculaMedia(9.84, 3.41)?></p>


</body>
</html>