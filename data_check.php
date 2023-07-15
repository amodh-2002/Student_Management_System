<?php

session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolProject";

$data = mysqli_connect($host,$user,$password,$db);


if($data === false)
{
    die("Connection Error");
}

if(isset($_POST["apply"])){
    $data_name = $_POST["name"];
    $data_email = $_POST["email"];
    $data_message = $_POST["message"];
    $data_phone = $_POST["phone"];

    $sql = "INSERT INTO admission(name,email,phone,message) 
    VALUES('$data_name','$data_email','$data_phone','$data_message') ";

    $result = mysqli_query($data,$sql);

    if($result){
        $_SESSION["message"] ="Your Application is successfully sent";
        header("location:index.php");
    }
    else{
        $_SESSION["message"] ="Your Application failed sent";
        header("location:index.php");
    }
}







?>