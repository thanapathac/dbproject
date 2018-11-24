<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', 'root', 'IBC');

// REGISTER USER
if (isset($_POST['donate_btn'])) {
  // receive all input values from the form
  $Amount = mysqli_real_escape_string($db, $_POST['Amount']);
  $ComName = mysqli_real_escape_string($db, $_POST['ComName']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  //if (empty($username)) { array_push($errors, "Username is required"); }
  /*/if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }*/

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  
  $user_check_query = "SELECT ComName FROM Company WHERE ComName='$ComName' ";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
      //$query1 = "INSERT INTO NonUser VALUES()";
      //mysqli_query($db, $query1);
      $query0 = "INSERT INTO Donation (DonationDate,Amount,DonationNumber) VALUES(CURDATE(),$Amount,(SELECT ID FROM Company WHERE ComName='$ComName'))";
      mysqli_query($db, $query0);
  }
  // Finally, register user if there are no errors in the form
  	//$password = md5($password_1);//encrypt the password before saving in the database
  else{
  	$query1 = "INSERT INTO NonUser VALUES()";
    $query2 = "INSERT INTO Company (ComName , ID) value ('$ComName' , last_insert_id())";
    $query3 = "INSERT INTO Donation (DonationDate,Amount,DonationNumber) VALUES(CURDATE(),$Amount,last_insert_id())";
    mysqli_query($db, $query1);
    mysqli_query($db, $query2);
  	mysqli_query($db, $query3);

  	}
}
