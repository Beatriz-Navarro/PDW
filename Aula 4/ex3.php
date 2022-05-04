<?php
    echo("Qual é o seu nome e idade?");
    $nome = "Roberto";
    $idade = 26;
    if($idade >= 18)
        echo("<h3>$nome é maior de 18 e tem $idade anos</h3>");
    else
        echo("<h3>$nome é menor de 18 e tem $idade anos</h3>");

?>