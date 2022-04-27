<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios</title>
</head>
<body>
    <h1>Exercicios usando Arrays</h1>
    <hr>





<?php
$identidade= [
    "nome" => "Jessica",
    "idade" =>26,
    "email" => "jessyca.jca@hotmail.com",
    "sexo" => "feminino"
];
?>

<h3>Acessando os dados</h3>
    <p>
        A identidade da <?=$identidade["nome"]?> tem 
        <?=$identidade["idade"]?> seu email é <?=$identidade["email"]?> e o seu sexo é <?=$identidade["sexo"]?>

    </p>



<!-- 2°Array -->
<?php
$perfil= [
    "nome" => "Marcelo",
    "idade" =>35,
    "email" => "marcelo.cicero@hotmail.com",
    "sexo" => "masculino"

];
?>
<h3>Acessando os dados</h3>
    <p>
        O perfil do profissional <?=$perfil["nome"]?> consta que ele tem 
        <?=$perfil["idade"]?>  e o seu email é <?=$perfil["email"]?> e o seu sexo é <?=$perfil["sexo"]?>

    </p>


</body>
</html>