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

                    session_start();
                    $_SESSION['user_id'] = $gebruiker['id'];
                    $_SESSION['email'] = $gebruiker['email'];
                    $_SESSION['voornaam'] = $gebruiker['firstname'];
                    $_SESSION['achternaam'] = $gebruiker['lastname'];
                    $_SESSION['password'] = $gebruiker['password'];
                    $_SESSION['role'] = $gebruiker['role'];

                    header("location: dashboard.php");
                }
            }
        }
    }
}
