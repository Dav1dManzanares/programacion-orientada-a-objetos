<?php
$bandera = isset($_POST['bandera'])? $_POST['bandera']:"";
$banderaE = isset($_GET['banderaE'])? $_GET['banderaE']:"";
$Marca = isset($_POST['Marca']) ? $_POST['Marca']:"";
$Tipo = isset($_POST['Tipo']) ? $_POST['Tipo']:"";
$precio = isset($_POST['precio']) ? $_POST['precio']:"";
$Estado = isset($_POST['Estado']) ? $_POST['Estado']:"";
$ids = isset($_POST['ID'])? $_POST['ID']:"";
$idd = isset($_GET['iddelete'])? $_GET['iddelete']:"";

include_once ('conf/conf.php');

class registros {
    public $conexion;
    public function __construct($conexion){
        $this->conexion = $conexion;
    }
    public function select(){
        $consultaSelect = "SELECT * FROM registro";
        $ejecutar_consulta = $this->conexion->conexion->query($consultaSelect);
        return $ejecutar_consulta->fetch_all(MYSQLI_ASSOC);
    }

    public function insert($datos){
        $campos = implode(',', array_keys($datos));
        var_dump($campos);
        $valores = "'".implode("','", array_values($datos))."'";
        var_dump($valores);
        $consulta_insertar = "INSERT INTO registro ($campos) VALUES ($valores)";
        var_dump($consulta_insertar);
        $resultado = $this->conexion->conexion->query($consulta_insertar);
        if ($resultado){
            return true;
        }else{
            $this->conexion->conexion->error;
        }
    }
    

    //metodo de seleccion para update
    public function selectupdate($ID){
        $consultaSelect = "SELECT * FROM registro WHERE ID='$ID'";
        $ejecutar_consulta = $this->conexion->conexion->query($consultaSelect);
        return $ejecutar_consulta->fetch_all(MYSQLI_ASSOC);
    }
    //metodo update
    public function update($id, $datos){
        $set = [];
        foreach ($datos as $campo => $valor){
            $set[] = "$campo = '$valor'";
        }
        $set = implode(',', $set);
        $consulta_actualizar = "UPDATE registro SET $set WHERE ID ='$id'";
        $resultado = $this->conexion->conexion->query($consulta_actualizar);
        if($resultado){
            return true;
        }else{
            return $this->conexion->conexion->error;
        }
    }

    

    //netodo de eliminacion
    public function delete($id){
        $consultadelete = "DELETE FROM registro WHERE ID=$id";
        $ejecutar_delete = $this->conexion->conexion->query($consultadelete);
        return $ejecutar_delete;
    }
}

$gestion = new registros($conexion);
if($bandera == 1){
    $datosInsert = array('Marca' => $Marca, 'precio' => $precio, 'Tipo' => $Tipo, 'Estado' => $Estado);
    $conexion->conectar();
    $prueba=$gestion->insert($datosInsert);
    if($prueba){
        header('location:index.php');
    }
}else if ($bandera == 2){
    $id = $ids;
    $datosUpdate = array('Marca' => $Marca, 'precio' => $precio, 'Tipo' => $Tipo, 'Estado' => $Estado);
    $conexion->conectar();
    $prueba = $gestion->update($id, $datosUpdate);

    if ($prueba){
        header('location:index.php');
    }
}else if($banderaE==3){
    $conexion->conectar();
    $prueba= $gestion->delete($idd);
    if($prueba) {
        header("location: index.php");
    
    }
}
?>