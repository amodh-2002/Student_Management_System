<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:login.php");
}
elseif($_SESSION["usertype"] == "student"){
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
    include 'admin_sidebar.php';
    ?>

    <div class="main">
        <h1 style="margin-bottom: 4rem; padding-top:4rem;">Welcome to Admission Dashboard</h1>
        <p style="margin-top: 2rem; width:80% ;">Welcome to your personalized teaching dashboard! Get ready to embark on a seamless journey of educational excellence. Explore, create, and connect with your students like never before. We're here to support your teaching endeavors and provide you with all the tools you need for a successful online classroom experience. Let's make learning engaging and inspiring together. Happy teaching!</p>
    </div>
</body>
</html>