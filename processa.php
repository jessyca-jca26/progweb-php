<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>

<body>
    <h1>Processamento de dados </h1>
    <hr>


<?php
if(empty($_POST["nome"])|| empty($_POST["email"]) ){
?>
    <p style="color: red;"> Por favor preencha nome e e-mail </p>
    <p><a href="08-formulario.html">Voltar</a></p>
<?php
} else {


/*echo "<prev>";
var_dump($_POST);
echo "</prev>";*/

// Capturando os dados enviado apartir do formulário
$nome  = $_POST ["nome"];
$email  = $_POST ["email"];
$idade  = $_POST ["idade"];

/*Se existir o $_POST['INTERESSES'], o que foi selecionado fica na variavél. Caso contrário, deixe um array vazio na variavél.

?? Operador de coalescencia nula*/

$interesses  = $_POST ["interesses"] ??[];
$informativos = $_POST ["informativos"];
$mensagem  = $_POST ["mensagem"];
?>

<h2>Dados:</h2>

<ul>
    <li>Nome:<?=$nome?></li>
    <li>E-mail:<?=$email?></li>
    <li>Idade:<?=$idade?></li>

    <!-- Se interesses NÃO ESTIVER VAZIO -->
    <?php if (!empty($interesses)){?>
        <!-- Então, faça tudo abaixo: -->
    <li>Interesses:
        <ul>
        <?php foreach ($interesses as $interesse){?>
            <li> <?=$interesse?> </li>
            <?php } ?>
        </ul>
    </li>
    <?php } ?>


    <li>Informativos:<?=$informativos?></li>
    <li>Mensagem:<?=$mensagem?></li>
</ul>

<?php } // fim do Else ?>

</body>
</html>