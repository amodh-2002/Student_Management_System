<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:login.php");
}
elseif($_SESSION["usertype"] == "admin"){
    header("location:login.php");
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
   <?php 
   include 'student_sidebar.php';
   ?>
    <div class="main">
        <h1>Sidebar Accordion</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam esse alias numquam amet dolor. In mollitia commodi reiciendis quia natus?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ullam consequuntur itaque quidem quia ratione distinctio tenetur enim ab fuga.
        </p>
    </div>
</body>
</html>