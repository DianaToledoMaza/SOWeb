
<?php

	session_start();
	include 'conexionB.php';

	$user= $_POST['user'];

	if($_POST['opcion']== "borrar"){
		mysql_query("DELETE  FROM usuarios WHERE Usuario = '$user'");
		mysql_query("DELETE FROM notas WHERE Usuario = '$user'");
		echo '<script language="javascript">alert("Usuario eliminado");</script>';
		mysql_close($link);
	}
?>