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
$sql = "SELECT * FROM user WHERE usertype ='student'";
$result = mysqli_query($data,$sql);



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
            <h1 style="margin-bottom: 4rem; padding-top:4rem;">Student Data</h1>
            <br> <br>
            <table border="1px" style="border-collapse:collapse;">
                <tr>
                    <th style="padding: 20px; font-size: 15px">User</th>
                    <th style="padding: 20px; font-size: 15px">Email</th>
                    <th style="padding: 20px; font-size: 15px">Phone</th>
                    <th style="padding: 20px; font-size: 15px">Password</th>
                    <th style="padding: 20px; font-size: 15px">Delete</th>
                    <th style="padding: 20px; font-size: 15px">Update</th>
                </tr>

                <?php
                while($info = $result->fetch_assoc()){
                ?>

                <tr>
                    <td style="text-align: center; padding: 20px;"><?php echo "{$info['username']}"; ?></td>
                    <td style="text-align: center; padding: 20px;"><?php echo "{$info['email']}"; ?></td>
                    <td style="text-align: center; padding: 20px;"><?php echo "{$info['phone']}"; ?></td>
                    <td style="text-align: center; padding: 20px;"><?php echo "{$info['password']}"; ?></td>
                    <td style="text-align: center; padding: 20px;"><?php echo "<a onClick =\" javascript:return confirm('Are you sure you wanna delete it');\" style ='text-decoration:none; color:red' href='delete.php?student_id={$info['id']}'>Delete</a>"; ?></td>
                    <td style="text-align: center; padding: 20px;"><?php echo "<a style ='text-decoration:none; color:green' href='update_student.php?student_id={$info['id']}'>Update</a>"; ?></td>
                </tr>
                <?php 
                }
                ?>
            </table>
        </center>
    </div>
</body>
</html>