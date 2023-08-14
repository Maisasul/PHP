<?php

//add
// if(isset($_POST['email'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];
//     $connect = mysqli_connect("Localhost","root","","code_academy");
//     $sql = "INSERT INTO `student`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
//     mysqli_query($connect,$sql);
// }

//delete
// $id = $_POST['id'];
// $connect = mysqli_connect("Localhost","root","","code_academy");
// $sql = "DELETE FROM `student` WHERE `id` = '$id'";
// mysqli_query($connect,$sql);

// update
// $id = $_POST['id'];
// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = $_POST['password'];
// $connect = mysqli_connect("Localhost","root","","code_academy");
// $sql = "UPDATE `student` SET `name` = '$name', `email` = '$email', `password` = '$password' WHERE `id` = '$id'";
// mysqli_query($connect,$sql);

$connect = mysqli_connect("Localhost","root","","code_academy");
$sql = "select * from `student`";
$mysql = mysqli_query($connect,$sql);
$data = mysqli_fetch_all($mysql,MYSQLI_ASSOC);
foreach($data as $value){
    foreach($value as $key => $v){
        echo $key." : ".$v."<br>";
    }
    echo "<hr>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="submit" value="register">
    </form> -->

    <!-- <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="id" placeholder="id">
    <input type="submit" name="DELETE" value="DELETE">
    </form> -->

    <!-- <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
        <input type="text" name="id" placeholder="id">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="submit" value="update">
    </form> -->
</body>
</html>