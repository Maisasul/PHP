<?php
function add($name,$user_id){
    $connect = mysqli_connect("Localhost","root","","codeacademy_crud");
    $sql = "INSERT INTO `category` (`name`,`user_id`) VALUES ('$name',$user_id)";
    mysqli_query($connect,$sql);
    return mysqli_affected_rows($connect);
}

function show(){
    $connect = mysqli_connect("Localhost","root","","codeacademy_crud");
    $sql = "SELECT * FROM `category`";
    $query =  mysqli_query($connect,$sql);
    return mysqli_fetch_all($query,MYSQLI_ASSOC);
}
function delete($id){
    $connect = mysqli_connect("Localhost","root","","codeacademy_crud");
    $sql = "DELETE FROM `category` WHERE `id` = '$id'";
    $query = mysqli_query($connect,$sql);
    return mysqli_affected_rows($connect);
}
function getCategory($id){
    $connect = mysqli_connect("Localhost","root","","codeacademy_crud");
    $sql = "SELECT * FROM `category` WHERE `id` = '$id'";
    $query = mysqli_query($connect,$sql);
    return mysqli_fetch_assoc($query);
}
function update($name,$id){
    $connect = mysqli_connect("Localhost","root","","codeacademy_crud");
    $sql = "UPDATE `category` SET `name` = '$name' WHERE `id`= $id";
    mysqli_query($connect,$sql);
    return mysqli_affected_rows($connect);
}

?>