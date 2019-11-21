<html>
<title>Biblioteca</title>

<head>
  <style>
body 
 {
  background-image: url("foto.jpg");
  background-size: cover;
 }
 </style>
</head>
</html>

<?php
include("conexion.php");

if($_GET) {
    $f_titulo = $_COOKIE['titulo'];
    $f_autor = $_GET['autor'];
     $f_precio = $_GET['precio'];
      $f_cantidad = $_GET['cantidad'];
       $f_genero = $_GET['genero'];
       
// Query de actualización de la tabla         
    $sql = "UPDATE libros SET autor='$f_autor', precio='$f_precio', cantidad='$f_cantidad',genero='$f_genero' WHERE titulo='$f_titulo'";
    if($conn->query($sql) === TRUE) {
        echo "<em><p>Registro ACTUALIZADO</p></em>";
        echo "<a href='index.php'><button type='button'>VOLVER</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->connect_error;
    }
    
    $conn->close();
}
?>