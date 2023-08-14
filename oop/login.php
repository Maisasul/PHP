<?php
session_start();
require "lib/user.php";
$user = new user;
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $res = $user->login($email,$password);
    // print_r($res);
    $_SESSION['user'] = $res;
    header("location: add.php");
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
        Email:<input type="text" name="email">
        Password:<input type="password" name="password">
        <input type="submit" value="Login" > 
    </form>
</body>
</html>