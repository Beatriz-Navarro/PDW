<html>
     <head>
         <meta charset="UTF-8">
         <title>Página principal</title>
     </head>
     <body>
     <?php
             if($_GET['num'] == 0){
                 echo ("<h3> Igual a Zero </h3>");
             }
             else if($_GET['num'] > 0){
                 echo ("<h3> Valor Positivo </h3>");
             }
             else{
                 echo ("<h3> Valor Negativo </h3>");
             }
         ?>
         <h1>Digite um número</h1>
         <form method="get">
             <input type="number" name="num" placeholder="Digite algo">
             <input type="submit" value="Submeter">
         </form>
     </body>
 </html>