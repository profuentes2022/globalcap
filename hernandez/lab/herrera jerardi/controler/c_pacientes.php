<?php
require_once("../model/coneccion.php");
require_once("../model/pacientes.php");

function guardarPaciente($paciente){
    $sql="INSERT INTO pacientes(nombre, nit, edad, antecedentes, tipodesangre, direccion, telefono, correo, lugardetrabajo, nombreempresa, salario, enfermedad, padecimiento, dolencia, areareferida, medico, especialidad) VALUES ('".$paciente->getnombre()."','".$paciente->getnit()."','".$paciente->getedad()."','".$paciente->getantecedentes()."','".$paciente->gettipodesangre()."','".$paciente->getdireccion()."','".$paciente->gettelefono()."','".$paciente->getcorreo()."','".$paciente->getlugardetrabajo()."','".$paciente->getnombreempresa()."','".$paciente->getsalario()."','".$paciente->getenfermedad()."','".$paciente->getpadecimiento()."','".$paciente->getdolencia()."','".$paciente->getarea()."','".$paciente->getmedico()."','".$paciente->getespecialidad()."')";

    $con=new conec();

    $con->conectar();
    $con->enviar($sql);
    $con->desconectar();
    
}