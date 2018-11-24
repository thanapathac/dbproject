<?php 
 	$conn = mysqli_connect('127.0.0.1:4848', 'root', '', 'registration');


	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}	 

	$sql = "SELECT id, username, email FROM users";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
        	echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["email"]. "<br>";
    	}
	} else {
    	echo "0 results";
	}
	$conn->close();

	function e(){
		alert("finish");
		$sql = "DELETE FROM users WHERE username='test'";

	}
?>