<?php

include ("../conexion/conexion.php");




$id = $_POST["id"];
$url = $_POST["url"];

$sqlUpdate = ("UPDATE imagenes SET url='$url' WHERE  id='" .$id. "'");
$result = mysqli_query($con, $sqlUpdate);
// 
header("Location: index.php");

?>