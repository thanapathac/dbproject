
<?php
	function redirect($page='delete.php'){
		header("Location: $page");
		exit;
	}
	$servername = "127.0.0.1:4848";
	$username = "root";
	$password = "";
	$dbname = "registration";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	// sql to delete a record
	$user = $_POST['username'];
	$sql = "DELETE FROM users WHERE username='$user'";

	if ($conn->query($sql) == TRUE) {
 		redirect();
 		//echo $_POST['username'];
	} else {
    	echo "Error deleting record: " . $conn->error;
	}
	$conn->close();
?>