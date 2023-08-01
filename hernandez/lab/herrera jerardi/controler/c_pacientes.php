<?php
require_once("../model/coneccion.php");
require_once("../model/pancientes.php");

function guardarPaciente($paciente){
    $sql="INSERT INTO pacientes(nombre, nit, edad, antecedentes, tipodesangre, direccion, telefono, correo, lugardetrabajo, nombreempresa, salario, enfermedad, padecimiento, dolencia, areareferida, medico, especialidad) VALUES ('".$paciente->getnombre()."','".$paciente->getnit()."','".$paciente->getedad()."','".$paciente->getantecedentes()."','".$paciente->gettipodesangre()."','"<<user.direccion<<"','"<<user.telefono<<"','"<<user.correo<<"','"<<user.lugardetrabajo<<"','"<<user.nombreempresa<<"','"<<user.salario<<"','"<<user.enfermedad<<"','"<<user.padecimiento<<"','"<<user.dolencia<<"','"<<user.areareferida<<"')";

    $con=new conec();

    $con->conectar();
    $con->enviar($sql);
    $con->desconectar();
    
}

function extraerproducto($obproduto){
    $sql="select * from productos"

    $con=new conec();

    $con->conectar();
    $tabla=$con->enviar($sql);
    $con->desconectar();
    return $tabla;
}
?>