<?php

	session_start();
	include "conexionB.php";
	if(isset($_SESSION['user'])){
		
		$user = $_POST['nombre'];
		$pass= $_POST['password'];
		$email = $_POST['email'];
		$numb = $_POST['number'];
		$tipo = $_POST['tipo'];
		

		$consulta = mysql_query("SELECT * FROM usuarios WHERE Usuario = '$user'");
		$consultaUser = mysql_num_rows($consulta);

		if($consultaUser > 0){
			echo '<script language="javascript">alert("Username NO disponible");</script>';
			echo '<script>window.location = "MOS3.php";</script>';
		}
		else{
			mysql_query("INSERT INTO usuarios (Usuario,Password,Tipo,Email,Telefono) VALUES ('$user','$pass','$tipo','$email','$numb')");
			echo '<script language="javascript">alert("Registro Exitoso");</script>';
			mysql_close($link);
			echo '<script>window.location= "MOS3.php";</script>';
		}
	}else{
		echo '<script>window.location= "MOS3.php";</script>';
	}
?>