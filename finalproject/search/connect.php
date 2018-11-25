<?php
$servername = "127.0.0.1:3306";
$username = "root";
$password = "09a94FDE42739";
$dbname = "homework";

try {
    $conn = new PDO("mysql:host=127.0.0.1:3306;dbname=homework", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?> 