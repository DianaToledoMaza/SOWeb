

//---------------NOTA----------------------

/*var id=0
var oid=0;
function nueva_nota () {
  var txtarea = document.getElementById("area").value;
  document.getElementById("nueva").innerHTML = document.getElementById("nueva").innerHTML +"<li id='nota0"+id+"'"+"type='none' onclick='ver_notas(id)' class='notas'>"+txtarea+"</li>";
  document.getElementById("area").value = "";
  id++;
}
function eliminar_nota () {
  var nota = document.getElementById("area").value;
  var notas = document.getElementById("nueva");
  var lista_notas = document.getElementsByTagName("li");
  var i =0;
  while(i < lista_notas.length){
    if (lista_notas[i].innerHTML == nota) {
      lista_notas[i].parentNode.removeChild(lista_notas[i]);
    };
    i++;
  }
  document.getElementById("area").value ="";
}

function ver_notas(id) {
  document.getElementById("area").value = document.getElementById(id).innerHTML;
}*/


function nuevaNote(){
    var msj= document.getElementById("area").value;
    var validacion= esVacio(msj);
    if(msj != "" && validacion){
      $.ajax({
        url:"MOS2.php", 
        data:{opcion:"savenote",nota:msj, actual:actual},
        type:"POST"
    });
    $("#nueva").load("notas.php");
    document.getElementById("area").value = "";
    actual ="";
    }else{
      alert("nota vacia: favor de escribir algo si desea guardar");
    }
  
}

function borrarNote(){
   var msj2 = document.getElementById("area").value;
   $.ajax({
         url:"MOS2.php",
         data:{opcion:"borrar",actual:actual},
         type:"POST"
      });
      $("#nueva").load("notas.php");
      document.getElementById("area").value = "";
      actual ="";
}

function esVacio(msj){
   var result = msj.split("");
   for (var i = 0 ; i < result.length; i++) {

      if(result[i] != " "){
         return true;
      }
   }
   return false;
}


function recuperaNote(){
   $("#nueva").load("notas.php");
}

var actual;

function verNote(id){
   document.getElementById("area").value = document.getElementById(id).innerHTML;
   actual = document.getElementById("area").value;
}