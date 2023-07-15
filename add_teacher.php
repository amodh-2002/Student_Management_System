<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:login.php");
}
elseif($_SESSION["usertype"] == "student"){
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = null;
$db = "schoolProject";

$data = mysqli_connect($host,$user,$password,$db);

if(isset($_POST['add_teacher'])){
    $t_name = $_POST['name'];
    $t_desc = $_POST['desc'];
    $file = $_FILES['image']['name'];

    $dst = "./image".$file;
    $dst_db = "image/".$file;

    move_uploaded_file($_FILES['image']['tmp_name'],$dst);
    // if(move_uploaded_file($_FILES['image']['tmp_name'],$dst)) {
    //     echo 'Received file' . $_FILES['file']['name'] . ' with size ' . $_FILES['file']['size'];
    // } else {
    //     echo 'Upload failed!';
    
    //     var_dump($_FILES['file']['error']);
    // }

    $sql = "INSERT INTO teacher(name,description,image)
    VALUES('$t_name','$t_desc','$dst_db')";
    $result = mysqli_query($data,$sql);
    if($result){
        header("location:add_teacher.php");
    }
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
        <center>
            <h1 style="margin-bottom: 1 rem; padding-top:4rem;">Teacher Dashboard</h1>
            <br> <br>
            <div class="mainDiv">
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mainContent">
                    <input type="text" name="name" id="" placeholder="Enter Teacher Name" >
                </div>
                <div class="mainContent">
                    <input type="text" name="desc" id="" placeholder="Enter Description">
                </div>
                <div class="imgContent">
                    <label for="">Image : </label>
                    <input type="file" name="image" id="" >
                </div>
                
                <input type="submit" class="addBtn" value="Add Teacher" name="add_teacher" >
            </form>
            </div>
        </center>
    </div>
</body>
</html>