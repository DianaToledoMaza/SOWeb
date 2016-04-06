<?php
  session_start();
  include 'conexionB.php';

  if(isset($_SESSION['user'])){
      if($_SESSION['tipo'] == "0"){

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
      <link rel="stylesheet" href="css/estilo.css">
      
   
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery-ui.min.js"></script> 
	    <script src="js/bootstrap.min.js"></script>
      <script src="js/dinamico.js"></script>
      <script src="js/notascript.js"></script>


        
      <title>iOS 9 Beta</title>
        
      <!-- CALCULADORA -->
        
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/style.css"> 
        
     <!-- CREDITOS-->
      <link rel="stylesheet" href="css/estilofb.css">

     <!-- CONTACTOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css">
    <link rel="stylesheet" href="css/estiloAdmin.css"> 
    <script src="js/administrador.js"></script>  

        
        
    </head>
    <body>
        

        <!-- Inicio carousel-->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
          <!-- Indicators -->
          <ol class="carousel-indicators" style="top: 80%;">
   
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              
                <img src="img/iPad.jpg" alt="fondo">
                <input id="fb" class="face" type=image src="images/Layer-6.png" width="76" height="76" onclick="abrirFB()">
                <input id="contact" class="contact" type=image src="images/Layer-12.png" width="76" height="76" onclick="abrirContactos()">
                <a style="position: absolute; top: 4%; right: 2%;" href="logout.php"><button style="background-color: transparent; border: medium none; position: absolute; right: 5%;"><img  src="img/Shutdown%20Filled-50.png"></button></a>
                
                 
              <div class="carousel-caption">
              </div>
            </div>
            <div class="item">
                //segundo fondo eaeaeaea
              <div class="carousel-caption"> 
               
            
            </div>
          </div>    
        </div>
            
            
        <!-- CREDITOS -->
            
       <div class="fb" id="credits">
                 <main data-equalizer>
                    <section id="left-side" style="height: 100%; width: 32%; position: absolute; top: 0px;">
                    <img style="position: relative; top: -9px; left: 115px; height: 176px;" src="img/Diana.png" alt="photo" class="img-circle">
                    <h2 style="font-size: 1.56rem;" class="name">Diana Alondra Toledo Maza</h2>
                    <h3 style="font-size: 1.56rem;" class="job-titles">
                     Web Software Developer
                     </h3>
                    <section class="info-content">
                        <img style="position: absolute; height: 107px; left: 9%; top: 50%;" src="img/up.png" alt="photo">	
                    </section>  
                  </section>
                  <div id="right-side"style="background-color: white; height: 100%; width: 68%; position: absolute; top: 0%; left: 32%;">
                    <!--mis datos-->
                     <input style="position: absolute; right: 1%; height: 5%; width: 5%; top: 2%;" id="fbclose" src="images/close.png" onclick="cerrarFB()" height="76" type="image" width="76">
                      <div style="position: absolute; left: 22%; top: 13%; width: 60%; height: 60%;" class="jumbotron">
                          <p class="text-center">Subject:</p>
                          <p class="text-center">Web Programming</p>
                          <p class="text-center">Teacher:</p>
                          <p class="text-center">Dr. Juan Carlos López Pimentel</p>
                          <p class="text-center">University: </p>
                          <p class="text-center">Universidad Pólitecnica de Chiapas</p>
                          <p class="text-center">Fourmester: </p>
                          <p class="text-center">5° fourmester</p>
                          <p class="text-center">08/04/16</p>
                          <p class="text-center"><a class="btn btn-primary btn-lg" href="https://www.facebook.com/bexan.sheckler/about" role="button">Learn more</a></p>
                    </div>
                  </section>
                </main>
            </div>


            <!-------CONTACTOS-->
            <div id="contactos" class="contactos"> 
              <div class="container" ng-app="miApp" ng-controller="myController">
                <div class="row teal grey lighten-2">
                  <div class="col s12 blue-text grey lighten-2 center-align">
                    <span class="flow-text valign">
                      Diana Alondra Toledo Maza 143355<br>
                      Universidad Pólitecnica de Chiapas<br>
                      Programación Web<br>
                      Dr. Juan Carlos López Pimentel<br>
                      11/03/16<br>
                    </span>
                  </div>
                </div>
          <div class="row grey lighten-2 card-panel teal">
              <div class="col s3 blue-text grey lighten-2 center-align">
                  <h4>Contactos</h4>
                  <p>
                      <img src="https://cdn3.iconfinder.com/data/icons/users/100/user_male_1-512.png" class="circle responsive-img perfil" />
                      <br/>
                      <a ng-show="visible" ng-click="nuevo()" class="white-text" ><h6>Añadir Contacto</h6></a>
                 </p>
              <center class="form left-align">
                <form action="newUser.php" method="post">
                  <label>User</label>
                  <input ng-model="addNombre" type="text" id="name" name="nombre" required/><br>
                  <label>Password</label>
                  <input ng-model="addPass" type="text" id="password" name="password" required/><br>
                  <label>Correo</label>
                  <input type="text" ng-model="addMail" id="email" name="email" required/><br>
                  <label>Telefono</label>
                  <input type="number" ng-model="addTelefono"  id= "number" name="number" required><br>
                  <label>Tipo</label>
                  <input type="text" ng-model="addTelefono" id="tipo" name="tipo" required/><br>
                  <input style="background-color: rgb(38, 166, 154); border: medium none;" value="Guardar" type="submit" class="waves-effect waves-light btn"/>
                </form>
                <input onclick="editarUsuario()" style="position: absolute; left: 23%; top: 78%;" name="editar" src="images/Edit.png" height="50" type="image" width="50">

              </center> 
              <!--table ng-hide="visible" class="table left-align">
              <tr>
                <td>Nombre</td>
                <td><input ng-model="addNombre" type="text" name="nombre" /></td>
              </tr>
              <tr>
                <td>Correo</td>
                <td><input type="text" ng-model="addMail" name="email"/></td>
              </tr>
              <tr>
                <td>Telefono</td>
                <td><input type="number" ng-model="addTelefono" name="number"></td>
              </tr>
              <tr>
                <td>Tipo</td>
                <td><input type="text" ng-model="addPass" name="tipo"/></td>
              </tr>
              <tr>
                <td colspan="2">
                  <a ng-click="guardar()" class="waves-effect waves-light btn">
                    <i class="mdi-content-save right"></i>Guardar
                  </a>
                </td> 
            </table-->
          </div>
          <div class="col s9 grey-text lighten-5">
            <p class="input-field">
              <i class="mdi-action-account-circle prefix"></i>
              <input ng-model="buscar" id="icon_prefix" type="text" class="validate">
              <label for="icon_prefix">Buscar Contacto</label>
             <input style="width: 5%; height: 71%; position: absolute; right: -1%; top: -48%;" src="img/Close%20Window-96.png" onclick="cerrarContactos()" type="image">
            </p>
              <div id="divcont" class="" ng-repeat="alumnos in alumnos|filter:buscar">
                <div class="row borde">
                  <div class="col s11 left-align">
                    <p id="usuario">Usuario: </p>
                    <p id="correo">Correo: </p>
                    <p id="telefono">Telefono: </p>
                    <p id="tipo">Tipo: </p>
                  </div>
                    <div class="col s1 right-align">
                      <a><span  name="eliminar" class="valign"> <i class="small mdi-action-delete red-text center-align"></i></span></a>
                    </div>
                </div><!-- END ROW!-->
            </div>
          </div>
        </div>
      </div>
          
          <!--script src='http://ajax.googleapis.com/ajax/libs/angularjs/1.3.2/angular.min.js'></script-->
          <script src='https://rawgithub.com/gsklee/ngStorage/master/ngStorage.js'></script>
    </div>

  </body>
</html>
    
<?php
    }else{
        echo '<script>window.location = "bloqueo.php";</script>';
    } 
  }else{
    echo '<script>window.location = "bloqueo.php";</script>';
  } 
?>