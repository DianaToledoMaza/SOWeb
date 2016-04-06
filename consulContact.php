
<?php
	session_start();
    include 'conexionB.php';
    $consulta=  mysql_query("SELECT * FROM usuarios");
    $contenidoConsult= mysql_num_rows($consulta);

    if($contenidoConsult > 0){
  
    	while ($fila= mysql_fetch_array($consulta)){
            
    		echo "<div class='row borde'>";
            echo "<div class='col s11 left-align'>";
            echo "<p id='usuario'>Usuario: ".$fila['Usuario']."</p>";
	        echo "<p id='correo'>Correo: ".$fila['Email']."</p>";           
	        echo "<p id='telefono'>Telefono: ".$fila['Telefono']."</p>";            
	        echo "<p id='tipo'>Tipo: ".$fila['Tipo']."</p>";         
            echo "</div>";      
            echo "<div class='col s1 right-align'>";       
            echo "<a id='".$fila['Usuario']."' onclick='borrarUsuario(id)'><span  name='eliminar' class='valign'> <i class='small mdi-action-delete red-text center-align'></i></span></a>";         
            echo "</div>";       
            echo "</div>";    
    		
    	}
    }else{
    	echo '<script language="javascript">alert("fallo la consulta");</script>';
    }
    mysql_close($link);
    
?>
	


