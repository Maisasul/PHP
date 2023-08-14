<?php
session_start();
if(empty($_SESSION['user'])){
    header("location: login.php");
}

require "lib/category.php";
$category = new category;
if(isset($_POST['name'])){  
    $name = $_POST['name'];
    $user_id = $_SESSION['user']['id'];
    $res = $category->add($name,$user_id);
    if($res){
        echo "<h1>category added</h1>";
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
        Category Name:<input type="text" name="name">
        <input type="submit" value="ADD">
    </form>
</body>
</html>