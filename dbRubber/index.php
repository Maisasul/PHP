<?php
require "db.php";
$db = new db("Localhost", "root", "", "codeacademy_crud");
// $res = $db->select("user","*")->row();
// $res = $db->delete("user",10);
// $res = $db->update("user","name","Ahmed",9);
$array =[
    "name" => "Sara",
    "email" => "sara@gmail.com",
    "password" => "1234",
    "admin" => 0
];
// $res = $db->update("user",$array,3);
$res = $db->insert("user",$array);

echo "<pre>";
print_r($res);
?>