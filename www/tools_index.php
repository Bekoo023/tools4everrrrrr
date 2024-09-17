<?php

require 'database.php';

$sql = "SELECT * FROM tools";

$result = mysqli_query($conn, $sql);

$all_tools = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID:</th>
                <th>Naam:</th>
                <th>Categorie:</th>
                <th>Prijs:</th>
                <th>Merk:</th>
                <th>Info:</th><br>
                <form action="search.php" method="get">
                    <input type="text" name="search" id="search" placeholder="Zoek naar gereedschap">
                    <button type="submit" name="search_submit">Zoek</button>
                </form>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_tools as $tool) : ?>
                <tr>
                    <td>
                        <p><?php echo $tool["tool_id"] ?></p>
                    </td>
                    <td>
                        <p><?php echo $tool["tool_name"] ?></p>
                    </td>
                    <td>
                        <p><?php echo $tool["tool_category"] ?></p>
                    </td>
                    <td>
                        <p><?php echo $tool["tool_price"] ?></p>
                    </td>
                    <td>
                        <p><?php echo $tool["tool_brand"] ?></p>
                    </td>
                    <td><button><a href="tools_detail.php?id=<?php echo $tool["tool_id"] ?>"> Klik voor meer info</a></button></td>
                    <td><button><a href="tools_delete.php?id=<?php echo $tool["tool_id"] ?>"> Verwijder</a></button></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>