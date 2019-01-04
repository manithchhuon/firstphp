<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "niptict";
    $con = mysqli_connect('localhost','root','');
    
    if(!$con)
    {
        echo " not connected";
    }
    if(!mysqli_select_db($con,'niptict'))
    {
        echo "Database not select";
    }
    
?>