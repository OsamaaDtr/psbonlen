<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $nama_database= "db_psb";
    
    $db = mysqli_connect($hostname, $username, $password, $nama_database);

    if(!$db){
        echo 'error : '.mysqli_connect_error($db);
    }
    


?>
