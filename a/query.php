<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    //$query = "SELECT * FROM `users` WHERE CONCAT(`id`, `fname`, `lname`, `age`) LIKE '%".$valueToSearch."%'";
    $query = "SELECT Fname , Lname ,Pnumber, follower FROM Joins NATURAL JOIN users WHERE EventID like '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
/* else {
    $query = "SELECT * FROM `users`";
    $search_result = filterTable($query);
}*/

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "root", "IBC");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>SEARCH</title>
        <link rel="stylesheet" type="text/css" href="001.css">
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    	  <div class="header">
    <h2>Search</h2>
  </div>
        
        <form action="query.php" method="post">
        	<div class="input-group">
            <input type="text" name="valueToSearch" placeholder="EventID"><br><br>
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="search">Search</button><br><br>
            </div>
            <table>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Follower</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Fname'];?></td>
                    <td><?php echo $row['Lname'];?></td>
                    <td><?php echo $row['Pnumber'];?></td>
                    <td><?php echo $row['follower'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>