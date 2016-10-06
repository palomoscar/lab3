<?php
var_dump($_POST);
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$nick = $_POST["nick"];
$mail = $_POST["mail"];
$telefono = $_POST["telf"];
$sexo = $_POST["sexo"];
$especialidad = $_POST["esp"];
$usuario = "root";
$puerto = "mysql.hostinger.es";
$passBD = "gabriel3";
$conexion = mysql_connect($puerto,$usuario,$passBD);
$mysqli = mysqli_select_db("usuario", $conexion);

$sql = "INSERT INTO usuario (Nombre,Apellidos,Nickname,Email,Telefono,Sexo,Especialidad) VALUES( '$nombre', '$apellidos','$mail','$telefono','$sexo','$especialidad')";
	/*VALUES('$_POST["nombre"]','$_POST["apellidos"]','$_POST["nick"]','$_POST["mail"]','$_POST["telf"]','$_POST["sexo"]','$_POST["esp"]')";*/
	if(!$mysqli_query($conexion,$sql)){
	
		die("Error:" mysqli_error($conexion));

	}
	
	echo "¡Usuario registrado con exito!";
	echo "<p> <a href="VerUsuarios.php"> Ver registros </a>"; 
	mysqli_close($conexion);//ahora cerramos la conexion
	

?>