<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "09a94FDE42739";
$dbname = "dbproject";

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
	$query = "SELECT * FROM supplier NATURAL JOIN suppliertype WHERE SType = '$action'";
 	$show = mysqli_query($conn, $query) or die ("Error");
 	echo "<table class='table'>
  <thead class='bgthead'>
    <tr>
      <th scope='col' class ='textTable col-centered' style='max-width: 16.66%'>COMPANY NAME</th>
      <th scope='col' class ='textTable col-centered' style='max-width: 16.66%'>ADDRESS</th>
      <th scope='col' class ='textTable col-centered' style='max-width: 16.66%'>TEL_NUMBER</th>
    </tr>
  </thead>
  <tbody>";

 	while($row = mysqli_fetch_array($show)){
		echo "<tr>
			      <th scope='row' style='max-width: 16.66%' class='bg'>" . $row['SCompanyName'] ."</th>
			      <td style='max-width: 16.66%' class='bg'>".$row["Address"] . "</td>
			      <td style='max-width: 16.66%' class='bg'>" . $row["Tel_Number"] . "</td>
			    </tr>";
 	}
 	echo "</tbody>
		</table>";
}

?> 


    <!-- "<tr><td>" . $row['SCompanyName'] . "</td><td>" .$row["Address"] . "</td><td>" . $row["Tel_Number"] . "</td></tr>"; -->
		