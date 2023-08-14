<?php

// require "./model/catogry.php"

spl_autoload_register(function($x){
    // require "./".$y."/".$x.".php";
    if(file_exists("controller/".$x.".php")){
        require "controller/".$x.".php";
    }
    else{
        require "model/".$x.".php";
    }
    // require .$x.".php";
});

$c = new catogry;
$c->cat();