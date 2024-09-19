<?php

require 'database.php';

$sql = "SELECT * FROM tools";

$stmt = $conn->prepare($sql);
$result = $stmt->execute();

$all_tools = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


</body>

</html>