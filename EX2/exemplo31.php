<html>
 <head>
  <title>Exemplo 31</title>
 </head>
 <body>
 <?php
$nome = "Floriano"; 	        //string
$site = 'https://www.linkedin.com/in/floriano-ferreira-dos-reis-filho-1b289810'; //string
$ano = 2021;	            	//inteiro
$salario_para_estagio = 3500.99;//ponto flutuante
$bloqueado = false;         	//booleano
$frutas = array("amora", "mirtilo", "caju"); //array
echo $frutas[2]; //exibe a fruta que está na posição 2
$nascimento = new DateTime(); // new = orientação a objeto
var_dump($nascimento); // mostra o tipo de dado da var
//resource é um tipo  usado para vários propósitos 
//como fazer conexões com banco de dados, abrir/manipular 
//arquivos ou ainda trabalhar com streams.
$arquivo = fopen("exemplo31.php", "r"); //abre o arquivo
var_dump($arquivo); // mostra o tipo de dado da variável
$nulo = null; //ausência de valor
//diferença entre nulo e vazio: 
//v (vazio) foi inicializado  mas não tem nada dentro
//foi reservado um espaço na memória, mas está vazio.
//n (nulo) ausência de valor
?>
 </body>
</html>
