
<?php
	function redirect($page='insert.php'){
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
	$addr = $_POST['address'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$telno = $_POST['tel'];
	$ssn2 = $_POST['ssn'];
	$pass = $_POST['password'];
	$email2 = $_POST['email'];
	$course2 = $_POST['course1'];
	$check = "0";
	$check2 = "0";
	
	//$sql = "UPDATE member SET MemberID='$new' WHERE MemberID='$user' and Password='$pass' ";
	$sql2 = "SELECT CourseID FROM Course";
	$result2 = $conn->query($sql2);
	if ($result2->num_rows > 0) {
   		// output data of each row
    	while($row = $result2->fetch_assoc()) {
        	//echo "courseid " . $row["CourseID"];
    		// echo strcmp($row["CourseID"],$course2)==0;
    		// echo gettype($course2);
    		if(strcmp($row["CourseID"],$course2)==0){
    			$check="1";
    		}
    	}
 	}
 	if($user=="" || $addr=="" || $fname==""||$lname==""||$telno==""||$ssn2==""||$pass==""||$email2==""||$course2==""){
		$check="3";
	}
 	$sql3 = "SELECT Username FROM Member";
	$result3 = $conn->query($sql3);
	if ($result3->num_rows > 0) {
   		// output data of each row
    	while($row = $result3->fetch_assoc()) {
        	//echo "courseid " . $row["CourseID"];
    		// echo strcmp($row["CourseID"],$course2)==0;
    		// echo gettype($course2);
    		if(strcmp($row["Username"],$user)==0 ){
    			$check="2";
    		}
    	}
 	}
	if($check=="1"){
		$sql = "INSERT INTO Member (Username,Address,Firstname,Lastname,tel_number,ssn,password,email) VALUES ('$user','$addr','$fname','$lname','$telno','$ssn2','$pass','$email2') "; 

		if ($conn->query($sql) == TRUE) {
 			redirect();
 			//echo 'test';
 		} else {
    		//echo "Error change username : " . $conn->error;
			myAlert("This username is already used.","insert.php");
		}
		$conn->close();
	}
	else if($check=="0"){
		myAlert("Wrong Course","insert.php");
	}
	else if($check=="2"){
		myAlert("This username is already used.","insert.php");
	}
	else if($check=="3"){
		myAlert("Please fill in all informations.","insert.php");
	}
?>
