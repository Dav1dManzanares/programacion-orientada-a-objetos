<?php
include_once('datos.php');
//aceptar pot el get en el id para el select que ocupa
$id = isset($_GET['id'])? $_GET['id']:"";

$conexion->conectar();

$registro = $gestion->selectupdate($id);
foreach($registro as $filas){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

<form action="datos.php" method="post">
    <label for="">Marca</label>
    <input type="text" name="bandera" value="2" hidden>
    <input type="text" name="ID" id="" value="<?php echo $filas['ID'];?>" hidden> <br>
    <input type="text" name="Marca" id="" value="<?php echo $filas['Marca'];?>">
    <label for="">Tipo</label> <br>
    <input type="text" name="Tipo" id="" value="<?php echo $filas['Tipo'];?>"> <br>
    <label for="">precio</label> <br>
    <input type="text" name="precio" id="" value="<?php echo $filas['precio'];?>"> <br>
    <label for="">Estado</label> <br>
    <input type="text" name="Estado" id="" value="<?php echo $filas['Estado'];?>"> <br><br>
    <input type="submit" value="Enviar">
</form>



<?php
}
?>
</body>
</html>
