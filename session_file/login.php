<?php
    $userid = "b20160096";


    session_start();

    
    $Username = $_POST['username'];
    $Gender = $_POST['gender'];
    $School = $_POST['school'];
    $Email = $_POST['email'];
    $Password = $_POST['password'];
    $Profile = $_POST['profile'];

    // if(isset($_SESSION['userid'])){
    //     echo "<script> location.href='register.php'</script>";

    // }else{
    //     if($_POST['userid'] == $userid){
    //         $_SESSION['useid']=$userid;
    //         echo "<script> location.href='register.php'</script>";
    //         echo "hello world";
    //     }else
    //     {
    //         $message = "UserID incorrect.\\nTry again.";
    //         echo "<script type='text/javascript'>alert('$message');</script>";
    //         echo "<script> location.href='index.php'</script>";
    //     }
    // }
?>