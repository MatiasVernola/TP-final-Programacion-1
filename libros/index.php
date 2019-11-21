<!
<?php
include("conexion.php");

$resultados = mysqli_query($conn,'SELECT * FROM libros');


// Podemos ejecutar cualquier consulta SQL, por ejemplo para ingresar usuarios en una base de datos.
echo "<table border='2'>";
echo "<tr>";
echo "<th>Autor</th>";
echo "<th>Titulo</th>";
echo "<th>Precio</th>";
echo "<th>Genero</th>";
echo "<th>Cantidad</th>";
echo "</tr>";
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








	echo "<td>";
	//Boton editar

    echo "<a href='FormEditar.php?titulo=".$fila['titulo']."'><img src='editar.png'></a>";
    echo "</td>";
	echo "</tr>";
}
echo "</table>";
 $conn->close();
?>

<HTML>

<title>Biblioteca</title>

<head>
  <style>
body 
 {
  background-image: url("foto.jpg");
  background-size: cover;
 }

th
{
  color:black;
  background-color:lightblue;
}
td {color:black;}
table,th,td
{
  border: 3px solid black;
  text-align: center;
}

</style>
</head>
<Body>

</tr>
<Script>
function listado() {
var x = document.getElementById("autor").value;
document.cookie = "autor=" + x;
window.location.assign("listado.php")
}

</Script>


<br>
<table style="width: 80%">
<tr>
<td>
<button type="button" onclick="document.getElementById('FormAlta').style.display='block'"><img src="Alta.PNG"></button>

<!--<a href="FormAlta.HTML"><img src="ALTA.PNG"></a> -->
</td>
<td>

<button type="button" onclick="document.getElementById('FormBaja').style.display='block'"><img src="BAJA.PNG"></button>
</td>
</tr>




<!-- Input y botón para autores -->
<tr>
<td>
<br><input id="autor">
</td>
<td>
<br><button type="button" onclick="listado()" >Listar Autor</button>
</td>
</tr>
</table>

<!-- Formulario debaja, que está oculto hasta que lo habilito con el botón -->
<DIV id="FormBaja" style="display:none">
<h2>BAJA</h2>

<form action="Baja.php"  metod="get">
  Titulo:<br>
  <input type="text" name="titulo" value="">
  <br>
  <input type="submit" value="Ejecutar BAJA">
</form> 
</DIV>

<DIV id="FormAlta" style="display:none">
<h2>Alta</h2>
<form action="Alta.php"  metod="get">
  Autor<br>
  <input type="text" name="autor" value="">
  <br>
  Titulo:<br>
  <input type="text" name="titulo" value="">
  <br><br>
  Precio:<br>
  <input type="text" name="precio" value="">
  <br><br>
  Genero:<br>
  <input type="text" name="genero" value="">
  <br><br>
  Cantidad:<br>
  <input type="text" name="cantidad" value="">
  <br><br>







  <input type="submit" value="ALTA">
</form> 

</DIV>
</Body>
</HTML>




<!-- <a href="FormBaja.HTML"><img src="baja.PNG"></a> -->
-->




