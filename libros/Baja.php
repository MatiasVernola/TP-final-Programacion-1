<html>
<title>Biblioteca</title>

<head>
	
	<style>
		body
		{background-image: url("foto.jpg");
         background-size: cover;
	     }

	</style>
</head>
</html>
<?php
include("conexion.php");

if($_GET) {
    $f_titulo = $_GET['titulo'];
         
    $sql = "DELETE FROM libros WHERE titulo='$f_titulo'";
    if($conn->query($sql) === TRUE) {
        echo "<em><p>Registro borrado</p></em>";
        echo "<a href='index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
 
    $conn->close();
}
?>