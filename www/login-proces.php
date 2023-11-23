<?php

if(isset($_POST['submit'])){
    if(isset($_POST['email']) && isset($_POST['password'])){
        if(!empty($_POST['email']) && !empty($_POST['password'])){

            $emailForm = $_POST['email'];
            $passwordForm = $_POST['password'];

            require 'database.php';

            $sql = "SELECT * FROM users WHERE email= '$emailForm'";
            $result = mysqli_query($conn, $sql);

            if(mysqli_num_rows($result) > 0){
                $gebruiker = mysqli_fetch_assoc($result);

                if($gebruiker['password'] == $passwordForm){
                    echo "Je bent ingelogd";
                    header("location: index.php");
                }
            }
        }
    }
}