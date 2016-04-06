<?php

	session_start();
	include 'conexionB.php';

	$user= $_POST['user'];
	$pass= $_POST['p'];
	$email = $_POST['e'];
	$numb = $_POST['n'];
	$tipo = $_POST['t'];

	if($_POST['opcion']== "editar"){
		
		mysql_query("UPDATE usuarios SET Usuario='$user', Password='$pass', Email= '$email', Telefono='$numb', Tipo='$tipo' WHERE Usuario = '$user'");
		echo '<script language="javascript">alert("Usuario Editado");</script>';
		mysql_close($link);	
		
	}
?>