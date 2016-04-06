function mueveReloj(){
    
    momentoActual = new Date()
    hora = momentoActual.getHours()
    minuto = momentoActual.getMinutes()
    

    str_minuto = new String (minuto)
    if (str_minuto.length == 1)
       minuto = "0" + minuto

    str_hora = new String (hora)
    if (str_hora.length == 1)
       hora = "0" + hora

    horaImprimible = hora + " : " + minuto 

    document.form_reloj.reloj.value = horaImprimible

    setTimeout("mueveReloj()",1000)
} 



//----------------MENU DESPLEGABLE2---------------------

function addControl(){
    var animationE = 'webkitAnimationEnd oanimationend msAnimationEnd animationend';

     $("#estado").addClass("animated slideInUp").one(animationE,function(){
        $(this).removeClass("animated slideInUp");
      });
}
    
function ocultarControl(){

    var animationE = 'webkitAnimationEnd oanimationend msAnimationEnd animationend';
    var divid = document.getElementById('estado');

          divid.style.animationDuration = "0.7s";
          $("#"+divid).addClass("animated slideOutDown").one(animationE,function(){
            $(this).removeClass("animated slideOutDown");

                 divid.style.animationDuration = "0.3s";

          });
}


//----------------------------USERS-----------------

function addUser(){
var animationE = 'webkitAnimationEnd oanimationend msAnimationEnd animationend';


      $("#user").addClass("animated slideInLeft").one(animationE,function(){
        $(this).removeClass("animated slideInLeft");
      });
}

/*function closeUser(){
    var animationE = 'webkitAnimationEnd oanimationend msAnimationEnd animationend';


      $("#user").addClass("animated slideInLeft").one(animationE,function(){
        $(this).removeClass("animated slideInLeft");
      });

}*/