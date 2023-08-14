<?php

//Associative arrays
// $user = [
//     "name"=>"Maisa",
//     "age"=>25,
//     "city"=>"Muscat"
// ];

// print_r($user);

// foreach($user as $u => $u_value) {
//     echo "Key=" . $u . ", Value=" . $u_value;
//     echo "<br>";
// }


// $users = [
//     ["name"=>"Ahmed","age"=>23],
//     ["name"=>"Ali","age"=>26]
// ];


// foreach($users as $value){
//     foreach($value as $k => $v){
//         // echo "{$k} : {$v} <br> <hr>";
//         echo $k." : ".$v."<br>";
//     }
//     echo "<hr>";
// }


// echo $x = $_POST['num1']."<br>";
// echo $y = $_POST['num2']."<br>";
// echo "num1 + num2 = ".$x+$y;

if(empty($_POST['x']) || empty($_POST['y']))
{
    echo "this falid is empty";
}
else{
    echo "result is: ".$_POST['x'] + $_POST['y'];
}