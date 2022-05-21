<?php

include ("../conexion/conexion.php");

$idImagen = 9;
$Consulta = $con->query("SELECT url FROM imagenes where id = $idImagen");
$dato = $Consulta->fetch_assoc();
$Imagen = $dato["url"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Gatitos</title>
</head>
<body style="display:flex;justify-content:center;align-items:center; background:#000;flex-direction:column;  margin:0">

<h1 style="color: white; margin:5px 0 0 0">Actividad 2 Listar Gatitos</h1>


    <table id="tabla" style="background-color: #fff; width: 300px; border: 1px solid #000;  " >
        <thead>
            <tr class="text-center">
                <th style="  border: 1px solid #000;">ID</th>
                <th style="  border: 1px solid #000;">URL</th>
                <th style="  border: 1px solid #000;">Eliminar</th> 
                <th style="  border: 1px solid #000;">Modificar</th>          
            </tr>
        </thead>
                
        <tbody>
            <?php 
                $result = $con->query("SELECT * FROM imagenes");
                while( $data = mysqli_fetch_array($result)){
            ?>
            <tr align="center">
                <td ><?php  echo $data["id"];?></td>
                <td ><?php  echo $data["url"];?></td> 
                <td> <a href="eliminar.php?id=<?php echo $data["id"] ?>">eliminar</a></td>
                <td> <a href="modificar.view.php?id=<?php echo $data["id"] ?>" >modificar</a></td>   
            </tr>
            <?php   }  ?>
        </tbody>
    </table>
      

    <img src="<?php echo $Imagen ?>">
    


    
</body>
</html>