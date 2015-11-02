<?php
$claveEnviada = $_GET['clave'];
$resultados = array();
$conexion = mysqli_connect('localhost','u858464654_fer','w9w9dorotea','u858464654_bdrem');
$q = "delete from usuarios where clave=".$claveEnviada;
$resultado = mysqli_query($conexion,$q);
if($resultado==true){
	$resultados["validacion"] = "ok";
}else{
	$resultados["validacion"] = "error";
}

$resultadosJson = json_encode($resultados);
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';


?>