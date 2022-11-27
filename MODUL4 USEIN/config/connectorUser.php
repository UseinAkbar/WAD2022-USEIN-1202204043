<?php 
    $dbhost = 'localhost:3308';
    $dbname = 'wad_modul4_usein';
    $dbuser = 'root';
    $dbpassword = '';

    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    $connectionUser = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

    // if($connection == true) {
    //     echo 'it works!';
    // }
?>