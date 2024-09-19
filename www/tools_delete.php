<?php

require 'database.php';

$id = $_GET["id"];

$sql = "DELETE FROM tools WHERE tool_id = :tool_id";

$stmt = $conn->prepare($sql);
$stmt ->bindParam(":tool_id", $id,);
$stmt ->execute();

header('Location: tools_index.php');
exit;