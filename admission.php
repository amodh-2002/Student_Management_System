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
            <h1 style="margin-bottom: 4rem; padding-top:4rem;">Applied for admission</h1>
            <br> <br>
            <table border="1px" style="border-collapse:collapse;">
                <tr>
                    <th style="padding: 20px; font-size: 15px">Name</th>
                    <th style="padding: 20px; font-size: 15px">Email</th>
                    <th style="padding: 20px; font-size: 15px">Phone</th>
                    <th style="padding: 20px; font-size: 15px">Message</th>
                </tr>

                <?php
                while($info = $result->fetch_assoc()){
                ?>

                <tr>
                    <td style="padding: 20px; font-size: 15px"> <?php echo "{$info['name']}"; ?> </td>
                    <td style="padding: 20px; font-size: 15px"> <?php echo "{$info['email']}"; ?> </td>
                    <td style="padding: 20px; font-size: 15px"> <?php echo "{$info['phone']}"; ?> </td>
                    <td style="padding: 20px; font-size: 15px"> <?php echo "{$info['message']}"; ?> </td>
                </tr>
                <?php
                }
                ?>
            </table>
        </center> 
    </div>
</body>
</html>