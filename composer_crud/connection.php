<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "employee";
    // $con = mysqli_connect('localhost','root','');
    
    // if(!$con)
    // {
    //     echo " not connected";
    // }
    // if(!mysqli_select_db($con,'employee'))
    // {
    //     echo "Database not select";
    // }
    use SimpleCrud\SimpleCrud;

    $pdo = new PDO($dsn, $username, $password);

    $db = new SimpleCrud($pdo);

    //To get any table, use magic properties, they will be instantiated on demand:
    $post = $db->employees;
?>