
<?php

class conexionaBD {
    //bariable o caracteristica
    //z servidor, usuario, contraseña , base de datos, conexion
    private $server;
    private $usuario;
    private $contraseña;
    private $db;
    public $conexion;

    //constructor
    public function __construct($server,$usuario,$contraseña,$db){
        $this->server=$server;
        $this->usuario=$usuario;
        $this->contraseña=$contraseña;
        $this->db=$db;
        $this->conexion=null;
    }

    //metodo

    public function conectar(){
            $this->conexion = new mysqli($this->server, $this->usuario, $this->contraseña, $this->db);
            if($this->conexion->connect_error){
                die("conexion a la base de datos mala".$this->conexion->connect_error);
            }else{
            //echo "conexion a la base de datos exitosa"
            }
    }

    public function desconectar(){
        if ($this->conexion === null) {
            
        }else {
            $this->conexion->close();
            echo "se serro la conexion";
        }

    }
}

$conexion = new conexionaBD('localhost','root','','venta_autos');

?>



