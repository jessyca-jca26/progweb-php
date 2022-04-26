<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>
<body>
    <h1>Usando Variavéis ou constantes</h1>
    <hr>

    <?php
    $data =26/04/2022;
    $nome = "Jessica"; 
    $idade = 26;
    $cidade = "São Paulo";

    echo "<p>$data</p>";
    echo "<div>$nome</div>";
    echo "<p><b>$idade<b/></p>";
    echo "<p>"$cidade"</p>";

    <?>

    <p>
    
    hoje é <?=$data?>
    fulano <?=$nome?> tem <?=$idade?> e mora em <?=$cidade?>

    </p>

   
   




</body>
</html>