<?php
$usuarioEnviado = $_GET['usuario'];
$passwordEnviado = $_GET['password'];
$resultados = array();
$conexion = mysqli_connect('localhost','u858464654_fer','w9w9dorotea','u858464654_bdrem');
$q = "insert into usuarios values(null,'".$usuarioEnviado."' ,'".$passwordEnviado."')";
$resultado = mysqli_query($conexion,$q);
if($resultado==true){
	$resultados["validacion"] = "ok";
}else{
	$resultados["validacion"] = "error";
}

$resultadosJson = json_encode($resultados);
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';


?>