<?php

include ("../conexion/conexion.php");

$id = $_GET["id"];

$sqlDelete = ("DELETE FROM imagenes WHERE  id='" .$id. "'");
$result = mysqli_query($con, $sqlDelete);

header("Location: index.php");

?>