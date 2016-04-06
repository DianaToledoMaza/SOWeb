<?php
    session_start();
    include 'conexionB.php';
    include 'checkNotas.php';

    $user= $_SESSION['user'];
    if(isset($_SESSION['user'])){
      if($_SESSION['tipo'] == "1"){
        if(isset($_POST['opcion'])){
        
            switch($_POST['opcion']){
                case 'savenote':
                    guardar();
                break;
                case 'borrar':
                    borrar();
                break;
                default:
                    # error...
                break;
            }
        }  
?>

<!DOCTYPE html>
<html> 
    
    <head>
        
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=1024, user-scalable=no">
        
      <link rel="stylesheet" href="jquery/jquery-ui.min.css">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/animate.css">
      <link rel="stylesheet" href="css/estilo.css">
      
      
   
      <script src="jquery/jquery-1.12.0.min.js"></script>
      <script src="jquery/jquery-ui.min.js"></script> 
	  <script src="js/bootstrap.min.js"></script>
      <script src="js/dinamico.js"></script>
      <script src="js/notascript.js"></script>
        
      <title>iOS 9 Beta</title>
        
      <!-- CALCULADORA -->
        
      <link rel="stylesheet" href="css/reset.css">
      <link rel="stylesheet" href="css/style.css"> 
        
      <!-- CREDITOS-->
      <link rel="stylesheet" href="css/estilofb.css">
    
      <!-- NOTAS -->
      <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/estilo1.css">
      <script src="js/prefixfree.min.js"></script> 
      <script src="js/notascript.js"></script> 
        
      <!--EXPLORADOR-->
    
      <link rel="stylesheet" href="css/estiloExplorador.css">
      <script src="js/scriptExplorador.js"></script>
    
     <!--EDITOR_ARCHIVOS-->
     <link rel="stylesheet" href="css/resetE.css">
     <link rel="stylesheet" href="css/estiloEditor.css">
     <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
     <link href='https://fonts.googleapis.com/css?family=Ubuntu|Chewy|Quattrocento+Sans|Kaushan+Script|Comfortaa|Lobster+Two|Raleway|Montserrat|Titillium+Web|Josefin+Sans|Pacifico|Orbitron|Josefin+Slab|Satisfy|Economica|Courgette' rel='stylesheet' type='text/css'>
        
    </head>
    <body onload="recuperaNote()"> 
        

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
                <input id="calcu" class="calc" type=image src="img/450_1000.png" width="76" height="76" onclick="abrirCalculadora()">
                <input id="openNote" class="note" type=image src="images/Layer-13.png" width="76" height="76" onclick="abrirNotas()">
                <input id="fb" class="face" type=image src="images/Layer-6.png" width="76" height="76" onclick="abrirFB()">
                <input id="contactos" class="contact" type=image src="images/Layer-12.png" width="76" height="76">
                <a style="position: absolute; top: 4%; right: 2%;" href="logout.php"><button style="background-color: transparent; border: medium none; position: absolute; right: 5%;"><img  src="img/Shutdown%20Filled-50.png"></button></a>
                <div class="carousel-caption">
                </div>
            </div>
            <div class="item">
                <img src="img/blue6.jpg" alt="fondo">
                <input id="explorador" type=image src="images/%C3%ADndice.jpe" width="76" height="76" onclick="abrirExplorador()">
                <p style="position: absolute; top: 22%; left: 20%; color: white;">File Explorer</p>
                <input id="pages" type=image src="images/%C3%ADndice2.jpe" width="76" height="76" onclick="abrirEditor()">
                <p style="position: absolute; top: 22%; color: white; left: 30.4%;">File Editor</p> 
                <input id="bmo" type=image src="images/images.png" width="76" height="76">
                <p style="position: absolute; top: 22%; color: white; left: 40.2%;">BMO Game</p>
                <img src="img/div.png">
                <a style="position: absolute; top: 4%; right: 2%;" href="logout.php"><button style="background-color: transparent; border: medium none; position: absolute; right: 5%;"><img  src="img/Shutdown%20Filled-50.png"></button></a>
                
                
            <div class="carousel-caption"> 
            </div>
          </div>    
        </div>
            
        
        <!-- CALCULADORA -->
        <div id="calc">
            <input id="close" class="x" type=image src="images/close.png" width="76" height="76" onclick="cerrarCalc()">
            <div id="wrapper clearfix">
                 <div id="calculator">
                 <input type="text" id="display" maxlength="8">
                    <div id="keypad">
                        <a class='top clear-button' id='clear'>AC</a>
                        <a class='top plus-minus'>+/-</a>
                        <a class='top percent'>%</a>
                        <a class='right function-button divide'>/</a>
                        <a class='num-button seven'>7</a>
                        <a class='num-button eight'>8</a>
                        <a class='num-button nine'>9</a>
                        <a class='right function-button times'>x</a>
                        <a class='num-button four'>4</a>
                        <a class='num-button five'>5</a>
                        <a class='num-button six'>6</a>
                        <a class='right function-button minus'>-</a>
                        <a class='num-button one'>1</a>
                        <a class='num-button two'>2</a>
                        <a class='num-button three'>3</a>
                        <a class='right function-button plus'>+</a>
                        <a id='zero' class='num-button zero'>0</a>
                        <a class='num-button dot'>.</a>
                        <a class='right equals-button'>=</a>
                    </div><!-- /end #keypad -->
                </div><!-- /end #calculator -->
            </div><!-- /end #wrapper -->
            <script src="js/index.js"></script>  
        </div>
            
            
        <!-- CREDITOS -->
            
        <div class="fb" id="credits">
                 <main data-equalizer>
                    <section id="left-side" style="height: 100%; width: 32%; position: absolute; top: 0px;">
                    <img style="position: relative; top: -9px; left: 115px; height: 176px;" src="img/Diana.png" alt="photo" class="img-circle">
                    <h2 class="name">Diana Alondra Toledo Maza</h2>
                    <h3 class="job-titles">
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
            
        <!-- NOTAS -->
        <div id="note" class="interfazNote">
            
                <textarea id="area" cols='45' id='note' name='note' placeholder='... type something here' rows='5'></textarea>
                <div>
                   <p style="position: absolute; top: 3%; left: 1%;">iPad</p>
                   <input style="top: 2%; position: absolute; left: 4%; width: 2%; height: 4%;" src="images/Wi-Fi%20Filled-50.png" height="15" type="image" width="25">
                   <p style="position: absolute; right: 5%; top:3%;">41%</p>
                   <input style="position: absolute; right: 2%; top: 2%; height: 4%;" src="images/Empty%20Battery%20Filled-50.png" height="15" type="image" width="25">
                   <input id="noteclose" style="position: absolute; top: 15%; left: 2%; height: 6%;" src="img/Less%20Than%20Filled-50.png" height="15" type="image" width="25" onclick="cerrarNotas()">
                   <p style="position: absolute; top: 17%; left: 11%;">Notes</p>
                   <p style="position: absolute; top: 17%; left: 27%;">Edit</p>
                   <input style="top: 15%; position: absolute; left: 37%; height: 4%;" src="img/Resize%20Diagonal%20Filled-50.png" height="15" type="image" width="25">
                   <div style="position: absolute; top: 15%; right: 12%;">
                      <input type=image src="img/Trash-50.png" width="25" height="15" style="height: 5%;" onclick="borrarNote()">
                      <input id="save" type=image src="img/Download-50.png" width="25" height="15" style="height: 5%;" onclick="actualizar();">
                      <input type=image src="img/Create%20New-50.png" width="25" height="15" style="height: 5%;" onclick="nuevaNote()">
                   </div>
                </div>     
                <ul id="nueva"></ul>             
            </div>
            
        <!--EXPLORADOR-->
        <div id="explorer">
                <nav class="navbar navbar-default">
                    <p style="position: absolute; left: 2%; top: 9%;">iPad</p>
                    <input src="images/Wi-Fi%20Filled-50.png" style="width: 2%; height: 38%; position: absolute; left: 5%; top: 0%;" type="image">
                    <input src="images/Empty%20Battery%20Filled-50.png" style="height: 56%; position: absolute; top: -8%; width: 2%; right: 1%;" type="image">
                    <p style="height: 56%; position: absolute; top: 9%; width: 2%; right: 3.6%;">41%</p>
                    <input src="img/Add%20File-100.png" style="height: 56%; position: absolute; width: 2%; right: 36%; top: 19%;" type="image" id="crear">
                    <p style="position: absolute; right: 35%; top: 77%;">New File</p>
                    <input src="img/Delete%20File-100.png" style="height: 56%; position: absolute; top: 17%; width: 2%; right: 29%;" type="image" id="eliminar">
                    <p style="position: absolute; right: 28%; top: 77%;">Delete</p>
                    <input style="height: 56%; position: absolute; top: 17%; width: 2%; right: 23%;" src="img/Edit%20File-50.png" id="editar" type="image">
                    <p style="position: absolute; right: 23%; top: 77%;">Edit</p>
                    <input src="img/Close%20Window-96.png" style="height: 56%; position: absolute; top: 35%; width: 2%; right: 1%;" type="image" onclick="cerrarExplorador()">
                </nav>
                <div style="width: 100%; height: 100%; background-color: white; position: absolute; left: 0%; top: 6%; border-left-color: black;">
                    <div style="height: 10%; background-color: grey; position: absolute; left: 0%; top: 0%; width: 100%;">
                        <p style="position: absolute; top: 50%; left: 3%;">Nombre</p>
                        <p style="position: absolute; top: 50%; right: 49%;">Detalles</p>
                        <ul style="position: absolute; top: 100%; left: 5%;" id="listFile">
                    
                         <?php
                            if (is_dir($user)) {
                                if ($dh = opendir($user)){
                                    $num = 0;
                                    while (($file = readdir($dh)) != false){
                                        if (is_dir($user."/".$file)){
                                            echo "<li><img src=\"1459209178_folder.png\" height='25' width='25'>".$file."</li>"; 
                                        }else {
                                            echo "<li id='filename".$num."' onclick='filename(id)'><img src=\"1459209106_file.png\" height='25' width='25'>". $file ."</li>";
                                            $num++;
                                        }
                                    }
                                }
                            }else {
                                mkdir($user);
                            }
                         ?>
                  </ul>
                    </div> 
                    
                </div>  
            </div>
        
        <!--EDITOR_DE_ARCHIVOS-->
        <div id="editor">
            
            <nav class="navbar navbar-default">
                    <p style="position: absolute; left: 2%; top: 4%;">iPad</p>
                    <input src="images/Wi-Fi%20Filled-50.png" style="width: 2%; height: 38%; position: absolute; left: 5%; top: 0%;" type="image">
                    <input src="images/Empty%20Battery%20Filled-50.png" style="height: 56%; position: absolute; top: -8%; width: 2%; right: 1%;" type="image">
                    <p style="height: 56%; position: absolute; width: 2%; right: 3.6%; top: 4%;">41%</p>
                    <input style="height: 56%; position: absolute; width: 2%; right: 57%; top: 15%;" src="img/Edit%20File-50.png" id="guardarEd" type="image">
                    <p style="position: absolute; top: 72%; right: 57.3%;">Guardar</p>
                    <input src="img/Add%20File-100.png" style="height: 56%; position: absolute; width: 2%; right: 52%; top: 15%;" type="image" id="nuevoEd">
                    <p style="position: absolute; top: 72%; right: 50.3%;">New File</p>
                    <input src="img/Delete%20File-100.png" style="height: 56%; position: absolute; top: 15%; width: 2%; right: 46.4%;" type="image">
                    <p style="position: absolute; right: 46%; top: 72%;">Delete</p>
                    <input src="img/Reply%20Arrow%20Filled-100.png" style="height: 56%; position: absolute; top: 15%; width: 2%; right: 42%;" type="image" id="undo">
                    <p style="position: absolute; top: 72%; right: 41.4%;">Reply</p>
                    <input src="img/Forward%20Arrow%20Filled-100.png" style="height: 56%; position: absolute; top: 15%; width: 2%; right: 37%;" type="image" id="redo">
                    <p style="position: absolute; right: 36%; top: 72%;">Forward</p>
                    <p style="position: absolute; right: 28%; top: 72%;">Font Size</p>
                    <input src="img/Close%20Window-96.png" style="height: 56%; position: absolute; top: 35%; width: 2%; right: 1%;" type="image" onclick="cerrarEditor()">
                    <div style="position: absolute; top: 16%; right: 1%;" class="forms">
                    <input style="position: relative; top: 51%; right: 213%;" name="" id="size" min="10" max="400" value="30" type="range">
                      <div class="dropdown">
                        <button style="position: absolute; right: 100%; top: 0px;" class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Font
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                          <li id = "raleway-font" style = "font-family: Raleway;"><a href="#">Raleway</a></li>
                          <li id = "montserrat-font" style = "font-family: Montserrat"><a href="#">Montserrat</a></li>
                          <li id = "titillium-font" style = "font-family: Titillium Web"><a href="#">Titillium Web</a></li>
                          <li id = "pacifico-font" style = "font-family: Pacifico"><a href="#">Pacifico</a></li>
                          <li id = "josefin-slab-font" style = "font-family: Josefin Slab"><a href="#">Josefin Slab</a></li>
                          <li id = "orbitron-font" style = "font-family: Orbitron"><a href="#">Orbitron</a></li>
                          <li id = "comfortaa-font" style = "font-family: Comfortaa;"><a href="#">Comfortaa</a></li>
                          <li id = "courgette-font" style = "font-family: Courgette;"><a href="#">Courgette</a></li>
                          <li id = "ubuntu-font" style = "font-family: Ubuntu;"><a href="#">Ubuntu</a></li>
                          <li id = "chewy-font" style = "font-family: Chewy;"><a href="#">Chewy</a></li>
                          <li id = "lobster-two-font" style = "font-family: Lobster Two;"><a href="#">Lobster Two</a></li>
                          <li id = "kaushan-script-font" style = "font-family: Kaushan Script;"><a href="#">Kaushan Script</a></li>
                          <li id = "economica-font" style = "font-family: Economica;"><a href="#">Economica</a></li>
                          <li id = "satisfy-font" style = "font-family: Satisfy;"><a href="#">Satisfy</a></li>
                        </ul>
                      </div>
                    </div>
            </nav>
                <aside style="width: 20%;" class="arborescence col-xs-3">
                  <h3 style="position: absolute; left: 33%; top: 5%;">My Files</h3>
                   <ul style="position: absolute; top: 10%; left: 6%;" id="listFile2">
                    
                         <?php
                            if (is_dir($user)) {
                                if ($dh = opendir($user)){
                                    $num = 0;
                                    while (($file = readdir($dh)) != false){
                                        if (is_dir($user."/".$file)){
                                            echo "<li><img src=\"1459209178_folder.png\" height='25' width='25'>".$file."</li>"; 
                                        }else {
                                            echo "<li id='filename".$num."' onclick='filename(id)'><img src=\"1459209106_file.png\" height='25' width='25'>". $file ."</li>";
                                            $num++;
                                        }
                                    }
                                }
                            }else {
                                mkdir($user);
                            }
                         ?>
                  </ul>
                </aside>
            <div class="text" id="text" style="width: 100%; height: 100%; background-color: white;position: absolute;top: 7%;left: 20%" contenteditable="true">
      	         <!--textarea style="font-family: Helvetica Neue; font-size: 30px; line-height: 33px; position: absolute; top: 15%; left: 20%; border: medium none;" class="text" name="text" id="text" placeholder="Text." contenteditable="true"></textarea-->
            </div>
      	     
           <script src="js/editor.js"></script>
     </div>
   
                
  
    </body>
    <!--Aux Form-->
        <div id="dialog-form" title="File name">
            <form>
                <fieldset>
                    <label>Nombre Del Archivo</label>
                    <input type="text" id="fileName" name="name" class="text ui-widget-content ui-corner-all" required>
                    <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
                </fieldset>
            </form>
            
        </div>
</html>
    
<?php 
      }else{
        echo '<script>window.location = "bloqueo.php";</script>';
    }
    }else{
      echo '<script>window.location = "bloqueo.php";</script>';
    }
?>