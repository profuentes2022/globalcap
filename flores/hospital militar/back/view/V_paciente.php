<?php
require_once("../controller/c_pacientes.php");

header("HTTP/1.1 200");
header('Content-Type: application/json; charset=utf-8');

if($_SERVER['REQUEST_METHOD']=='POST'){
    echo "nombre" . $_POST['nom'] . "<br>";

    echo "nit: " . $_POST['nit'] . "<br>";

    echo "edad" . $_POST['ed'] . "<br>";

    echo "antecedente" .$_POST['at'] . "<br>";

    echo "tipo" . $_POST['tip'] . "<br>";

    echo "direcion" .$_POST['dire'] . "<br>";

    echo "telefono" .$_post['tele'] . "<br>";

    echo "correo" . $_POST['cor'] . "<br>";

    echo "lugar" . $_POST['luga'] . "<br>";

    echo "empresa" . $_POST['empresa'] . "<br>";

    echo "salario" . $_POST['sal'] . "<br>";

    echo "enfermedad" . $_POST['enf'] . "<br>";

    echo "paciente" . $_POST['paci'] . "<br>";

    echo "dolecia" . $_POST['dolo'] . "<br>";

    echo "referecia" . $_POST['refe'] . "<br>";

    echo "medico" . $_POST['medico'] . "<br>";


    echo "especialidad" . $_POST['espe'] . "<br>";

    registrarPaciente($_POST['nom'],$_POST['nit'],$_POST['ed'],$_POST['at'],$_POST['tip'],$_POST['dire'],$_POST['tele'],$_POST['cor'],$_POST['luga'],$_POST['nome'],$_POST['sal'],$_POST['enf'],$_POST['paci'],$_POST['dolo'],$_POST['refe'],$_POST['medico']);

}


if($_SERVER['REQUEST_METHOD']=='GET'){
echo json_encode(mostrar());
}






?>