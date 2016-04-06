<?php

    session_start();
	require "conexionB.php";

	$ususuario = $_POST['user'];
	$contrasena = $_POST['pass'];
	$tipo= $_POST['tipo'];


	if($ususuario != "" && $contrasena != ""){
		$users = mysql_query("SELECT * FROM usuarios WHERE Usuario ='$ususuario'");
		$f2 = mysql_num_rows($users);
		if($f2 > 0){
			$f=mysql_fetch_array($users);
			if($contrasena == $f['Password']){
				$_SESSION["user"] = $f['Usuario'];
				$_SESSION["tipo"] = $f['Tipo'];
				//$_SESSION["pass"] = $f2['password'];

				if($f['Tipo'] == "1"){//ingreso usuario
					echo '<script>alert("Bienvenido User")</script> ';
					echo '<script>window.location="MOS2.php";</script>';
				}else{//ingreso admin
					echo '<script>alert("Bienvenido Administrador")</script> ';
					echo '<script>window.location="MOS3.php";</script>';
				}
			}else{
				echo '<script>alert("Contraseña incorrecta")</script> ';
				echo '<script>window.location="bloqueo.php"</script>';
			}
		}else{
			echo '<script>alert("Este usuario no existe, Registrate para ingresar")</script> ';
			echo "<script>location.href='bloqueo.php'</script>";	
		}
	} else {
		echo '<script>alert("Llena todos los campos")</script> ';
		echo "<script>location.href='bloqueo.php'</script>";	
	}

?>

