<?php
$claveEnviada = $_GET['clave'];
$usuarioEnviado = $_GET['usuario'];
$passwordEnviado = $_GET['password'];
$resultados = array();
$conexion = mysqli_connect('localhost','u858464654_fer','w9w9dorotea','u858464654_bdrem');
$q = "update usuarios set usuario='".$usuarioEnviado."' , password='".$passwordEnviado."' where clave = ".$claveEnviada;
$resultado = mysqli_query($conexion,$q);
if($resultado==true){
	$resultados["validacion"] = "ok";
}else{
	$resultados["validacion"] = "error";
}

$resultadosJson = json_encode($resultados);
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';


?>