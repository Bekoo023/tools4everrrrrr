<?php

require 'database.php';

if (!isset($_GET['id'])) {
  echo "Er mist een id parameter";
  exit;
}

$id = $_GET['id'];

$sql = "SELECT * FROM tools WHERE tool_id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if (!$stmt->execute()) { 
  echo "Er is iets fout gegaan, probeer het later weer";
  exit;
}

$tool = $stmt->fetch(PDO::FETCH_ASSOC);

if (empty($tool)) {
  echo "De data is niet correct opgehaald";
  exit;
}
?>

<header>
  <h1>Update Tool</h1>
</header>

<form action="tools_update_process.php" method="post">
  <div class="form-group">
    <label for="tool_name">Naam tool</label>
    <input type="text" name="tool_name" id="tool_name" value="<?php echo $tool['tool_name']?>">
  </div>
  <div class="form-group">
    <label for="tool_category">Categorie</label>
    <input type="text" name="tool_category" id="tool_category" value="<?php echo $tool['tool_category']?>">
  </div>
  <div class="form-group">
    <label for="tool_price">Prijs</label>
    <input type="number" name="tool_price" id="tool_price" value="<?php echo $tool['tool_price']?>">
  </div>
  <div class="form-group">
    <label for="tool_brand">Merk</label>
    <input type="text" name="tool_brand" id="tool_brand" value="<?php echo $tool['tool_brand']?>">
  </div>
  <input type="hidden" name="tool_id" value="<?php echo $_GET['id']?>">
  <button type="submit" name="submit">Update tool</button>
</form>
