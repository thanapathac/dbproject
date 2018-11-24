<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "09a94FDE42739";
$dbname = "homework";

$conn = mysqli_connect("$servername","$username","$password","$dbname");
/*$conn = new PDO("mysql:host=127.0.0.1:3306;dbname=homework", $username, $password);*/
// try {
//    
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//     }
if(isset($_POST["sent"])){
	$action=$_POST["sent"];

	$query = "SELECT * FROM employee WHERE sname = '$action'";
 	$show = mysqli_query($conn, $query) or die ("Error");
 	echo "<table border='2px' align = 'center' ><tr><td>sid</td><td>sname</td><td>did</td></tr>";

 	while($row = mysqli_fetch_array($show)){
		echo "<tr><td>" . $row['sid'] . "</td><td>" .$row["sname"] . "</td><td>" . $row["did"] . "</td></tr>";
 	}
 	echo "</table>";
}

?> 