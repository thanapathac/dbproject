<?php
$PPrice = "";
$search_result="" ;
$search_result1="" ;
$orderID = "";
$totalprice = "";
$valueToSearch = $_POST['valueToSearch'];
$getinfo = "SELECT distinct orderID ,PPrice,LineID,LQuantity,totalprice ,userID From orders natural join LineItem natural join LineItemProduct natural join Product where orderID LIKE '%".$valueToSearch."%'";
if(isset($_POST['search'])){
    // search in all table columns
    // using concat mysql function
    //$query = "SELECT * FROM `users` WHERE CONCAT(`id`, `fname`, `lname`, `age`) LIKE '%".$valueToSearch."%'";
    $query = "SELECT orderID ,PPrice,Pname,LineID,LQuantity,LPrice,totalprice,OrderDate,shipAddr  From orders natural join LineItem natural join LineItemProduct natural join Product where orderID LIKE '%".$valueToSearch."%'";
    $connect = mysqli_connect("localhost", "root", "root", "IBC");
    $search_result1=mysqli_query($connect, $query);

    $search_result = filterTable($query);


    }
if(isset($_POST['update'])){
    //$query = "SELECT orderID  From orders natural join LineItem natural join LineItemProduct natural join Product where orderID LIKE '%".$valueToSearch."%'";
    $connect = mysqli_connect("localhost", "root", "root", "IBC");
    $mysqli = new mysqli("localhost", "root", "root", "IBC");
    $i = 0;
    if ($result = $mysqli->query($getinfo)) {    
     while ($row = $result->fetch_object()) {
        $Quatity = $_POST['Quatity'][$i];
        $orderID = $row->orderID;
        $PPrice = $row->PPrice;
        $LineID = $row->LineID;
        $totalprice = $row->totalprice;
        $query = "UPDATE LineItem set LPrice = $Quatity*$PPrice where orderID=$orderID and LineID = $LineID ";
        mysqli_query($connect, $query);
        $i++;
    }
    $result->close();
    $query1 = "UPDATE orders set totalprice = (select sum(LPrice) from LineItem where orderID =$orderID)  where orderID=$orderID";
    mysqli_query($connect, $query1);
}
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
        <title>Update</title>
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
    <h2>Update</h2>
  </div>
        
        <form action="update.php" method="post">
        	<div class="input-group">
            <input type="text" name="valueToSearch" placeholder="OrderID"><br><br>
        </div>
          <div class="input-group">
            <button type="submit" class="btn" name="search">Search</button><br><br>
            </div>
            <?php if ($row = mysqli_fetch_array($search_result1)) {
                # code...
                echo "OrderID : \n";
                echo $row['orderID']."<br>";
                echo "Total Price:\n";
                echo $row['totalprice'];
                echo "<br>";
                echo "OrderDate:\n";
                echo $row['OrderDate'];
                echo "<br>";
                echo "Shipping Address:\n";
                echo $row['shipAddr'];

                }

                ?>

            <table>
                <tr>
                    <th>OrderID</th>
                    <th>LineID</th>
                    <th>Product Name</th>
                    <th>Quatity</th>
                    <th>Price</th>


                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>  
                    <td><?php echo $row['orderID'];?></td>
                    <td><?php echo $row['LineID'];?></td>
                    <td><?php echo $row['Pname'];?></td>
                    <td><input type="text" name="Quatity[]" placeholder="Quatity"><br><br></td>
                    <td><?php echo $row['LPrice'];?></td>
                </tr>
                <?php endwhile;?>
            </table>

            <td><button type="submit" class="btn" name="update">update</button></td>
        </form>
        
    </body>
</html>