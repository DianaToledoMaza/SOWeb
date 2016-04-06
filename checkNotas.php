<?php
    
    function guardar(){
        include 'conexionB.php';
        $user= $_SESSION['user'];
        $nota= $_POST['nota'];
        $actual= $_POST['actual'];

        //echo "<script>alert(".$actual.");</script>";
		$cambiar = mysql_query("SELECT * FROM notas WHERE Nota = '$actual'");
		$fila = mysql_num_rows($cambiar);
		if($fila > 0){
			mysql_query("UPDATE notas SET Nota = '$nota' WHERE Nota = '$actual'");
		}else{
			mysql_query("INSERT INTO notas (Usuario, Nota) VALUES('$user', '$nota')");	
			echo '<script>alert("NOTA CREADA")</script>';
		}     
    }

    function borrar(){
    	include 'conexionB.php';
		$user = $_SESSION['user'];
		$nota = $_POST['actual'];
		mysql_query("DELETE FROM notas WHERE Nota = '$nota'");	
		echo '<script>alert("NOTA ELIMINADA")</script>';
    }



?>