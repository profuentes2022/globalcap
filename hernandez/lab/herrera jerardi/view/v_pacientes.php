<?php
require_once("../controler/c_productos.php");
header("HTTP/1.1 200");
header('Contet-Type: application.json; charset=utf-8');

$produc=new producto();
$datos=array();


if($_SERVER['REQUEST_METHOD']=='POST'){
    echo $_POST['nom'];
    echo $_POST['can'];
    echo $_POST['pre'];
    $produc->setnombre($_POST['nom']);
    $produc->setcantidad($_POST['can']);
    $produc->setprecio($_POST['pre']);
    guardarProducto($produc);

}