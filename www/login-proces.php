<?php

if (isset($_POST['submit'])) {
    if (!isset($_POST['email']) && !isset($_POST['password'])) {
        if (empty($_POST['email']) && empty($_POST['password'])) {

            $email = $_POST['emailForm'];
            $password = $_POST['passwordForm'];

            require 'database.php';

            $sql = "SELECT * FROM users WHERE email= '$email'";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $gebruiker = mysqli_fetch_assoc($result);

                if ($gebruiker['password'] == $password) {
                    echo "Je bent ingelogd";
                    header("location: index.php");
                }
            }
        }
    }
}
