<?php
/* $_SERVER ['PHP SELF'] -> Traz os dados completos do endereço basename ($_SERVER['PHP_SELF']) -> Traz os dados completos do endereço basename ($_SERVER ['PHP _SELF']) -> extrai apenas o nome da extensão*/
$pagina = basename($_SERVER['PHP_SELF']);
//echo $pagina;

/* Parte 2 : Condicional para avaliar qual página está aberto e definir qual titulo usar.*/
switch($pagina){
    case 'index.php': $titulo = "Pagina Inicial"; break;
    case 'produtos.php': $titulo = "Produtos"; break;
    case 'servicos.php': $titulo = "Serviços"; break;
    default: $titulo = "Contato"; break;

}

//echo $titulo;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Parte3 : colocar a variavel no titulo -->
    <title><?=$titulo?> - Site ABC</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Site ABC</h1>
        <nav>
             <a href="index.php"> Home </a>
             <a href="produtos.php"> Produtos </a>
             <a href="servicos.php"> Servicos </a>
             <a href="contato.php"> Contatos</a>
            
          
             
        </nav>
    </header>

    <main>