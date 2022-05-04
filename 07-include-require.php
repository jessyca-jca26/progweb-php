<?php include "recursos.php";?>
<!DOCTYPE html>
<html lang="pt br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de recursos</title>
</head>
<body>
    <h1>Inclusão de recursos</h1>
    <hr>





<h2><?=ESCOLA?></h2>
<p>Estamos no curso de <?=$curso?></p>


<ul>
    <?php foreach ($tecnologias as $tecnologia){ ?>
        <li><?=$tecnologia?></li>
        <?php }?>
    
    
    </ul>

    <p>Chapolin colorado tem 20 anos e é
    <b>  <?=verificaIdade(20)?> </b> de idade </p>

    <p>Chaves tem 8 anos e é
    <b><?=verificaIdade(8)?></b> de idade </p>

    <hr>

    <article>
        <h2>Conteudo qualquer ...</h2>
        <?php require "textos.php"?>
    </article>



    <hr>

    <h2>Qualquer outra coisa</h2>
    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, exercitationem laudantium. Deleniti magni in reiciendis tempora dolore totam saepe beatae, autem, harum pariatur magnam nesciunt maiores eaque id nulla? Aliquid.</p>

</body>
</html>