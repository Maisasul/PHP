<?php

class magic{
    // public function __construct()
    // {
    //     echo "This is the construct magic method";
    // }
    // public function __destruct(){
    //     echo "This is the destruct magic method";
    // }
    public function __get($name){
        echo "You are trying to get " . $name;
    }

    public function __set($name,$value){
        echo "You are trying to modify ". $name . " with " . $value;
    }

    public function __call($name,$parameter){
        echo "method name: ".$name. " ";
        print_r($parameter);
    }
}

$x = new magic();
// $x->first;
$x->Name = "Maisa";
// $x->go("call");
