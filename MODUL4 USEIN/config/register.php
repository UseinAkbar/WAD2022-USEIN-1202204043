<?php
    include "connectorUser.php";

    $email = $_POST['email'];
    $nama = $_POST['nama'];
    $noHP = $_POST['no_hp'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    $query = mysqli_query($connectionUser, "SELECT * from `user_usein` where email = '$email'");
    $rows = mysqli_num_rows($query);

    if($rows) {
        echo "Account already exist! Try another account.";
    } else {
        if($password == $confirmPassword) {
            $query = mysqli_query($connectionUser, "INSERT INTO user_usein(nama, email, password, no_hp) VALUES('$nama','$email','$password','$noHP')");
    
            if($query) {
                // $queryId = mysqli_query($connection, "SELECT * FROM `user_usein` WHERE email = '$email'");
                // $idUser = mysqli_fetch_assoc($queryId);
                setcookie('nama', $nama, time()+86400*30, '/');
                setcookie('email', $email, time()+86400*30, '/');
                setcookie('no_hp', $noHP, time()+86400*30, '/');
    
                header('Location: ../index.php?page=login');
            }
        } else {
            echo "Password doesn't match";
        }
    }

?>