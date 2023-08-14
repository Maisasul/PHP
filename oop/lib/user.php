<?php

class User{

    // public $connect = mysqli_connect("Localhost","root","","codeacademy_crud");
    public $connect;
    public function __construct()
    {
        $this->connect = mysqli_connect("Localhost", "root", "", "codeacademy_crud");
    }
    public function register($name,$email,$password){
        $sql = "INSERT INTO `user` (`name`,`email`,`password`,`admin`) VALUES ('$name','$email','$password','0')";
        mysqli_query($this->connect,$sql);
        return mysqli_affected_rows($this->connect);
    }
    
    public function login($email,$password){
        $sql = "SELECT * FROM `user` where `email` = '$email' AND `password` = '$password'";
        $query = mysqli_query($this->connect,$sql);
        return mysqli_fetch_assoc($query);
    }
}
?>