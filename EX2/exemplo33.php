<html>
 <head>
  <title>Exemplo 33</title>
 </head>
 <body>
 <?php
	$nome = "IFSP";
	echo $nome;
	echo "<br/>";
	unset($nome);
	if(isset($nome)){
		echo $nome;
}
?>
 </body>
</html>
