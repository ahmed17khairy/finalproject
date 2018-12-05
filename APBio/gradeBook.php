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


$sql = "SELECT * FROM Student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>User ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Grade</th>

    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //assigning each question with a var to ease the call
        echo "<tr>";
        echo "<td>" . $row['UserID'] . "</td>";
        echo "<td>" . $row['FName'] . "</td>";
        echo "<td>" . $row['LName'] . "</td>";
        echo "<td>" . $row['grades'] . "</td>";

        echo "</tr>";
        }
        echo "</table>";
    }else {
        echo "0 results";
    }
    mysqli_close($conn);
    ?>