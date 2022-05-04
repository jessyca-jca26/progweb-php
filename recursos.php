<?php
const ESCOLA = "Senac";
$curso = "Programador Web";
$tecnologias = ["HTML", "css", "Javascript", "PHP"];

function verificaIdade(int $valor):string{
    if($valor >=18){
        return "maior";
} else {
    return "menor";
}

}

?>