<?php

require 'database.php';

$sql = "SELECT * FROM tools";

$result = mysqli_query($conn, $sql);

$all_tools = mysqli_fetch_assoc($result);

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