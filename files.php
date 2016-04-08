<?php

    session_start();
    $user= $_SESSION['user'];
    $action= $_POST['action'];
    $file= $_POST['file'];
    $contenido= $_POST['txtarea'];
    $fofa= $_POST['font'];
    $fosi= $_POST['size'];
    $path= $user."/".$file;

    switch($action){
        case "crear":
            $file= fopen($path,"w");
            $font= "type here"."!*#¡".$fofa.",".$fosi;
            fwrite($file, $font);
            fclose($file);
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
            $contenido= $contenido."!*#¡".$fofa.",".$fosi;
            fwrite($file, $contenido);
            fclose($file);
            break;
            
        default:
            #code...
            break;
    }

?>