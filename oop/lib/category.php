<?php 

class category{
    public $connect;
    public function __construct()
    {
        $this->connect = mysqli_connect("Localhost", "root", "", "codeacademy_crud");
    }
    public function add($name,$user_id){
        $sql = "INSERT INTO `category` (`name`,`user_id`) VALUES ('$name',$user_id)";
        mysqli_query($this->connect,$sql);
        return mysqli_affected_rows($this->connect);
    }
    
    public function show(){
        $sql = "SELECT * FROM `category`";
        $query =  mysqli_query($this->connect,$sql);
        return mysqli_fetch_all($query,MYSQLI_ASSOC);
    }
    public function delete($id){
        $sql = "DELETE FROM `category` WHERE `id` = '$id'";
        $query = mysqli_query($this->connect,$sql);
        return mysqli_affected_rows($this->connect);
    }
    public function getCategory($id){
        $sql = "SELECT * FROM `category` WHERE `id` = '$id'";
        $query = mysqli_query($this->connect,$sql);
        return mysqli_fetch_assoc($query);
    }
    function update($name,$id){
        $sql = "UPDATE `category` SET `name` = '$name' WHERE `id`= $id";
        mysqli_query($this->connect,$sql);
        return mysqli_affected_rows($this->connect);
    }
}

?>