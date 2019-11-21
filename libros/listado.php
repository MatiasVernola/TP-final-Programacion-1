<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../icono.ico">

    <title>Biblioteca</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/floating-labels.css" rel="stylesheet">

  </head>


  <style>
   
    th 
    {
      color:green;
      background-color: orange;
    }
    td {color:black;}
    table,th,td 
    {
     border: 10px solid black;
    text-align: center;
    }
    </style>  

  <body>

    <header>
    	<?php
        include "componentes/menu.php";
    ?>
    </header>

    <!-- Begin page content -->
    <main role="main" class="container">
         
    



        <table style="width:100%">

         <tr>
              <th>Autor</th>
              <th>Titulo</th>
            	<th>Precio</th>
              <th>Genero</th>
              <th>Cantidad</th>

            </tr>

<?php
include("conexion.php");
$f_autor=$_COOKIE['autor'];
//$resultados = mysqli_query($conn,'SELECT * FROM autor WHERE titulo='.$f_autor);
$query= 'SELECT * FROM libros WHERE autor="'.$f_autor.'"';
  $resultados= mysqli_query($conn,$query);
$suma=0;
$sumatotal=0;
$total=0;
while($fila = mysqli_fetch_array($resultados)){
	echo "<tr>";
	echo "<td>";
	echo $fila['autor'];
	echo "</td>";
	echo "<td>";
	echo $fila['titulo'];
	echo "</td>";
	echo "<td>";
	echo $fila['precio'];
	echo "</td>";
	echo "<td>";
	echo $fila['genero'];
	echo "</td>";
	echo "<td>";
	echo $fila['cantidad'];
	echo "</td>";
	$suma=$fila['precio']*$fila['cantidad'];
echo"<tr><td>Subtotal</td><td>"."$".$suma."</td></tr>";
$total=$total+$suma;
echo"<tr><td>Total</td><td>"."$".$total."</td></tr>";
}
echo "</table>";
echo "<br>";
 $conn->close();
?>

 </main>
      
     <footer class="footer">
    <?php
       // include "componentes/pie.php";
    ?>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" cAlumnorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>