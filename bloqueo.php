<?php

    session_start();
    include 'conexionB.php';
    if(isset($_SESSION['user'])){
        if($_SESSION["tipo"] == "1")
            header("Location:MOS2.php");
        else
            header("Location:MOS3.php");
}
?>

<!DOCTYPE html>
<html> 
    
    <head>
        
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=1024, user-scalable=no">
    
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/estiloBloqueo.css">
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/style.css">
      
   
      <script src="jquery.min.js"></script>
      <script src="jquery-ui.min.js"></script> 
	  <script src="js/bootstrap.min.js"></script>
      <script src="js/bloqueo.js"></script>
        
      <title>iOS 9 Beta</title>
  
        
    </head>
    <body onload="mueveReloj()">
        
        
        <!--BLOQUEO Y LOGIN -->
        <div id="bloqueo">  
            <img src="images/1E0.png" alt="bloqueo" >
                <form name="form_reloj">
                    <input class="reloj" type="text" name="reloj" size="10"  onfocus="w indow.document.form_reloj.reloj.blur()">
                </form> 
                
                
                <img class="camera" src="images/Layer-0-copy.png" alt="camara" >
            
                <input id="desplegar" class="menu" src="img/barraI.png" height="100" type="image" width="100" onclick="abrirControl()">
                
                <input id="desbloquear" class="flecha" src="img/More%20Than%20Filled-50.png" height="50" type="image" width="50" onclick="cerrarBloqueo()">
            
                <p class="let-desbloquear">Slide to unlock</p>
     
        </div>
        
    
         <!-- MENU DESPLEGABLE -->
            <div id="estado" class="control">
            
                <img style="position: absolute; left: 0px; width: 100%; top: 0px;" src="img/control_center_ipad.png" alt="control">	
                
                <input id="ocultar" src="img/Expand%20Arrow-50.png" height="50" type="image" width="50" class="flechaOcult" onclick="cerrarControl()">
 
            </div>
        
         <!-- USERS -->
        <div id="user">
                <img src="images/Empty%20Battery%20Filled-50.png">
                <img src="images/Wi-Fi%20Filled-50.png">
            
                <img src="img/Circled%20User%20Male%20Filled-100.png" class="img1">
                <div class="f">
                    <center>
                        <form action="consultarB.php" method="post">
                           <input style="padding-top: 12px; padding-left: 15px; position: absolute; left: 12%; top: -28%;" name="user" id="usuario" placeholder="Username" required="" type="text"><br>
                            <input style="padding-top: 12px; padding-left: 15px;" name="pass" id="password" placeholder="Password" required="" type="password"><br>
                            <label class="us1">Usuario</label>
                            <input type="radio" name="tipo" value="1" required>
                            <label class="us1">Administrador</label>
                            <input type="radio" name="tipo" value="0" required><br>
                            <input style="position: absolute; left: 40%; top: 95%;" src="img/Enter%20Filled-50.png" name="login" height="39" type="image" width="40"><br>
                            <!--input type="submit" name="login" value="Entrar"-->
                        </form>
                    </center>
                </div>
     
        </div>
        
        
        <!--div id="pass" class="pass">
            <img  src="img/pass.png" alt="login" >
        </div-->

    </body>
</html>

<?php

?>