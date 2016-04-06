
//-------------------transitions---------------------------

function abrirCalculadora(){ 
   $("#calc").fadeIn(500);
}

function cerrarCalc(){
   $("#calc").fadeOut(500);
}

function abrirNotas(){
   $("#note").fadeIn(500);
}

function cerrarNotas(){
   $("#note").fadeOut(500);
}

function abrirContactos(){
   $("#contactos").fadeIn(500);
}

function cerrarContactos(){
   $("#contactos").fadeOut(500);
}

/*function cerrarContactos(){
   $("#contactos").fadeOut(500);
}*/

function abrirFB(){
   $("#credits").fadeIn(500);
}

function cerrarFB(){
   $("#credits").fadeOut(500);
}

function abrirControl(){
    $("#estado").fadeIn(500);
}

function cerrarControl(){
    $("#estado").fadeOut(500);
}


function cerrarBloqueo(){
    $("#bloqueo").SlideOut(500);
}

function abrirExplorador(){
    $("#explorer").fadeIn(500);
}

function cerrarExplorador(){
    $("#explorer").fadeOut(500);
}


function abrirEditor(){
    $("#editor").fadeIn(500);
}

function cerrarEditor(){
    $("#editor").fadeOut(500);
}





//-----------REDO AND UNDO -------------

$(function(){
    
    $("#redo").on("click", function(){
        document.execCommand('redo', false, null);
    });

    $("#undo").on("click", function(){
        document.execCommand('undo', false, null);
    });
  
    
});


