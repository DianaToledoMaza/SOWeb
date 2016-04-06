<?php

    $link = mysql_connect("localhost","root","root") or die ("No se pudo conectar al servidor");
	if($link){
		mysql_select_db("so",$link) or die ("No se encontro la base de datos");
	}

?>
        
