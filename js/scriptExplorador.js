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
        if(nameFile != "" && nameFile != " "){
            $.post(
                "files.php",
                {
                    action:"crear", file: nameFile
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
                    $("#text").html(data);
                    $("#editor").css("display", "inline");
                    
                }
            
            );
            
        }
    });
    
    
    $("#guardarEd").on("click", function(){
        
        area= $("#text").html();
        $.post(
            "files.php",
            {
                action:"guardar", file: fileN, txtarea: area    
            }
        
        );
        
        
        
        
    });
        
    

    
});