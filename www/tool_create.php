<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="tools_create_proces.php" method="post">

        <label for="tool_name">Naam:</label>
        <input type="text" name="tool_name" id="tool_name"><br>

        <label for="tool_category">Categorie:</label>
        <input type="text" name="tool_category" id="tool_category"><br>

        <label for="tool_price">Prijs:</label>
        <input type="text" name="tool_price" id="tool_price"><br>

        <label for="tool_brand">Merk:</label>
        <input type="text" name="tool_brand" id="tool_brand"><br>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>