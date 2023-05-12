<?php
    // LOAD LIBRARIES 
    // Bootstrap is required in the index.php
    require_once 'config/config.php';
    // require_once 'libraries/core.php';
    // require_once 'libraries/controller.php';
    // require_once 'libraries/db.php';
    spl_autoload_register(function($className){
        require_once 'libraries/'.$className.'.php';
    });

    $init=new Core();


    
    

