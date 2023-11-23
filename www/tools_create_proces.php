<?php

if($_SERVER['REQUEST_METHOD'] != "POST"){
    echo "niet de juist methode gebruikt";
    exit;
}

if (!isset($_POST['tool_name']) || !isset($_POST['tool_category']) || !isset($_POST['tool_price']) || !isset($_POST['tool_brand'])) {
    echo "een van van de velden is niet";
    exit;
}
if (empty($_POST['tool_name']) || empty($_POST['tool_category']) || empty($_POST['tool_price']) || empty($_POST['tool_brand'])) {
    echo "een van van de velden is leeg";
    exit;
}

require 'database.php';

$naam = $_POST['tool_name'];
$categorie = $_POST['tool_category'];
$prijs = $_POST['tool_price'];
$merk = $_POST['tool_brand'];


$sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) VALUES ('$naam', '$categorie', '$prijs', '$merk')";

if(mysqli_query($conn, $sql)){
    echo "succelvol toegevoegd";
    exit;
}
