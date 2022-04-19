<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="clasesesion.css">
	<title>Iniciar sesión</title>
</head>
<body bgcolor="#F8F9F9">
<a href="index.php"><div class="nombre1">Planet<br>Fitness</div></a>

<div class="imagen1"></div> 

<div class="caja">
<form action="sesion.php"  method="POST">
	    <input type="text" name="usu" placeholder="Usuario" required="" class="f">
		<input type="text" name="contra" placeholder="Contraseña" required="" class="f1">
		<input type="submit" name="enviar" value="Ingresar" class="e">
</form>
</div>



<?php
$conexion=new mysqli("localhost","root","","proyecto11");
$sql="SELECT * FROM personas";
$resultado=$conexion->query($sql);
if (isset($_POST['enviar']))
{
	$usuario=$_POST['usu'];
	$contra1=$_POST['contra'];
	$sql1="SELECT * FROM personas WHERE usuario='$usuario'";
$ejecutar=mysqli_query($conexion, $sql1);
$dato=$ejecutar->fetch_assoc();
	while($dato=$resultado->fetch_assoc()){
	if($dato['usuario']==$usuario && $dato['pass']==$contra1)
	{
		session_start();
		$_SESSION['usuario']=$usuario;
		echo"entrar";
		header("location:inicio.php");
	}

	}
	echo("<div class='no'><center><br><br>usuario no encontrado</center></div>");

}
?>


</body>
</html>