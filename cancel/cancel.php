<html>
<head>
	<title>cancel</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="cancel.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
	
</head>
<body>
<div class="pink">
	<p><img src="logo.png" style=" width: 60"> Sport Center</p>
	</div>
	<div>
		<h1>CANCEL RESERVATION</h1>
	</div>
	<button type="btn" id="k">cancel</button>
	<script type="text/javascript" src="logic.js"></script>
</body>
</html>
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