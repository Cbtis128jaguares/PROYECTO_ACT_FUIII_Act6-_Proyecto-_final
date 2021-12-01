<?php
include("conexion.php");
$con=conectar();

$id_articulo=$_POST['id_articulo'];
$precio=$_POST['precio'];
$tipo_articulo=$_POST['tipo_articulo'];
$tipo_gasolina=$_POST['tipo_gasolina'];
$distribuidor=$_POST['distribuidor'];
$ciudad=$_POST['ciudad'];
$sucursal=$_POST['sucursal'];
$codigo=$_POST['codigo'];

$sql = "UPDATE `articulos` SET `id_articulo`='$id_articulo',`precio`='$precio',`tipo_articulo`='$tipo_articulo',`tipo_gasolina`='$tipo_gasolina',`distribuidor`='$distribuidor',`ciudad`='$ciudad',`sucursal`='$sucursal' WHERE codigo = '$codigo'";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: articulos.php");
} else {

}
?>