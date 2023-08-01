<?php
class pacientes{
private $nombre;
private $nit;
private $edad;
private $atecedente;
private $tipo;
private $direcion;
private $telefono:
private $correo;
private $lugar;
private $empresa;
private $salario;
private $enfermedad;
private $padecimiento;
private $dolecia;
private $referencia;
private $medico;
private $especialidad;


public function __construct($nom,$dpi,$cor,$enf,$ed){
$this->nombre=$nom;
$this->nit=$nit;
$this->edad=$ed;
$this->atececedentes=$at;
$this->tipo=$tip;
$this->direcion=$dire;
$this->telefono=$tele;
$this->correo=$cor;
$this->lugar=$luga;
$this->empresa=$empresa;
$this->salario=$sal;
$this->enfermedad=$enf;
$this->padecimiento=$paci;
$this->dolencia=$dolo;
$this->referencia=$refe;
$this->medico=$medico;
$this->especialidad=$espe;


}

public function guardar(){
    return "INSERT INTO pacientes (nombre, nit, edad, atecedentes, tipo, direcion, telefono, correo, lugar, empresa, salario, enfermedad, padecimiento, dolecia, referencia, medico, especialidad ) VALUES ('$this->nombre','$this->nit','$this->edad','$this->atececedentes','$this->tipo','$this->direcion','$this->telefono','$this->correo','$this->empresa','$this->salario','$this->enfermedad','$this->padecimiento','$this->dolencia','$this->referencia','$this->medico','$this->especialidad' )";
}

public function consultar(){
    return "select * from pacientes";
}


}


?>