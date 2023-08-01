<?php


echo $_FILES["foto"]["name"] . "<br>";
echo $_FILES["foto"]["size"] . "<br>";
echo $_FILES["foto"]["tmp_name"] . "<br>";
$url=uniqid() . $_FILES["foto"]["name"];
echo "medida: " . $_FILES["foto"]["size"]/1024/1024 . "mb" . "<br>";
copy($_FILES["foto"]["tmp_name"], "Fotos/" . $url);
echo $_POST['nombre'] . "<br>";
echo $_POST['nit'] . "<br>";
echo $_POST['edad'] . "<br>";
echo $_POST['antecedente'] . "<br>";
echo $_POST['TipoSangre'] . "<br>";
echo $_POST['direccion'] . "<br>";
echo $_POST['telefono'] . "<br>";
echo $_POST['correo'] . "<br>";
echo $_POST['LugTrabajo'] . "<br>";
//NomEmpresa, salario,enfermedad, padecimiento, dolencia, AreReferida, medico, EspMedico
echo $_POST['NomEmpresa'] . "<br>";
echo $_POST['salario'] . "<br>";
echo $_POST['enfermedad'] . "<br>";
echo $_POST['padecimiento'] . "<br>";
echo $_POST['dolencia'] . "<br>";
echo $_POST['AreReferida'] . "<br>";
echo $_POST['medico'] . "<br>";
echo $_POST['EspMedico'];
$con=mysqli_connect("localhost","root","","jerardi");
//$ins="INSERT INTO usuarios(usuario,correo,clave,rol,urls,tamaño) VALUES('$_POST[usuario]','$_POST[correo]','$_POST[clave]','A','$url'),'$_POST[tamaño]';";
$ins="INSERT INTO pacientes(nombre, nit, edad, antecedente, TipoSangre, foto, direccion, telefono, correo, LugTrabajo, NomEmpresa, salario,enfermedad, padecimiento, dolencia, AreReferida, medico, EspMedico) VALUES ($_POST[nombre]',$_POST[nit]',$_POST[edad]',$_POST[antecedente]',$_POST[TipoSangre]',$_POST[foto]',$_POST[dirrecion ]',$_POST[telefono]',$_POST[correo]',$_POST[LugTrabajo]',$_POST[NomEmpresa]',$_POST[salario]',$_POST[enfermedad]',$_POST[padecimiento]',$_POST[dolencia]',$_POST[AreReferida]',$_POST[medico]',$_POST[EspMedico]')";
mysqli_query($con,$ins);
header('location:index.html');
?>