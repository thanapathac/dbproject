<?php
$search_result="" ;
$orderID = "";
$getinfo = "SELECT distinct orderID ,OrderDate,totalprice ,userID From orders natural join LineItem natural join LineItemProduct natural join Product where orderID LIKE '%".$valueToSearch."%'";
if(isset($_POST['search'])){
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    //$query = "SELECT * FROM `users` WHERE CONCAT(`id`, `fname`, `lname`, `age`) LIKE '%".$valueToSearch."%'";
    $query = "SELECT distinct orderID ,OrderDate,totalprice ,userID From orders natural join LineItem natural join LineItemProduct natural join Product where orderID LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

    }
if(isset($_POST['delete'])){
    //$query = "SELECT orderID  From orders natural join LineItem natural join LineItemProduct natural join Product where orderID LIKE '%".$valueToSearch."%'";
    $connect = mysqli_connect("localhost", "root", "root", "IBC");
    $mysqli = new mysqli("localhost", "root", "root", "IBC");
    
    if ($result = $mysqli->query($getinfo)) {    
     while ($row = $result->fetch_object()) {
        $orderID = $row->orderID;
    }
    $result->close();
}
    $query0 = "DELETE from LineItemProduct where orderID = $orderID";
    $query1 = "DELETE from Orders where orderID = $orderID";

     mysqli_query($connect, $query0);

     mysqli_query($connect, $query1);
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
        <title>Delete</title>
        <link rel="stylesheet" type="text/css" href="001.css"/>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
    	  <div class="header">
    <h2>Delete</h2>
  </div>
        
        <form action="delete.php" method="post">
        	<div class="input-group">
            <input type="text" name="valueToSearch" placeholder="OrderID"><br><br>
        </div>
          <div class="input-group">
            <button type="submit" class="btn" name="search">Search</button><br><br>
            </div>
            <table>
                <tr>
                    <th>OrderID</th>
                    <th>OrderDate</th>
                    <th>Totalprice</th>
                    <th>UserID</th>
                    <th>Delete</th>

                </tr>

      <!-- populate table from mysql database -->

                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>  
                    <td><?php echo $row['orderID'];?></td>
                    <td><?php echo $row['OrderDate'];?></td>
                    <td><?php echo $row['totalprice'];?></td>
                    <td><?php echo $row['userID'];?></td>
                   <td><button type="submit" class="btn" name="delete">Delete</button></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>