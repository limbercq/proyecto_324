<?php 
session_start();
if(empty($_SESSION['ci']) or empty($_SESSION['codhab'])){
	header("Location:motor.php?codFlujo=F1&codProceso=P2");
}
$ci=$_SESSION['ci'];

$codhab=$_SESSION['codhab'];

include ("conexion.php");
$sql = "SELECT * FROM habitacion WHERE codhabitacion = '$codhab'";
$registro =$base->query($sql)->fetchAll(PDO::FETCH_OBJ);

$a=$registro[0];
$a->tipo;
$a->costo;
$a->nro_camas;
$a->codhabitacion;

$sql1 = "SELECT * FROM usuario WHERE ci like '$ci'";
$registro1 =$base->query($sql1)->fetchAll(PDO::FETCH_OBJ);

$b=$registro1[0];
$b->nombre;
$b->apellido;

 ?>