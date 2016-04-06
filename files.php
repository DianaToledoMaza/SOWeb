<?php

    session_start();
    $user= $_SESSION['user'];
    $action= $_POST['action'];
    $file= $_POST['file'];
    $contenido= $_POST['txtarea'];
    $path= $user."/".$file;

    switch($action){
        case "crear":
            fopen($path,"w");
            break;
            
        case "eliminar":
            unlink($path);
            break;
        
        case "editar":
            $file= fopen($path, "r");
            echo fread($file, filesize($path));
            fclose($file);
            break;
        case "guardar":
            $file=fopen($path, "w");
            fwrite($file, $contenido);
            fclose($file);
            break;
            
        default:
            #code...
            break;
    }

?>