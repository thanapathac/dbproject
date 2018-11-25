
<?php
	function redirect($page='update.php'){
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
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 

	// sql to delete a record

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$new = $_POST['newusername'];
	$check ="0";
	$sql2 = "SELECT Username,Password FROM Member";
	$result2 = $conn->query($sql2);
	if ($result2->num_rows > 0) {
   		// output data of each row
    	while($row = $result2->fetch_assoc()) {
        	if(strcmp($row["Username"],$user)==0 && strcmp($row["Password"],$pass)==0){
    			$check="1";
    			break;
    		}else if(strcmp($row["Username"],$user)==1 || strcmp($row["Password"],$pass)==1){
    			$check="2";
    		}
    	}
 	}
	$sql3 = "SELECT Username FROM Member";
	$result3 = $conn->query($sql3);
	if ($result3->num_rows > 0) {
   		// output data of each row
    	while($row = $result3->fetch_assoc()) {
        	//echo "courseid " . $row["CourseID"];
    		// echo strcmp($row["CourseID"],$course2)==0;
    		// echo gettype($course2);
    		if(strcmp($row["Username"],$new)==0){
    			$check="3";
    		}
    	}
 	}
	if($check=="1"){
		$sql = "UPDATE member SET Username='$new' WHERE Username='$user' and Password='$pass' ";

		if ($conn->query($sql) == TRUE) {
 			//redirect();
 			//echo 'test';
 			myAlert("Change Username Successfully.","update.php");
 		} else {
    		echo "Error change username : " . $conn->error;
		}
		$conn->close();
	}
	else if($check=="2"){
		myAlert("Wrong Username or Password","update.php");
	}
	else if($check=="3"){
		myAlert("This new username is already used.","update.php");
	}
?>