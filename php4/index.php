<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>


    <!-- <h1>Bienvenidos/as</h1> -->
    <a href="registrar.php ">registro</a>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Tipo</th>
                <th>precio</th>
                <th>Estado</th>
                <th>MODIFICAR/ELIMIANR</th>
            </tr>
           
<?php
include_once('datos.php');
$conexion->conectar();
$registro = $gestion->select();
foreach($registro as $filas){
//ejecuto procesos de servidor
    // $consulta = "SELECT * FROM registros";
    // $ejecutar_consulta = $conexion->conexion->query($consulta);
    // while ($filas=mysqli_fetch_row($ejecutar_consulta)){
    echo "<tr>";
        echo"<td>".$filas['ID']."</td>";
        echo"<td>".$filas['Marca']."</td>";
        echo"<td>".$filas['Tipo']."</td>";
        echo"<td>".$filas['precio']."</td>";
        echo"<td>".$filas['Estado']."</td>";

        

        //agregar las columnas de modificar y eliminar
        echo "<td><a href = 'modificar.php?id=".$filas['ID']."'>Modificar</a>
        <a href = 'datos.php?iddelete=".$filas['ID']."&banderaE=3'>Eliminar</a>
        </td>";
        echo"</tr>";
    //}
}
    //$conexion->desconectar()


    

 ?>
 </table>
<br>
<br>
<br>
<br>
<br>
 <img src="img/e56eszmkzzfgbcksqxvgqhwayu.webp_557383645.webp" alt="" height="160" width="200" sizes="" srcset="">


</body>
</html>

