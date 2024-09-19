<?php
$servername  = "localhost";
$username = "root";
$password = "";
$dbname = "tools4ever";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
}

    catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }