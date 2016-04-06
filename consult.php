<?php

    session_start();
	require("conexionB.php");

	$ususuario = $_POST['usuario'];
	$contrasena = $_POST['password'];
	echo 'hfbiwfbvwi'

	if($ususuario != "" && $contrasena != ""){
		$users = mysql_query("SELECT * FROM usuarios WHERE Usuario ='$ususuario'");
		if($f=mysql_fetch_array($users)){
			if($contrasena == $f['Password']){
				$_SESSION['user'] = $f['Usuario'];
				echo '<script>alert("Bienvenido :D")</script> ';
				echo '<script>window.location="MOS2.php";</script>'
			}else{
				echo '<script>alert("Contraseña incorrecta")</script> ';
				echo '<script>window.location="bloqueo.php"</script>';
			}
		}else{
			echo '<script>alert("Este usuario no existe, Regstrate para ingresar")</script> ';
			echo "<script>location.href='bloqueo.php'</script>";	
		}
	} else {
		echo '<script>alert("Llena todos los campos")</script> ';
		echo "<script>location.href='bloqueo.php'</script>";	
	}

?>

