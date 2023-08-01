<?php

class paciente{
    private $nombre;
    private $nit;
    private $edad;
    private $antecedentes;
    private $tipo_sangre;
    private $direccion;
    private $telefono;
    private $correo;
    private $lugar_trabajo;
    private $nombre_empresa;
    private $salario;
    private $enfermedad;
    private $padecimiento;
    private $dolencia;
    private $area_referida;
    private $medico;
    private $especialidad_medico;
    private $foto;

    
    public function __construct($nombre,$nit,$edad,$antecedentes,$tipo_sangre,$direccion,$telefono,$correo,$lugar_trabajo,$nombre_empresa,$salario,$enfermedad,$padecimiento,$dolencia,$area_referida,$medico, $especialidad_medico,$foto){

        $this->nombre=$nombre;
        $this->nit= $nit ;
        $this->edad =  $edad ;
        $this->antecedentes =$antecedentes;
        $this->tipo_sangre =   $tipo_sangre ;
        $this->direccion =     $direccion ;
        $this->telefono =      $telefono ;
        $this->correo =       $correo ;
        $this->lugar_trabajo =         $lugar_trabajo ;
        $this->nombre_empresa =          $nombre_empresa ;
        $this->salario =           $salario ;
        $this->enfermedad =            $enfermedad ;
        $this->padecimiento =             $padecimiento ;
        $this->dolencia =                  $dolencia ;
        $this->area_referida =               $area_referida ;
        $this->medico =                    $medico ;
        $this->especialidad_medico =              $especialidad_medico ;
        $this->foto =                $foto ;

    }


    public function guardar(){
        return "INSERT INTO pacientes(nombre, nit, edad, antecedentes, tipo_sangre, direccion, telefono, correo, lugar_trabajo, nombre_empresa, salario, enfermedad, padecimiento, dolencia, area_referida, medico, especialidad_medico, foto) VALUES('$this->nombre','$this->nit','$this->edad','$this->antecedentes','$this->tipo_sangre','$this->direccion','$this->telefono','$this->correo','$this->lugar_trabajo','$this->nombre_empresa','$this->salario','$this->enfermedad','$this->padecimiento','$this->dolencia','$this->area_referida','$this->medico','$this->especialidad_medico','$this->foto')";
    }

    public function traer(){
        return "SELECT * FROM pacientes";
    }


}



?>