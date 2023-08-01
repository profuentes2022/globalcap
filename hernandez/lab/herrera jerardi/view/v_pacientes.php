<?php
require_once("../controler/c_pacientes.php");
header("HTTP/1.1 200");
header('Contet-Type: application.json; charset=utf-8');

$pacient=new pacientes();
$datos=array();


if($_SERVER['REQUEST_METHOD']=='POST'){
    echo $_POST['nom'];
    echo $_POST['nit'];
    echo $_POST['edad'];
    echo $_POST['ante'];
    echo $_POST['tipos'];
    echo $_POST['direc'];
    echo $_POST['telef'];
    echo $_POST['corr'];
    echo $_POST['lugar'];
    echo $_POST['nompre'];
    echo $_POST['salar'];
    echo $_POST['enfer'];
    echo $_POST['pade'];
    echo $_POST['dolen'];
    echo $_POST['area'];
    echo $_POST['medic'];
    echo $_POST['espec'];

    $pacient->setnombre($_POST['nom']);
    $pacient->setnit($_POST['nit']);
    $pacient->setedad($_POST['edad']);
    $pacient->setantecedentes($_POST['ante']);
    $pacient->settipodesangre($_POST['tipos']);
    $pacient->setdireccion($_POST['direc']);
    $pacient->settelefono($_POST['telef']);
    $pacient->setcorreo($_POST['corr']);
    $pacient->setlugardetrabajo($_POST['lugar']);
    $pacient->setnombredeempresa($_POST['nompre']);
    $pacient->setsalario($_POST['salar']);
    $pacient->setenfermedad($_POST['enfer']);
    $pacient->setpadecimiento($_POST['pade']);
    $pacient->setdolencia($_POST['dolen']);
    $pacient->setarea($_POST['area']);
    $pacient->setmedico($_POST['medic']);
    $pacient->setespecialidad($_POST['espec']);
 
    guardarPaciente($pacient);

}