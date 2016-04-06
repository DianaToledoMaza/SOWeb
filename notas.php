<?php
	session_start();
    include 'conexionB.php';
    $sentencia=  mysql_query("SELECT Nota, ID FROM notas WHERE Usuario = '".$_SESSION['user']."'");
    $numFilas= mysql_num_rows($sentencia);

    for($i=0; $i <$numFilas; $i++){
        $fila= mysql_fetch_array($sentencia);
        echo "<li id='nota".$fila['ID']."' onclick='verNote(this.id)'>".$fila['Nota']."</li>";
    }
?>


