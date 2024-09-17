<?php

require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if(!empty($_GET['search'])){

        $tool_name = $_GET['search'];
        $sql = "SELECT * FROM tools WHERE tool_name = '$tool_name'";
        $result = mysqli_query($conn, $sql);

        $tools = mysqli_fetch_assoc($result);

    }
    else{
        echo "Zoekveld is leeg";
    }
}

echo $tools['tool_name'];
echo $tools['tool_category'];
echo $tools['tool_price'];
echo $tools['tool_brand'];

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