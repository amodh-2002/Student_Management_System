<?php 

error_reporting(0);
session_start();
session_destroy();

if($_SESSION["message"]){
    $message = $_SESSION["message"];

    echo "<script type ='text/javascript'>
    alert('$message');
    </script>";
}

$host = "localhost";
$user = "root";
$password = null;
$db = "schoolProject";

$data = mysqli_connect($host,$user,$password,$db);
$sql = "SELECT * FROM teacher";

$result =mysqli_query($data,$sql); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JIT Engg</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <nav class="header">
        <!-- <h2 class="headerTitle" >JIT Engg</h2> -->
        <a href="#"><img class="logo" src="./Pictures/logo.png" alt="logo"></a>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#formPlace">Admission</a></li>
            <li><a class="login" href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="section">
        <p class="innerText"> Student Management System </p>
        <img class="mainImg" src="./Pictures/slidingPic.jpeg" alt="mainImg">
    </div>
    <div class="about">
        <div class="left">
            <img class="aboutImg" src="./Pictures/aboutPic.jpeg" alt="aboutImg">
        </div>
        <div class="right">
            <h1 class="aboutText">Welcome to JIT Engg</h1>
            <p style="text-align: justify;" class="aboutDesc">Jyothy Institute of Technology abbreviated as JIT , is affiliated to Visvesvaraya Technological University and is approved by AICTE, New Delhi. JIT was established in the year 2011 under the leadership of Karnataka Rajyothsava Awardee, Dharmika Pravara, Dr. B.N.V Subrahmanya, a visionary par excellence. Since inception JIT has grown to be one of the reputed technical institutions in the city of Bengaluru. 
            Located in Thataguni The construction of a new sports complex has been takenup to groom sports talents. </p>
        </div>
    </div>
    <div class="teacher">
        <h1 class="teacherTitle">Our Teacher</h1>
        <div class="mainSection">
            <?php 
            while($info=$result->fetch_assoc()){

            ?>
            <div class="first">
                <img class="firstImg" src="./Pictures/firstTeacher.jpeg" alt="firstImg">
                <div class="teacherContent">
                    <h3 style="text-align: center; margin:1rem 0rem; color:#112A46; font-weight:600"><?php echo "{$info['name']}" ?></h3>
                    <p style="text-align: justify;"><?php echo "{$info['description']}" ?></p>
                </div>
            </div>
            <?php
            } 
            ?>
        </div>
    </div>
    <div class="project">
        <h1 class="projectTitle">Our Courses</h1>
        <div class="mainSection">
            <div class="first">
                <img class="firstImg" src="./Pictures/mech.jpg" alt="firstImg">
                <p class="firstDesc">Mechanical engineering involves the design, analysis, and development of systems and machines that power various industries, combining principles of physics, mathematics, and materials science to create innovative solutions for the world's mechanical challenges.</p>
            </div>
            <div class="second">
                <img class="secondImg" src="./Pictures/cs.jpeg" alt="secondImg">
                <p class="secondDesc">Computer science explores the theoretical foundations and practical applications of computation, enabling students to understand and develop software, algorithms, and computer systems to solve complex problems and drive technological advancements in various domains.</p>
            </div>
            <div class="third">
                <img class="thirdImg" src="./Pictures/elec.jpeg" alt="thirdImg">
                <p class="thirdDesc"> Electrical engineering focuses on the study and application of electricity, electronics, and electromagnetism, equipping students with the knowledge and skills to design, analyze, and optimize electrical systems and devices, including power systems, communications, and electronic circuits.</p>
            </div>
        </div>
    </div>

    <div class="contact" id="contact">
        <center>
            <h1 class="contactTitle">Contact Us</h1>
        </center>
        <div class="contactSection">
            <div class="left">
                <p class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124481.1950540744!2d77.3592753972656!3d12.840863300000011!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae155daf255555%3A0xb0d9badee8173f84!2sJyothy%20Institute%20of%20Technology!5e0!3m2!1sen!2sin!4v1689400014211!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
            </div>
            <div class="right">
                <div class="contactDetails">
                    <p class="email">Email</p>
                    <span class="emailValue">jit@gmail.com</span>
                    <p class="phone">Phone</p>
                    <span>+91-9845694936</span>
                </div>
                <div class="socialMedia">
                    <ul class="contactUl">
                        <li class="socialIcons"><a target="_blank" href="https://www.facebook.com/jyothyitofficial/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="socialIcons"><a target="_blank" href="https://twitter.com/i/flow/login?redirect_after_login=%2Fjyothyit"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="socialIcons"><a target="_blank" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                        <li class="socialIcons"><a target="_blank" href="https://www.linkedin.com/school/jyothy-institute-of-technology-bangalore/about/"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="socialIcons"><a target="_blank" href="https://www.instagram.com/jyothyitofficial/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="admForm" id="formPlace">
        <h1 class="admTitle">Admission Form</h1>
        <div class="admSection">
            <form action="data_check.php" method="POST">
                <div class="input">
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="input">
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="input">
                    <input type="text" name="phone" placeholder="Enter your Phone Number" required>
                </div>
                <div class="input">
                    <input type="text" name="message" placeholder="Leave some Message" required>
                </div>
                <div class="formDiv">
                    <input type="submit" value="Submit" name="apply">
                </div>
            </form>
        </div>
    </div>
    <footer class="footer">
        <p>All &#169 belongs to JIT Engg</p>
    </footer>
    <!-- <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1>
    <h1>hellooo</h1> -->
</body>
</html>