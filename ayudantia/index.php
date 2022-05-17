<?php 
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "ayudantia";
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);


if(mysqli_connect_errno()){
    echo "Error al conectar a la base de datos";
}

$idImagen = 10;
$Consulta = $con->query("SELECT url FROM Imagenes where id = $idImagen");
$dato = $Consulta->fetch_assoc();
$Imagen = $dato["url"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Listar</title>
</head>
<body style="display:flex;justify-content:center;align-items:center; background:#000;flex-direction:column;  margin:0">
    <h1 style="color: white; margin:5px 0 0 0">Actividad Listar Gatitos</h1>
    <br>
    <table>
    <?php 
		$sql="SELECT * from imagenes";
		$result=mysqli_query($con,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
        <tr>
        <td style="color: white; margin:5px 0 0 0"><?php echo $mostrar['id'] ?></td>
        <td style="color: white; margin:5px 0 0 0"><?php echo $mostrar['url'] ?> </td>
        </tr>
        <?php 
	}
    ?>
    </table>
    <img src="<?php echo $Imagen ?>">
</body>
</html>