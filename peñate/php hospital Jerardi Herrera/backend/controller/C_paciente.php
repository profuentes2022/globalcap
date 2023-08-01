<?php
require_once("../model/conexion.php");
require_once("../model/paciente.php");

function registrar($nombre,$nit,$edad,$antecedentes,$tipo_sangre,$direccion,$telefono,$correo,$lugar_trabajo,$nombre_empresa,$salario,$enfermedad,$padecimiento,$dolencia,$area_referida,$medico, $especialidad_medico,$foto){
    $con = new conexion();
    $paciente1 = new paciente($nombre,$nit,$edad,$antecedentes,$tipo_sangre,$direccion,$telefono,$correo,$lugar_trabajo,$nombre_empresa,$salario,$enfermedad,$padecimiento,$dolencia,$area_referida,$medico, $especialidad_medico,$foto);

$con->conectar();

$con->enviar($paciente1->guardar());


 $con->desconectar();
}


function mostrar(){
    $con=new conexion();
    $paciente1= new paciente("","","","","","","","","","","","","","","","", "","");
    $con->conectar();
    $tabla=$con->extraer($paciente1->traer());
    while($fila=mysqli_fetch_array($tabla)){
        $datos[]=array(
            "nombre: "=>$fila['nombre'],
            "nit: "=>$fila['nit'],
            "edad: "=>$fila['edad'],
            "antecedentes: "=>$fila['antecedentes'],
            "tipo_sangre: "=>$fila['tipo_sangre'],
            "direccion: "=>$fila['direccion'],
            "telefono: "=>$fila['telefono'],
            "correo: "=>$fila['correo'],
            "lugar_trabajo: "=>$fila['lugar_trabajo'],
            "nombre_empresa: "=>$fila['nombre_empresa'],
            "salario: "=>$fila['salario'],
            "padecimiento: "=>$fila['padecimiento'],
            "enfermedad: "=>$fila['enfermedad'],
            "dolencia: "=>$fila['dolencia'],
            "area_referida: "=>$fila['area_referida'],
            "medico: "=>$fila['medico'],
            "especialidad_medico: "=>$fila['especialidad_medico'],
            "foto: "=>$fila['foto']
        );
        return $datos;
    }




}



?>