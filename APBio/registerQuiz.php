

<?php
session_start();

	//define all host information needed to perform a 
	//connection with the database
	$db_host = 'localhost';
	$db_username = 'root';
	$db_pass = 'root';
	$db_name = 'bio';

	//create a connection
	$conn = new mysqli('localhost', $db_username, $db_pass, $db_name);

	//define each variable retrieved from the 
    //form in addQuestion.php
    $quizName = $_POST["quizName"];
	$question = $_POST["question"];
	$option1 = $_POST["option1"];
	$option2 = $_POST["option2"];
	$option3 = $_POST["option3"];
    $option4 = $_POST["option4"];
    $answer1= $_POST["answer"];
	$question2 = $_POST["question2"];
	$option2_1 = $_POST["option2-1"];
	$option2_2 = $_POST["option2-2"];
	$option2_3 = $_POST["option2-3"];
    $option2_4 = $_POST["option2-4"];
    $answer2= $_POST["answer2"];
    $question3 = $_POST["question3"];
	$option3_1 = $_POST["option3-1"];
	$option3_2 = $_POST["option3-2"];
	$option3_3 = $_POST["option3-3"];
    $option3_4 = $_POST["option3-4"];
    $answer3= $_POST["answer3"];
    $question4 = $_POST["question4"];
	$option4_1 = $_POST["option4-1"];
	$option4_2 = $_POST["option4-2"];
	$option4_3 = $_POST["option4-3"];
    $option4_4 = $_POST["option4-4"];
    $answer4= $_POST["answer4"];
    $question5 = $_POST["question5"];
	$option5_1 = $_POST["option5-1"];
	$option5_2 = $_POST["option5-2"];
	$option5_3 = $_POST["option5-3"];
    $option5_4 = $_POST["option5-4"];
    $answer5= $_POST["answer5"];

	//check connection
	//verification that the inputs has been added 
	//to the Database
	if( $conn->connect_error){
		die("CONNECTION FAILED: ". $conn->connect_error);
	} 
	//add to the question table using query 
	$sql = "INSERT INTO Quiz VALUES(NULL,'$quizName' ,'$question','$option1','$option2','$option3','$option4','$answer1','$question2','$option2_1','$option2_2','$option2_3','$option2_4','$answer2','$question3','$option3_1','$option3_2','$option3_3','$option3_4','$answer3','$question4','$option4_1','$option4_2','$option4_3','$option4_4','$answer4','$question5','$option5_1','$option5_2','$option5_3','$option5_4','$answer5')";
	//store questionID in var
	if ($conn->query($sql) === TRUE) {
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
    }
    

	$conn->close();
?>
<html>
<!-- this file is to add the information retrieved 
from the addQuestion.html to a database -->
<head>
    <title>AP Biology</title>
    <link href="visual.css" rel="stylesheet" />
</head>
<div class="sidenav">
    <a href="teacherPage.html">Home</a>
    <a href="addQuiz.html">Add Quiz</a>
    <a href="gradeBook.php">Grade Book</a>
    <a href="addContent.html">Content</a>
</div>



</html>