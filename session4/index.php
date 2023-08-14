<?php
require "lib/category.php";
session_start();
if(empty($_SESSION['user'])){
    header("location: login.php");
}

$data = show();

// echo "<pre>";
// print_r($data);
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
    <?php if($_SESSION['user']['admin'] == 1) :?>
    <h3><a href="add.php">Add Category</a></h3>
    <?php endif; ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>User ID</th>
            <th></th>
        </tr>
        <?php foreach ($data as $c) : ?>
            <tr>
                <td><?php echo $c['id']; ?></td>
                <td><?php echo $c['name']; ?></td>
                <td><?php echo $c['user_id']; ?></td>
                <?php if($_SESSION['user']['admin'] == 1): ?>
                <td><a href="delete.php?id=<?= $c['id']; ?>">Delete</a></td>
                <td><a href="edit.php?id=<?= $c['id']; ?>">Edit</a></td>
                <<?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>