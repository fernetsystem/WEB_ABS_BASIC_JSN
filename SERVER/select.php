<?php
header('Content-type: application/json');

$conexion = mysqli_connect('localhost','u858464654_fer','w9w9dorotea','u858464654_bdrem');

$q = "select * from usuarios ";
$resultado = mysqli_query($conexion,$q) or die ("Query error: " . mysql_error());

$records = array();

while($row = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
    $records[] = $row;
}
mysqli_close($conexion);




echo $_GET['jsoncallback'] . '(' . json_encode($records) . ');';
?>