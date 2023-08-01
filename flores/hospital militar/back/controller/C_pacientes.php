<?php

require_once("../model/conexion.php");
require_once("../model/cepaciente.php");
function registrarPaciente($nom,$dpi,$cor,$enf,$ed){
  $persona=new pacientes($nom,$dpi,$cor,$enf,$ed);
  $con=new conexion();
  $con->conectar();
  $con->enviar($persona->guardar());
 $con->desconectar();
}

function mostrar(){
    $persona=new pacientes("","","","","","","","","","","","","","","","","");
    $con=new conexion();
    $con->conectar();
    $tabla= $con->extraer($persona->consultar());
    
    while($fila=mysqli_fetch_array($tabla)){
        $datos[]=array
        (
            "id"=>$fila['id'],
            "nombre"=>$fila['nombre'],
            "nit"=>$fila['nit'],
            "edad"=>$fila['edad'],
            "antecedentes"=>$fila['atecedentes'],
            "tipo"=>$fila['tipo'],
            "direcion"=>$fila['direcion'],
            "telefono"=>$fila['telefono'],
            "correo"=>$fila['correo'],
            "lugar"=>$fila['lugar'],
            "empresa"=>$fila['empresa'],
            "salario"=>$fila['salario'],
            "enfermedad"=>$fila['enfermedad'],
            "paciente"=>$fila['paciente'],
            "dolencia"=>$fila['dolencia'],
            "referencia"=>$fila['referencia'],
            "medico"=>$fila['medico'],
            "especilidad"=>$fila['especilidad'],
        );
        
    }

    return $datos;
}

?>