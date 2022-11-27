<?php 
    if(!isset($_COOKIE['remember'])) {
        unset($_COOKIE['email']);
        unset($_COOKIE['password']);
        setcookie('email', '', time() - 3600, '/');
        setcookie('password', '', time() - 3600, '/');
    }

    unset($_COOKIE['no_hp']);
    unset($_COOKIE['warna']);
    unset($_COOKIE['nama']);
    setcookie('no_hp', '', time() - 3600, '/');
    setcookie('warna', '', time() - 3600, '/');
    setcookie('nama', '', time() - 3600, '/');
    
    header('Location: ../index.php');
?>