
<?php
	function redirect($page='delete.php'){
		header("Location: $page");
		exit;
	}
	function myAlert($msg, $url){
    	echo '<script language="javascript">alert("'.$msg.'");</script>';
    	echo "<script>document.location = '$url'</script>";
	}
	$servername = "127.0.0.1:4848";
	$username = "root";
	$password = "";
	$dbname = "registration";
	$check = "0";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	// sql to delete a record
	$user = $_POST['username'];
	$pass = $_POST['password'];

	$sql2 = "SELECT Username,Password FROM Member";
	$result2 = $conn->query($sql2);
	if ($result2->num_rows > 0) {
   		// output data of each row
    	while($row = $result2->fetch_assoc()) {
        	if(strcmp($row["Username"],$user)==0 && strcmp($row["Password"],$pass)==0){
    			$check="1";
    		}else if(strcmp($row["Username"],$user)==1 || strcmp($row["Password"],$pass)==1){
    			$check="2";
    		}
    	}
 	}
 	if($check=="1"){
		$sql = "DELETE memberreserve FROM member NATURAL JOIN memberreserve  WHERE Username='$user' and Password='$pass' ";
		if ($conn->query($sql) == TRUE) {
 			redirect();
 		} else {
    		echo "Error cancel reservation: " . $conn->error;
		}
		$conn->close();
	}
	else if($check=="2"){
		myAlert("Wrong Username or Password","delete.php");
	}
?>