
$(function(){

  $.ajax({
    type: "POST",
    dataType: "html",
    url:"consulContact.php",
    success: obtnContacts
  });

  function obtnContacts(){
    $("#divcont").load("consulContact.php");
  }

});


function borrarUsuario(usuario){
    $.ajax({
      type:"POST",
      data:{user:usuario, opcion:"borrar"},
      url: "borrar.php"
    });
    $("#divcont").load("consulContact.php");
}


