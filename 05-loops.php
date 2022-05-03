<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>
<body>
    <h1>Loops (ou laço de repetição</h1>
    <hr>

    <h2> While (enquanto)</h2>
<?php
 $i = 1;
while( $i <= 3){ // ou $i <4
?>
     <p> <?=$i?> </p>
<?php
    $i++; // atualizar a variavel de controle
}
?>






    <h2>do while/ (faça/enquanto</h2>
<?php
$j = 1;
do {
?>
    <div style="border:solid 1px">
        <h3>Exemplo <?=$j?></h3>
    </div>
<?php
    $j++;
} while($j <=5);
?>



<h2> for (para)</h2>
<?php
    //inicialização; condição; atualização
for( $i= 1; $i <=3; $i++){
?>
    <p>Valor de i é <b><?=$i?></b></p>
<?php
}
?>


<?php

$meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];

?>
<ol>
    <?php for($i = 0; $i <count($meses); $i++) {?>
        <!--ITENS LISTA DEPENDEM DO PHP FOR -->
    
        <li> <?=$meses[$i]?> </li>
        <?php } ?>
</ol>


<h2>Foreach (para cada)</h2>
<p>Loop exclusivo para Arrays</p>

<ol>
    <?php foreach($meses as $mes){ ?>
        <li><?=$mes?></li>
        <?php } ?>
    
</ol>

<?php
// Array associativa (formados por paredes de chave=>valor)
$curso= [
    // chave (key) => valor (value)
    "nome" => "Programador Web",
    "carga_horaria" =>240,
    "unidade" => "Penha",
    "ucs" => 5
];

foreach($curso as $dados => $valor ){
?>

<p> <?=$dados?> - <?=$valor?></p>

<?php
   }


?>


  





</body>
</html>