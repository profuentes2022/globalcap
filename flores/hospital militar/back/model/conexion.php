<?php
class conexion{
    private $servidor;
    private $usuario;
    private $clave;
    private $db;
    private $estado;

    public function __construct(){
        $this->servidor="localhost";
        $this->usuario="root";
        $this->clave="";
        $this->db="militar";
    }

    public function conectar(){
        $this->estado=mysqli_connect(
            $this->servidor,
            $this->usuario,
            $this->clave,
            $this->db
        );


    }


    public function enviar($sql){
        mysqli_query($this->estado,$sql);
        return true;
    }

    public function extraer($sql){
      $tabla=mysqli_query($this->estado,$sql);
      return $tabla;
        }

        
        public function desconectar(){
            mysqli_close($this->estado);
            return true;
        }

}

$conect=new conexion();
$conect->conectar();


?>