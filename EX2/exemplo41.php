<html>
 <head>
  <title>Exemplo 41</title>
 </head>
 <body>
<?php

	$a=55.0;
	$b=55;
	// os valores são iguais mas 
	// os tipos são diferentes

	var_dump($a==$b);//verdadeiro
	echo "<br>";
	// compara o valor e o tipo de dado
	var_dump($a===$b);//falso

?>
 </body>
</html>
