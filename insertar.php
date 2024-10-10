<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$cantidad=$_POST['cantidad'];


$sql="INSERT INTO inventario VALUES('?','$nombre','$precio','$cantidad')"; 
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: inventario.php");
    
}else {
}
?>