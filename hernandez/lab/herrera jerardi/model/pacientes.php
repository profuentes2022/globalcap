<?php

class pacientes{
    private $nombre;
    private $nit;
    private $edad;
    private $antecedentes;
    private $tiposangre;
    private $direccion;
    private $telefono;
    private $correo;
    private $lugartrabajo;
    private $nombreempresa;
    private $salario;
    private $enfermedad;
    private $padecimiento;
    private $dolencia;
    private $area;
    private $medico;
    private $especialidad;

    public function __construct(){
    }

    public function setnombre($nombre){
        $this->nombre=$nombre;
    }

    public function getnombre(){
        return $this->nombre;
    }


    public function setnit($nit){
        $this->nit=$nit;
    }

    public function getnit(){
        return $this->nit;
    }


    public function setedad($edad){
        $this->edad=$edad;
    }

    public function getedad(){
        return $this->edad;
    }


    public function setantecedentes($antecedentes){
        $this->antecedentes=$antecedentes;
    }

    public function getantecedentes(){
        return $this->antecedentes;
    }
    

    public function settipodesangre($tiposangre){
        $this->tiposangre=$tiposangre;
    }

    public function gettipodesangre(){
        return $this->tiposangre;
    }


    public function setdireccion($direccion){
        $this->direccion=$direccion;
    }

    public function getdireccion(){
        return $this->direccion;
    }

    public function settelefono($telefono){
        $this->telefono=$telefono;
    }

    public function gettelefono(){
        return $this->telefono;
    }

    public function setcorreo($correo){
        $this->nit=$correo;
    }

    public function getcorreo(){
        return $this->correo;
    }

    public function setlugardetrabajo($lugartrabajo){
        $this->lugartrabajo=$lugartrabajo;
    }

    public function getlugardetrabajo(){
        return $this->lugartrabajo;
    }

    public function setnombredeempresa($nombreempresa){
        $this->nombreempresa=$nombreempresa;
    }

    public function getnombreempresa(){
        return $this->nombreempresa;
    }

    public function setsalario($salario){
        $this->salario=$salario;
    }

    public function getsalario(){
        return $this->salario;
    }

    public function setenfermedad($enfermedad){
        $this->enfermedad=$enfermedad;
    }

    public function getenfermedad(){
        return $this->enfermedad;
    }

    public function setpadecimiento($padecimiento){
        $this->padecimiento=$padecimiento;
    }

    public function getpadecimiento(){
        return $this->padecimiento;
    }

    public function setdolencia($dolencia){
        $this->dolencia=$dolencia;
    }

    public function getdolencia(){
        return $this->dolencia;
    }

    public function setarea($area){
        $this->area=$area;
    }

    public function getarea(){
        return $this->area;
    }

    public function setmedico($medico){
        $this->medico=$medico;
    }

    public function getmedico(){
        return $this->medico;
    }

    public function setespecialidad($especialidad){
        $this->especialidad=$especialidad;
    }

    public function getespecialidad(){
        return $this->especialidad;
    }


}


?>