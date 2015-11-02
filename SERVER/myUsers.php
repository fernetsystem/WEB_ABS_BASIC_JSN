<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="page-header">
      <h1>WebService<small>Mi usuarios</small></h1>
    </div>
	<div>
		<table class="table table-condensed table-responsive table-hover">
			<tr>
				<td>CLAVE</td>
				<td>USUARIO</td>
				<td>PASSWORD</td>
			</tr>
			
	<?php
		$conexion = mysqli_connect('localhost','u858464654_fer','w9w9dorotea','u858464654_bdrem');
		$q = "select * from usuarios";
	   	$resultado = mysqli_query($conexion,$q);
		while ($fila = mysqli_fetch_array($resultado,MYSQLI_ASSOC)) {
			$obtengoClave=$fila['clave'];
			$obtengoUsuario=$fila['usuario'];
			$obtengoPassword=$fila['password'];
			echo "<tr><td>".$obtengoClave."</td>";
			echo "<td>".$obtengoUsuario."</td>";
			echo "<td>".$obtengoPassword."</td></tr>";
		}
		mysqli_close($conexion);
		?>
			
		</table>
	</div>
       <a href="login.html">MAS</a>     
</body>
</html>