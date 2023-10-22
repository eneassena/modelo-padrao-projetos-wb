<?php  

spl_autoload_register(function($nameFile){
    if(file_exists("Src/Controllers/$nameFile.php")) {
        require "Src/Controllers/$nameFile.php";
    }elseif(file_exists("Src/Models/$nameFile.php")){
        require "Src/Models/$nameFile.php";
    } elseif(file_exists("Src/Core/$nameFile.php")) {
        require "Src/Core/$nameFile.php";
    }
});