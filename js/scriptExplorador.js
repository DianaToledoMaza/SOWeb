//Manejador de archivos
var fileN;
function filename(id){
    fileN= document.getElementById(id).innerHTML;
    fileN= fileN.split(">");
    fileN= fileN[1];
}

$(function(){
    
    function crearArchivo(){
        
        nameFile = $("#fileName").val();
        nameFile= nameFile + ".txt";
        var estilos= $("#text").css(["font-family","font-size"]);
        var aux= [];
        cont=0;
        $.each(estilos,function(propiedad, valor){
            aux[cont]= propiedad + ":" + valor;
            cont++;
        });
        if(nameFile != "" && nameFile != " "){
            $.post(
                "files.php",
                {
                    action:"crear", file: nameFile, font: aux[0], size: aux[1]
                },
                function(){
                   $("#listFile").load("allFiles.php");
                   $("#listFile2").load("allFiles.php"); 
                }
            
            );
            
        }
        dialog.dialog("close");
    }
    
    var dialog,form;
    
    dialog= $("#dialog-form").dialog({
        autoOpen: false,
        height: 150,
        width: 400,
        modal: true,
        buttons:{
            "Crear": crearArchivo,
            Cancel: function(){
                dialog.dialog("close");
                
            }
        },
        close: function(){
            form[0].reset();
        }
        
    });
    
    form= dialog.find("form").on("submit", function(event){
        event.preventDefault();
        crearArchivo();
    });
    
    $("#crear").button().on("click", function(){
        dialog.dialog("open");
    });
    
    $("#nuevoEd").button().on("click", function(){
        dialog.dialog("open");
    });
    
    $("#eliminar").on("click", function(){
        
       if(fileN != undefined){
           $.post(
            
                "files.php",
                {
                    action:"eliminar", file: fileN
                },
                function(){
                   $("#listFile").load("allFiles.php"); 
                   $("#listFile2").load("allFiles.php");
                }
           );
       } 
        
        
    });
    
    
    $("#editar").on("click", function(){

        if(fileN != undefined){
            $.post(
                "files.php",
                {
                  action: "editar", file: fileN  
                },
                function(data){
                    data= data.split("!*#¡");
                    var msj= data[0];
                    var style= data[1];
                    style= style.split(",");
                    font= style[0];
                    size= style[1];
                    font= font.split(":");
                    size= size.split(":");
                    fontP= font[0];
                    fontS= font[1];
                    sizeP= size[0];
                    sizeS= size[1];
                    $("#text").css(fontP, fontS);
                    $("#text").css(sizeP, sizeS);
                    $("#text").html(msj);
                    $("#editor").css("display", "inline");
                    
                }
            
            );
            
        }
    });
    
    
    $("#guardarEd").on("click", function(){
        var estilos= $("#text").css(["font-family","font-size"]);
        var aux= [];
        cont=0;
        $.each(estilos,function(propiedad, valor){
            aux[cont]= propiedad + ":" + valor;
            cont++;
        });
        
        area= $("#text").html();
        $.post(
            "files.php",
            {
                action:"guardar", file: fileN, txtarea: area, font: aux[0], size: aux[1]    
            }
        
        );
        
        
        
        
    });
        
    

    
});