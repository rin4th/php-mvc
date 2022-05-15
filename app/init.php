<?php

spl_autoload_register(function ( $class ){
    require_once 'core/'. $class .'.php';
//    require_once 'views/'. $class .'.php';
//    require_once 'controllers/'. $class .'.php';
//    require_once 'models/'. $class .'.php';
});

