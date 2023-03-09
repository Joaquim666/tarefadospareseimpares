 
<html>
 <head>
  <title>Apostila PHP Progressivo</title>
 </head>
 <body>
 <form action="" method="get">
  Coloque um número:  <input type="number" name="number" /><br />
  <input type="submit" name="submit" value="Testar" />
 </form>
 <?php 
  $numero = $_GET['number'];

  if($numero % 2 == 1)
   echo "$numero é ímpar";
  else
   echo "$numero é par";
 ?>
 </body>
</html>