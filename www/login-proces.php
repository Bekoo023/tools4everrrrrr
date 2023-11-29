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
                    $_SESSION['email'] = $gebruiker['email'];
                    $_SESSION['password'] = $gebruiker['password'];

                    if ($gebruiker['role'] === 'administrator') {
                        header("location: admin-dashboard.php");
                        exit();
                    } elseif ($gebruiker['role'] === 'customer') {
                        header("location: dashboard.php");
                        exit();
                    }
                }
            }

            if (empty($_POST['emailForm']) || empty($_POST['passwordForm'])) {
                header("location: login.php");
            }
        }
    }
}
