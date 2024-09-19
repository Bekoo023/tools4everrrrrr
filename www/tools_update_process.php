<?php

require 'database.php';

$sql = "SELECT * FROM tools";
$stmt = $conn->prepare($sql);
$result = $stmt->execute();

$all_tools = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!isset($_POST['submit'])) {
    echo "Je hebt niet op de knop gedrukt";
    exit;
  }
  
  if (!isset($_POST['tool_name']) || !isset($_POST['tool_category']) || !isset($_POST['tool_price']) || !isset($_POST['tool_brand'])) {
    echo "Een van de vereiste invulvelden wordt niet correct meegestuurd";
    exit;
  }
  
  if (empty($_POST['tool_name'])) {
    echo "Je moet wel een naam opgegeven!!";
    exit;
  }
  
  if (empty($_POST['tool_category'])) {
    echo "Je moet wel een categorie opgegeven!!";
    exit;
  }
  
  if (empty($_POST['tool_brand'])) {
    echo "Je moet wel een merk opgegeven!!";
    exit;
  }
  
  if (empty($_POST['tool_price'])) {
    echo "Je moet wel een prijs opgegeven!!";
    exit;
  }
  
  if (strlen($_POST['tool_name']) <= 3) {
    echo "De naam moet minstens 3 karakters bevatten";
    exit;
  }

$tool_name = $_POST['tool_name'];
$tool_category = $_POST['tool_category'];
$tool_brand = $_POST['tool_brand'];
$tool_price = $_POST['tool_price'];
$tool_id = $_POST['tool_id'];

$sql = "UPDATE tools 
  SET tool_name = :name_placeholder,
    tool_category = :category_placeholder,
    tool_brand = :brand_placeholder,
    tool_price = :price_placeholder 
  WHERE tool_id = :id_placeholder";

$stmt = $conn->prepare($sql);
$stmt->bindParam(":name_placeholder", $tool_name);
$stmt->bindParam(":category_placeholder", $tool_category);
$stmt->bindParam(":brand_placeholder", $tool_brand);
$stmt->bindParam(":price_placeholder", $tool_price);
$stmt->bindParam(":id_placeholder", $tool_id);

$stmt->execute();

header('Location: tools_index.php');
exit;