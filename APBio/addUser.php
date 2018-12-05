
<?php
session_start();

	//testing on howlong it takes to connect to the database and insert to the database
	$connTimeBefore = microtime(true);

	//define all host information needed to perform a 
	//connection with the database
	$db_host = 'localhost';
	$db_username = 'root';
	$db_pass = 'root';
	$db_name = 'bio';
	//create a connection
	
	$conn = new mysqli('localhost', $db_username, $db_pass, $db_name);
	//--------------------------------------------------------------------------------
	//define each variable retrieved from the 
	//form in addUser.php
	$fName = $_POST["firstName"];
	$lName = $_POST["LastName"];
	$email = $_POST["EmailAddress"];
	$password = $_POST["Password"];
	$date_Of_Birth = $_POST["DOB"];
	$type = $_POST["Type"];
    //--------------------------------------------------------------------------------
	//check connection if the connection is not valid disconnect with the message below
	//verification that the inputs has been added 
	//to the Database
	if( $conn->connect_error){
		die("CONNECTION FAILED: ". $conn->connect_error);
	
	} 
	//--------------------------------------------------------------------------------
	//add the data according to the type of the user (Student - Teacher)
	//the sql bellow for the STUDENT registration
	/*
	//test code here 
	$n=0;
	while($n< 200){
		$sql = "INSERT INTO Student Values(NULL, 'ahmed','ahmed','ahmed@g.com','ahmed','2000-1-1','student')";
		if ($conn->query($sql) === TRUE ) {
			$connTimeafter = microtime(true);
			//echo ($connTimeafter-$connTimeBefore);
		} 	
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$n++;
	
	//endshere
}*/
	//check the type of the usert
	if ($type == "student"){
		//query to register the student in the user table
		$sql0 = "INSERT INTO User Value(NULL, '$type') ";
		if ($conn->query($sql0) === TRUE ) {
			//the ud of the user stored to be used in the next query
			$userID = mysqli_insert_id($conn);
		} 	
		else {
			echo "Error: " . $sql0 . "<br>" . $conn->error;
		}
	//query to add the user in the student
		$sql = "INSERT INTO Student Values($userID, '$fName','$lName','$email','$password','$date_Of_Birth','$type',0)";
		//Student input verification
		if ($conn->query($sql) === TRUE ) {
			$connTimeafter = microtime(true);
			//to print the test value
			//echo ($connTimeafter-$connTimeBefore);
		} 	
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	//--------------------------------------------------------------------------------
	//the sql bellow for the TEACHER registration
	if($type == "teacher"){
		//query to register the teacher in the user table
		$sql0 = "INSERT INTO User Value(NULL, '$type') ";
		if ($conn->query($sql0) === TRUE ) {
			//the ud of the user stored to be used in the next query
			$userID = mysqli_insert_id($conn);
		} 	
		else {
			echo "Error: " . $sql0 . "<br>" . $conn->error;
		}
	//query to add the user in the teacher
		$sql = "INSERT INTO Teacher Values($userID, '$fName','$lName','$email','$password','$date_Of_Birth','$type')";
		//Teacher input verification
		if ($conn->query($sql) === TRUE ) {
			$connTimeafter = microtime(true);
			//to print the test value
			//echo ($connTimeafter-$connTimeBefore);
		} 	
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	//close connection*/
	$conn->close();
?>
<html>
<!-- this file is to add the information retrieved 
from the index.php to a database -->
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