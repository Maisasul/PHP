<?php
session_start();
require "lib/category.php";
if(empty($_SESSION['user'])){
    header("location: login.php");
}
$category = new category;

$res = $category->delete($_GET['id']);
if($res) {
    header("location: index.php");
}
?>
