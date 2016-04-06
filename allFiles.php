<?php

    session_start();
    $user= $_SESSION['user'];
    
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