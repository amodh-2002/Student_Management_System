<?php 

error_reporting(0);
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
$id = $_GET['student_id'];
$sql = "SELECT * FROM user WHERE id='$id'";
$result = mysqli_query($data,$sql);

$info = $result->fetch_assoc();

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $query = "UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id = '$id'";
    $result = mysqli_query($data,$query);

    if($result){
        header("location:view_student.php");
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Update Page</title>
    <link rel="stylesheet" href="admin.css">

</head>
<body>
    <?php 
    include 'admin_sidebar.php';
    ?>
   <div class="main">
        <center>
            <h1 style="margin-bottom: 4rem; padding-top:4rem;">Update Student Data</h1>
            <div class="mainDiv">
            <form action="#" method="POST">
                <div class="mainContent">
                    <input type="text" name="name" id="" placeholder="Enter Name" value="<?php echo "{$info['username']}" ?>">
                </div>
                <div class="mainContent">
                    <input type="text" name="email" id="" placeholder="Enter Email" value="<?php echo "{$info['email']}" ?>">
                </div>
                <div class="mainContent">
                    <input type="text" name="phone" id="" placeholder="Enter Phone" value="<?php echo "{$info['phone']}" ?>">
                </div>
                <div class="mainContent">
                    <input type="password" name="password" id="" placeholder="Enter Password" value="<?php echo "{$info['password']}" ?>">
                </div>
                
            <input type="submit" class="addBtn" value="Update" name="update" >
        </form>
        </div>
        </center>
    </div>
</body>
</html>