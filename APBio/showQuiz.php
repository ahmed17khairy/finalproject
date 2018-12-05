
<?php
session_start();

	//define all host information needed to perform a 
	//connection with the database
	$db_host = 'localhost';
	$db_username = 'root';
	$db_pass = 'root';
    $db_name = 'bio';
    
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
        $quizName = $row["quizName"];
        $question1 = $row["question1"];
        $choice1 = $row["choice1"];
        $choice2 = $row["choice2"];
        $choice3 = $row["choice3"];
        $choice4 = $row["choice4"];
        $answer1 = $row["answer1"];

        $question2 = $row["question2"];
        $choice2_1 = $row["choice2_1"];
        $choice2_2 = $row["choice2_2"];
        $choice2_3 = $row["choice2_3"];
        $choice2_4 = $row["choice2_4"];
        $answer2 = $row["answer2"];


        $question3 = $row["question3"];
        $choice3_1 = $row["choice3_1"];
        $choice3_2 = $row["choice3_2"];
        $choice3_3 = $row["choice3_3"];
        $choice3_4 = $row["choice3_4"];
        $answer3 = $row["answer3"];


        $question4 = $row["question4"];
        $choice4_1 = $row["choice4_1"];
        $choice4_2 = $row["choice4_2"];
        $choice4_3 = $row["choice4_3"];
        $choice4_4 = $row["choice4_4"];
        $answer4 = $row["answer4"];


        $question5 = $row["question5"];
        $choice5_1 = $row["choice5_1"];
        $choice5_2 = $row["choice5_2"];
        $choice5_3 = $row["choice5_3"];
        $choice5_4 = $row["choice5_4"];
        $answer5 = $row["answer5"];

    
    }
} else {
    echo "0 results";
}
mysqli_close($conn);
?>
<!-- this file is to add the information retrieved 
from the addQuestion.html to a database -->
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
        <p><?php echo $quizName?> </p>
		<form action ="quizResult.php" method = "post" id = "quiz">

        <!-- question 1 partition --> 
        <div class= "question1">
			<p><?php 
				echo $question1; //print the question in php
			?></p>
		</div>
		<!-- creating a form that directs to pollResult.php that shows the results-->
		<!--<form action ="#" method = "post">-->
			<!-- poll radio buttons created using php to get the values -->
			<div class ="question1Answer">
				<div class = "question1Answer">
					<input type = "radio" name = "choice1" value = "a" id = "a1">
					<label for = "a1"><?php echo $choice1?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice1" value = "b" id = "a2">
					<label for = "a2"><?php echo $choice2?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice1" value = "c" id = "a3">
					<label for = "a3"><?php echo $choice3?></label>
				</div>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice1" value = "d" id = "a4">
					<label for = "a4"><?php echo $choice4?></label>
                </div>
                 <!-- question 2 partition --> 
                <p><?php echo $question2; //print the question in php?></p>
                <div class = "question2Answer">
					<input type = "radio" name = "choice2" value = "a" id = "a1">
					<label for = "a1"><?php echo $choice2_1?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice2" value = "b" id = "a2">
					<label for = "a2"><?php echo $choice2_2?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice2" value = "c" id = "a3">
					<label for = "a3"><?php echo $choice2_3?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice2" value = "d" id = "a4">
					<label for = "a4"><?php echo $choice2_4?></label>
                </div>
                 <!-- question 3 partition --> 
                 <p><?php echo $question3; //print the question in php?></p>
                <div class = "question3Answer">
					<input type = "radio" name = "choice3" value = "a" id = "a1">
					<label for = "a1"><?php echo $choice3_1?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice3" value = "b" id = "a2">
					<label for = "a2"><?php echo $choice3_2?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice3" value = "c" id = "a3">
					<label for = "a3"><?php echo $choice3_3?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice3" value = "d" id = "a4">
					<label for = "a4"><?php echo $choice3_4?></label>
                </div>
                 <!-- question 4 partition --> 
                 <p><?php echo $question4; //print the question in php?></p>
                <div class = "question4Answer">
					<input type = "radio" name = "choice4" value = "a" id = "a1">
					<label for = "a1"><?php echo $choice4_1?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice4" value = "b" id = "a2">
					<label for = "a2"><?php echo $choice4_2?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice4" value = "c" id = "a3">
					<label for = "a3"><?php echo $choice4_3?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice4" value = "d" id = "a4">
					<label for = "a4"><?php echo $choice4_4?></label>
                </div>
                 <!-- question 5 partition --> 
                 <p><?php echo $question5; //print the question in php?></p>
                <div class = "question5Answer">
					<input type = "radio" name = "choice5" value = "a" id = "a1">
					<label for = "a1"><?php echo $choice5_1?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice5" value = "b" id = "a2">
					<label for = "a2"><?php echo $choice5_2?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice5" value = "c" id = "a3">
					<label for = "a3"><?php echo $choice5_3?></label>
				</div>
				<div class = "pollAnswer">
					<input type = "radio" name = "choice5" value = "d" id = "a4">
					<label for = "a4"><?php echo $choice5_4?></label>
                </div>
                
                <input type="submit" class="btn btn-primary btn-md" name="submit" role="button"><br />

            </div>
            
            
            
        </form>
    </div>
</body>
</html>