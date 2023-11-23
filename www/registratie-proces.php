<?php

if ($_SERVER['REQUEST_METHOD'] != "POST") {
    echo "niet de juist methode gebruikt";
    exit;
}

if (!isset($_POST['emailForm']) || !isset($_POST['passwordForm']) || !isset($_POST['voornaamForm']) || !isset($_POST['achternaamForm']) || !isset($_POST['addressForm']) || !isset($_POST['cityForm']) || !isset($_POST['isActiveForm']) || !isset($_POST['roleForm'])) {
    echo "een van van de velden is niet";
    exit;
}
if (empty($_POST['emailForm']) || empty($_POST['passwordForm']) || empty($_POST['voornaamForm']) || empty($_POST['achternaamForm']) || empty($_POST['addressForm']) || empty($_POST['cityForm']) || empty($_POST['isActiveForm']) || empty($_POST['roleForm'])) {
    echo "een van van de velden is leeg";
    exit;
}

require 'database.php';

$email = $_POST['emailForm'];
$voornaam = $_POST['voornaamForm'];
$achternaam = $_POST['achternaamForm'];
$adres = $_POST['addressForm'];
$stad = $_POST['cityForm'];
$password = $_POST['passwordForm'];
$isactief = $_POST['isActiveForm'];
$role = $_POST['roleForm'];

$sql = "INSERT INTO users (email, firstname, lastname, address, city, password, is_active, role) VALUES ('$email', '$voornaam', '$achternaam', '$adres', '$stad', '$password', '$isactief', '$role')";

mysqli_query($conn, $sql);
