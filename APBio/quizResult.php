<?php
session_start();

//define all host information needed to perform a 
	//connection with the database
	$db_host = 'localhost';
	$db_username = 'root';
	$db_pass = 'root';
    $db_name = 'bio';
    $totalCorrect = 0;
    $answer1 = $_POST['choice1'];
    $answer2 = $_POST['choice2'];
    $answer3 = $_POST['choice3'];
    $answer4 = $_POST['choice4'];
    $answer5 = $_POST['choice5'];

    
$conn=mysqli_connect($db_host,$db_username,$db_pass,$db_name);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql = "SELECT * FROM Quiz";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //assigning each question with a var to ease the call
        $correct1 = $row["answer1"];
        $correct2 = $row["answer2"];
        $correct3 = $row["answer3"];
        $correct4 = $row["answer4"];
        $correct5 = $row["answer5"];
        if ($answer1 == $correct1) { $totalCorrect++; }
        if ($answer2 == $correct2) { $totalCorrect++; }
        if ($answer3 == $correct3) { $totalCorrect++; }
        if ($answer4 == $correct4) { $totalCorrect++; }
        if ($answer5 == $correct5) { $totalCorrect++; }
    
    }
} else {
    echo "0 results";
}
$user = $_SESSION["MAIL"];
$calculateGrades = $totalCorrect * 100 / 5;
$sql1 = "UPDATE Student SET grades='$calculateGrades' WHERE Email= '$user'";

if ($conn->query($sql1) === TRUE) {

} else {
    echo "Error updating record: " . $conn->error;
}


mysqli_close($conn);
?>
<html>

<!-- this file is to add the information retrieved 
from the addQuestion.html to a database -->

<style>
    body {
        font-family: "Lato", sans-serif;
    }
    
    .sidenav {
        height: 100%;
        width: 160px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
    }
    
    .sidenav a {
        padding: 6px 8px 6px 16px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
    }
    
    .sidenav a:hover {
        color: #f1f1f1;
    }
    
    .main {
        margin-left: 160px;
        /* Same as the width of the sidenav */
        font-size: 28px;
        /* Increased text to enable scrolling */
        padding: 0px 10px;
    }
    
    @media screen and (max-height: 450px) {
        .sidenav {
            padding-top: 15px;
        }
        .sidenav a {
            font-size: 18px;
        }
    }
</style>


<head>
    <link href="visual.css" rel="stylesheet" />
    
</head>
<body>
    <div class="sidenav">
        <a href="studentPage.html">Home</a>
        <a href="showQuiz.php">Quiz</a>
        <a href="showGrade.php">Grade</a>
        <a href="#content">Content</a>
    </div>
<div class="main">
<p>
<?php
if ($calculateGrades > 90){
    echo "Keep It Up, ";
    echo $calculateGrades;
    echo "%";
}
else{
    echo "Try Again, ";
    echo $calculateGrades;
    echo "%";
}
?></p>

    <div class="main">
       
     </div>
