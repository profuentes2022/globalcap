<?php


function guardar($sql){
    echo $sql;
    $con=mysqli_connect("localhost","root","","jerard");
    mysqli_query($con,$sql);
    mysqli_close($con);
}


function conusultar($sql){
    $con=mysqli_connect("localhost","root","","jerard");
   $tabla= mysqli_query($con,$sql);
   mysqli_close($con);
   return $tabla;
}



?>
