
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>notepod</title>
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilo1.css">
    <script src="js/prefixfree.min.js"></script> 
    <script src="js/notascript.js"></script> 
  </head>

  <body>
    <textarea id="area" cols='45' id='note' name='note' placeholder='... type something here' rows='5'></textarea>
    <div>
       <p style="position: absolute; top: 0%; left: 1%;">iPad</p>
       <input style="top: 2%; position: absolute; left: 4%; width: 2%; height: 4%;" src="images/Wi-Fi%20Filled-50.png" height="15" type="image" width="25">
       <p style="position: absolute; right: 5%;">41%</p>
       <input style="position: absolute; right: 2%; top: 2%; height: 4%;" src="images/Empty%20Battery%20Filled-50.png" height="15" type="image" width="25">
      <input style="position: absolute; top: 15%; left: 2%; height: 6%;" src="img/Less%20Than%20Filled-50.png" height="15" type="image" width="25">
      <p style="position: absolute; top: 13%; left: 12%;">Notes</p>
      <p style="position: absolute; top: 13%; left: 25%;">Edit</p>
      
      <input style="top: 15%; position: absolute; left: 37%; height: 4%;" src="img/Resize%20Diagonal%20Filled-50.png" height="15" type="image" width="25">
       
      <div style="position: absolute; top: 15%; right: 12%;">
          <input type=image src="img/Trash-50.png" width="25" height="15" style="height: 5%;" onclick="eliminar_nota()">
          <input id="save" type=image src="img/Download-50.png" width="25" height="15" style="height: 5%;" onclick="ver_notas()">
          <input type=image src="img/Create%20New-50.png" width="25" height="15" style="height: 5%;" onclick="nueva_Nota()">
      </div>
  
    </div>
      <ul id="nueva">
      </ul>
      
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>  
  </body>
</html>
