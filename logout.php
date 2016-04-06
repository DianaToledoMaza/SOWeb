<?php
	
	session_start();
	session_destroy();
	echo 'Sesion cerrada';
	echo '<script>window.location = "bloqueo.php";</script>'

?>