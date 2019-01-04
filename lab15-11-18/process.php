<?php
    include_once'connection.php';

    $target_path = "img/";
    if(isset($_FILES['profile'])){
        $errors=array();
        $file_name=$_FILES['profile']['name'];
        $file_size=$_FILES['profile']['size'];
        $file_tmp=$_FILES['profile']['tmp_name'];
        $file_type=$_FILES['profile']['type'];
        $exp=explode('.',$file_name);
        $test=end($exp);
        $file_ext=strtolower($test);
        $expensions=array("jpeg",'jpg','png');
        if(in_array($file_ext,$expensions)===false){
            $errors[]="extension not allow, please choose a JPEG or PNG";
            echo $errors;
        }else{
            move_uploaded_file($file_tmp,"img/".$file_name);
            echo "Success";
            // die();
        }
    }else{
        $errors[]= 'error';
        print_r ($errors);
        // die();
    }

    // die();
    $Username = $_POST['username'];
    $Gender = $_POST['gender'];
    $School = $_POST['school'];
    $Email = $_POST['email'];
    $Pwd = $_POST['pwd'];
    $Confirm = $_POST['ConfirmPassword'];
    if ($Confirm != $Pwd) {
        $message = "Password do not match";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script> location.href='register.php'</script>";
    }
    else {
        $sql = "INSERT INTO student (Username,Gender,School,Email,St_Password,St_Profile) VALUES ('$Username','$Gender','$School','$Email','$Pwd','$file_name')";

        if ($con->query($sql) === TRUE){
            $message = "Data inserted.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script> location.href='register.php'</script>";
        }else{
            $message = "Data not inserted.";
            echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script> location.href='register.php'</script>";
        }
    }
?>