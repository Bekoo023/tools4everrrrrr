<?php

if(!isset($_GET["id"])){

}

$id = $_GET["id"];

$sql = "DELETE FROM tools4ever WHERE tools_id = :tool_id";
