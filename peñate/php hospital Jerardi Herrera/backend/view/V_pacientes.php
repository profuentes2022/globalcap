<?php
require_once("../controller/C_paciente.php");

//header("HTTP/1.1 200");
//header('Content-Type:aplication/json;charset=utf-8');

if($_SERVER['REQUEST_METHOD']=='POST'){
    echo("sí funciona");
    registrar($_POST['nombre'],$_POST['nit'],$_POST['edad'],$_POST['antecedentes'],$_POST['tipo_sangre'],$_POST['direccion'],$_POST['telefono'],$_POST['correo'],$_POST['lugar_trabajo'],$_POST['nombre_empresa'],$_POST['salario'],$_POST['enfermedad'],$_POST['padecimiento'],$_POST['dolencia'],$_POST['area_referida'],$_POST['medico'], $_POST['especialidad_medico'],$_POST['foto']);
}
if($_SERVER['REQUEST_METHOD']=='GET'){
  echo json_encode(mostrar()) ;
}





?>