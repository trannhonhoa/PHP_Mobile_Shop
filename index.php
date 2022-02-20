<?php
        include_once "app/config/config.php";
        spl_autoload_register(function($className){
            include_once "system/libs/$className.php";
        });
        $main = new Main(); 
?>