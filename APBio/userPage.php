
<?php
session_start();

    //to test the speed of adding user to the database
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
    
	$email = $_POST["email"];
	$password = $_POST["pass"];
    $type = $_POST["Type"];
    $_SESSION["MAIL"] = $email;
    
    //--------------------------------------------------------------------------------
	//check connection if the connection is not valid disconnect with the message below
	//verification that the inputs has been added 
	//to the Database
	if( $conn->connect_error){
		die("CONNECTION FAILED: ". $conn->connect_error);
	} 
	//--------------------------------------------------------------------------------
	//add the data according to the type of the user (Student - Teacher)
	//the sql bellow for the STUDENT login
	if ($type == "student"){
        $sql = "SELECT * FROM Student WHERE '$email' = Email AND '$password' = PASSWORD";
        $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 0) {
                echo "Invalid login! <br />";	
                echo '<a href="'. $_SERVER['HTTP_REFERER'] . '">Try to log in again</a>';
            } else {
                while($row = $result->fetch_assoc()) {
                    header('Location: studentPage.html');
                    exit;
                $connTimeAfter = microtime(true);
                //echo ($connTimeAfter-$connTimeBefore);   

                }
            }
        }
        //the sql bellow for the TEACHER login
        if ($type == "teacher"){
            $sql = "SELECT * FROM `Teacher` WHERE '$email' = Email AND '$password' = PASSWORD";
            $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) == 0) {
                    echo "Invalid login! <br />";	
                    echo '<a href="'. $_SERVER['HTTP_REFERER'] . '">Try to log in again</a>';
                } else {
                    while($row = $result->fetch_assoc()) {
                       
                        header('Location: teacherPage.html');
                        exit;
                    $connTimeAfter = microtime(true);
                   // echo ($connTimeAfter-$connTimeBefore);   
                    }
                }
            }
	$conn->close();
?>