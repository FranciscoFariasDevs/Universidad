<?php

include ("../conexion/conexion.php");



$url = $_POST["imagen"];


$sqlInsert = ("INSERT INTO imagenes(id, url) VALUES (NULL,'".$url."') ");
$result = mysqli_query($con, $sqlInsert);

header("Location: ./agregar.view.php");



?>