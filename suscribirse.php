<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="clasesuscri.css">
	<title>Suscribirse</title>
</head>
<body bgcolor="#F8F9F9"> 

<a href="index.php"><div class="nombre1">Planet<br>Fitness</div></a>


<div class="imagen2"></div>

<div class="caja1">
<form action="suscribirse.php"  method="POST">
 	    <input type="text" name="nombre" placeholder="Nombre Completo" required="" class="fo">
        <input type="text" name="cuenta" placeholder="Numero de cuenta" required="" class="fo1">		
	    <input type="text" name="usu" placeholder="Usuario" required="" class="fo2">
		<input type="text" name="contra" placeholder="Contraseña" required="" class="fo3">
		<input type="submit" name="enviar" value="Ingresar" class="en">
</form>
</div>


<?php
if (isset($_POST['enviar']))
{
$unir=new mysqli("localhost","root","","proyecto11"); 
$usuario = $_POST["usu"];
$sql="SELECT * FROM personas ";
$ejecutar=mysqli_query($unir, $sql); 
$dato=$ejecutar->fetch_assoc();
while ($dato=$ejecutar->fetch_assoc()) {
	if ($usuario==$dato['usuario']) {
		echo "ya existe";
	    header ("location:repetido.php");

		break;
	}
}
if($usuario!=$dato['usuario'])
{



$nombre=$_POST['nombre'];
$cuenta=$_POST['cuenta'];
$usuario=$_POST['usu'];
$pass=$_POST['contra'];
$unir=new mysqli("localhost","root","","proyecto11");
$sql="INSERT INTO personas VALUES (Null,'$nombre','$cuenta','$usuario','$pass')";
$ejecutar=mysqli_query($unir, $sql);
header("location:inicio.php");
	
}
}
?>
</body>
</html>