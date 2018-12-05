<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<!-- website title //css file linked visual.css -->

<head>
    <!-- website title-->
    <title>AP Biology</title>
    <link href="visual.css" rel="stylesheet" />
</head>

<body>
    <!--the header of the page contains a link to 
    home page and to questions -->
    <header>
        <nav>
            <h1>AP Biology</h1>
            <ul>
                <li><a href="login.php">Login</a></li>
                <!-- login page hyperlink-->
                <li><a href="index.html">Registration</a></li>
                <!-- registration page hyperlink-->

            </ul>

        </nav>

    </header>
    <p>Login Bellow:</p>
    
                
    <!-- login form-->
    <form name="LoginForm" action="userPage.php" method="POST">
       Email Address: <input type="email" name="email" required> <br>
       Password: <input type="password" name="pass" required><br> 
       Student/Teacher:<select name="Type">
                <option value="student">Student</option>
                <option value="teacher">Teacher</option>
       <input type="submit" class="btn btn-primary btn-md" role="button"><br />
    </form>
</body>
</html>