<?php

class conec{
    private $host;
    private $usuario;
    private $clave;
    private $dbda;
    private $con;




    public function __construct(){
        $this->host="localhost";
        $this->usuario="root";
        $this->clave="";
        $this->dbda="generalpacientes";
    }

    public function conectar(){
        $this->con=mysqli_connect(
            $this->host,
            $this->usuario,
            $this->clave,
            $this->dbda
        );
    }
    
    
    //insert delete enviar 
    
    public function enviar($sql){
        mysqli_query($this->con,$sql);
    }
    
    
    public function extraer($sql){
        $tabla=mysqli_query($sql,$this->con);
        return $tabla; 
    }
    
    public function desconectar(){
        mysqli_close($this->con);
    }
    
}



?>