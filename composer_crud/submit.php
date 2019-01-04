<?php
    include_once'connection.php';

    $Username = $_POST['username'];
    $Gender = $_POST['gender'];
    $Dob = $_POST['dob'];
    $Posi = $_POST['position'];
    
    // else {
        $sql = "INSERT INTO employees (emp_name,gender,dob) VALUES ('$Username','$Gender','$Dob')";

        if ($con->query($sql) === TRUE){
            $message = "swal({
                title: 'Inserted!',
                text: 'Here's a custom image.',
                imageUrl: 'thumbs-up.jpg'
            })";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script> location.href='register.php'</script>";
               
        }else{
            $message = "Data not inserted.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script> location.href='register.php'</script>";
        }
    // }
?>