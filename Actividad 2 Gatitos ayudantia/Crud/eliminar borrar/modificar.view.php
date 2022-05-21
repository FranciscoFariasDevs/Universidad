<?php
$id = $_GET["id"];
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar url</title>
</head>
<body style="display:flex;justify-content:center;align-items:center;flex-direction:column;  margin-top: 10%">
    
    <h2>Porfavor, inserte la nueva direccion </h2>

    <form action="modificar.php" method="POST" name="modificar" id="modificar">
        <div class="form-group">

            <input type="text" class="form-control" name="url" id="url" placeholder="Url" required/>

            <input type="hidden" name="id" value="<?php echo $id; ?>" >

            <input type="submit" value="Modificar">

        </div>
    </form>

</body>
</html>