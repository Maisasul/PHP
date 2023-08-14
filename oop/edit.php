<?php
session_start();
require "lib/category.php";
if(empty($_SESSION['user'])){
    header("location: login.php");
}
$category = new category;

if(isset($_POST['name'])){
    $name =$_POST['name'];
    $id = $_POST['id'];
    $res =  $category->update($name,$id);
    if($res){
        header("location: index.php");
    }
}else {
    $row =  $category->getCategory($_GET['id']);
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
        Category Name:<input value="<?= $row['name']; ?>" type="text" name="name">
        <input type="hidden" name="id" value="<?= $row['id']; ?>">
        <input type="submit" value="Update">
    </form>
</body>
</html>