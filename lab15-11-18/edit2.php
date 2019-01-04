<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <?php
        include_once 'script.php';
    ?>
</head>
<body>
    <div class="container">
        <?php include_once 'header.php'; ?>
        <?php
            if ($_POST["pwd"] != $_POST["Confirm Password"]){
                header("Location:/assignment/student_register/register.php?message=Password word and comirm Password does not match");
            }

            $name = $_POST['username'];
            $gender = $_POST['gender'];
            $school = $_POST['school'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $id = $_POST['id'];

            try {
                $conn = new PDO("mysql:host=$servername;dbname=niptict", $username, $password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo "Connected successfully";
                }
            catch(PDOException $e)
                {
                echo "Connection failed: " . $e->getMessage();
                }
                if($_FILES['image']['size']){
                $errors= array();
                $file_name = $_FILES['image']['name'];
                $file_size =$_FILES['image']['size'];
                $file_tmp =$_FILES['image']['tmp_name'];
                $file_type=$_FILES['image']['type'];
                $exp=explode('.',$file_name);
                $test=end($exp);
                $file_ext=strtolower($test);
                $expensions= array("jpeg","jpg","png");
                if(in_array($file_ext,$expensions) === false){
                    $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                }
                
                if(empty($errors)==true){
                    move_uploaded_file($file_tmp,"img/".$file_name);
                try{
                    $sql = " UPDATE `student` SET `Username` = '$name', `School`='$school',`Email`='$email',`Gender` = '$gender', `St_Password` = '$password',`profile`='$file_name' WHERE `student`.`id` = '$id';";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    echo "<div >".$stmt->rowCount() . " records UPDATED successfully <div>";
                    echo "<div class='alert alert-success' >Record Update Successfull</div>";
                }
                catch(PDOException $e)
                {
                    echo "<div class='alert alert-danger'>".$sql . "<br>" . $e->getMessage()."</div>";
                }
                }else{
                    echo $file_type;
                    print_r($errors);
                }
            }
            else{
                try{
                    $sql = " UPDATE `student` SET `Username` = '$name', `School`='$school',`Email`='$email',`Gender` = '$gender', `St_Password` = '$password' WHERE `student`.`id` = '$id';";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute();
                    echo "<div class='alert alert-success'".$stmt->rowCount() . " records UPDATED successfully <div>";
                }
                catch(PDOException $e)
                {
                    echo "<div class='alert alert-danger'>".$sql . "<br>" . $e->getMessage()."</div>";
                }
            }
        ?>
        <!-- <div class="d-flex justify-content-center">
            <a href="/index.php">Home</a>
            <a href="/register.php">Back</a>
        </div> -->
        <? include_once 'footer.php'; ?>
    </div>
</body>
</html>