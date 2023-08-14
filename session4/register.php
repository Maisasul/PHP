<?php

require "lib/user.php";

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $res = register($name,$email,$password);

    if($res){
        echo "<h1>user registed</h1>";
        header("location: index.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css">
    <title>Document</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF'];?>" method="post">
        Name: <input type="text" name="name">
        Email: <input type="text" name="email">
        Password: <input type="password" name="password">
        <input type="submit" value="register">
    </form>
</body>
</html>