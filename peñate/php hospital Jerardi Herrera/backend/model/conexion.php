<?php

class conexion{
    private $host;
    private $usuario;
    private $clave;
    private $dbdatos;
    private $con;

    public function __construct(){
        $this->host="localhost";
        $this->usuario="root";
        $this->clave="";
        $this->dbdatos="hospital_jerardi_herrera";
    }

    public function conectar(){
      $this->con=mysqli_connect(
        $this->host,
        $this->usuario,
        $this->clave,
        $this->dbdatos
      );

    return true;
}

public function enviar($sql){
mysqli_query($this->con,$sql);
return true;
}

public function extraer($sql){
    $tabla=mysqli_query($this->con,$sql);
    return $tabla;
}

public function desconectar(){
    mysqli_close($this->con);
    return true;
}


}
?>