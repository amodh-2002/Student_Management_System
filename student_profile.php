<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location:login.php");
}
elseif($_SESSION["usertype"] == "admin"){
    header("location:login.php");
}

$host = "localhost";
$user = "root";
$password = null;
$db = "schoolProject";

$data = mysqli_connect($host,$user,$password,$db);
$name = $_SESSION['username'];


$sql = "SELECT * FROM user WHERE username = '$name'";
$result = mysqli_query($data,$sql);

$info = mysqli_fetch_assoc($result);


if(isset($_POST['update_profile'])){
    $profile = $_POST['update_profile'];
    $s_email = $_POST['email'];
    $s_phone = $_POST['phone'];
    $s_password = $_POST['password'];

    $sql2 = "UPDATE user SET email='$s_email',phone='$s_phone',password='$s_password' WHERE username='$name'";
    $result2 = mysqli_query($data,$sql2);

    if($result2){
        header("location:studenthome.php");
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
   include 'student_sidebar.php';
   ?>
    <div class="main">
        <center>
        <h1>My Profile</h1>
        <br> <br>
        <div class="mainDiv">
        <form action="#" method="POST">
            <div class="mainContent">
                <input type="text" name="email" id="" placeholder="Enter Email" value="<?php echo "{$info['email']}" ?>">
            </div>
            <div class="mainContent">
                <input type="text" name="phone" id="" placeholder="Enter Phone" value="<?php echo "{$info['phone']}" ?>">
            </div>
            <div class="mainContent">
                <input type="password" name="password" id="" placeholder="Enter Password" value="<?php echo "{$info['password']}" ?>">
            </div>
            
            <input type="submit" class="addBtn" value="Update" name="update_profile" >
        </form>
        </div>
        </center>
    </div>
</body>
</html>