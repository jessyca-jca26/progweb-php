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

    <h2>Exercicio Array e Loop</h2>


<?php
$meses = ["Janeiro", "feveiro", "Março", "abril", "maio", "junho", "julho", "agosto", "setembro", "outubro", "novembro", "dezembro"];

?>
 <h3>Acessando</h3>
    <ul>
        <li> <?=$ano[0]?> </li>
        <li> <?=$ano[2]?></li>
        <li> <?=$ano[3]?></li>
        <li> <?=$ano[4]?></li>
        <li> <?=$ano[5]?></li>
        <li> <?=$ano[6]?></li>
        <li> <?=$ano[7]?></li>
        <li> <?=$ano[8]?></li>
        <li> <?=$ano[9]?></li>
        <li> <?=$ano[10]?></li>
        <li> <?=$ano[11]?></li>
        <li> <?=$ano[12]?></li>
        
        

    </ul>



</body>
</html>