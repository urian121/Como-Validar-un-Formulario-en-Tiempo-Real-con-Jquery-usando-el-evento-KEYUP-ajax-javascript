
<?php
require("config.php");
$nombre        = ucwords($_REQUEST['nombre']); //ucwords para convertir la 1 letra mayuscula
$cedula        = $_REQUEST['cedula'];
$correo        = $_REQUEST['correo']; 
$celular       = $_REQUEST['celular'];


$InsertCliente = "INSERT INTO clientes(
      nombre,
      cedula,
      correo,
      celular
      )
    VALUES (
      '" .$nombre. "',
      '". $cedula."',
      '" .$correo. "',
      '" .$celular. "'
  )";
$resultadoCliente = mysqli_query($con, $InsertCliente);

?>