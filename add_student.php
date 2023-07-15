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
$sql = "SELECT * FROM admission";
$result = mysqli_query($data,$sql);


if(isset($_POST['add_student'])){
    $user_name=$_POST['name'];
    $user_email=$_POST['email'];
    $user_phone=$_POST['phone'];
    $user_password=$_POST['password'];
    $usertype = "student";

    $check = "SELECT * FROM user WHERE username ='$user_name'";
    $check_user = mysqli_query($data,$check);

    $row_count = mysqli_num_rows($check_user);
    if($row_count == 1){
        echo "<script type ='text/javascript'>
        alert('Username already exsist');
        </script>";
    }
    else{
        

    $sql = "INSERT INTO user(username,phone,email,usertype,password) VALUES ('$user_name','$user_phone','$user_email','$usertype','$user_password')";
    $result = mysqli_query($data,$sql);

    if($result){
        echo "<script type ='text/javascript'>
        alert('Uploaded Successfully');
        </script>";
    }
    else{
        echo "<script type ='text/javascript'>
        alert('Upload Failed');
        </script>";
    }
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
        <h1 style="margin-bottom: 4rem; padding-top:4rem;">Add students</h1>
        <div class="mainDiv">
        <form action="#" method="POST">
            <div class="mainContent">
                <input type="text" name="name" id="" placeholder="Enter Name">
            </div>
            <div class="mainContent">
                <input type="text" name="email" id="" placeholder="Enter Email">
            </div>
            <div class="mainContent">
                <input type="text" name="phone" id="" placeholder="Enter Phone">
            </div>
            <div class="mainContent">
                <input type="password" name="password" id="" placeholder="Enter Password">
            </div>
            
            <input type="submit" class="addBtn" value="Submit" name="add_student" >
        </form>
        </div>
       </center>
    </div>
</body>
</html>