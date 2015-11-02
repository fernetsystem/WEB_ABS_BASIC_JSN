<?php
$usuarioEnviado = $_GET['usuario_ins'];
$passwordEnviado = $_GET['password_ins'];
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


<?php
$contador = 0;
$usuarioEnviado = $_GET['usuario'];
$passwordEnviado = $_GET['password'];
$resultados = array();
$conexion = mysqli_connect('localhost','u858464654_fer','w9w9dorotea','u858464654_bdrem');
$q = "select * from usuarios where usuario='".$usuarioEnviado."' and password = '".$passwordEnviado."'";
$resultado = mysqli_query($conexion,$q);
    
while ($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
        $contador++;
        $obtenerUsuario = $fila['usuario'];
}
if($contador>0){
        $resultados["validacion"] = "ok";
}else{
        $resultados["mensaje"] = "Datos incorrectos";
}
$resultadosJson = json_encode($resultados);
echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';

?>


