<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <?php include_once 'script.php';?>
</head>

<body>
    <?php include_once 'header.php' ?>
    <?php 
        include_once 'connection.php';
        // $conn = new mysqli($servername, $username, $password,$dbname);
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // }
        $id = $_GET['id'];
        $sql = "select * from student s where s.id=$id" or die($conn->error) ;
        $result=$con->query($sql);
        $row = $result->fetch_assoc();
        $username=$row['Username'];
        $gender=$row['Gender'];
        $school=$row['School'];
        $email=$row['Email'];
        $profile=$row['Profile'];
    ?>
    <div class="container-fluid">
            <h3>
                <?php
                        if (!empty($_GET['message'])){
                            $message = $_GET['message'];
                            echo "<div class='my-3 alert alert-danger'>$message</div>";
                        }
                    ?>
            </h3>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <form class="my-3" action="edit2.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name='id' value=<?php echo ($id); ?>>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input required type="text" value=<?php echo $username; ?> name="username" class="form-control" id="username">
                    </div>
                    <div class="form-group">
                        <label for="mail">Mail:</label>
                        <input required type="text" value="<?php echo $email; ?>" name="email" class="form-control" id="mail">
                    </div>
                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        Male
                        <input type="radio"<?php if($gender=='Male'){echo "checked";}?> name="gender" id="male" value="Male"> Female
                        <input type="radio"<?php if($gender=='Female'){echo "checked";}?> name="gender" id="female" value="Female"> Other
                        <input type="radio"<?php if($gender=='Other'){echo "checked";}?> name="gender" id="other" value="Other">
                    </div>
                    <div class="form-group">
                        <label for="scool">School:</label>
                        <select required class="form-control" name="school" id="school">
                            <option value=<?php echo $gender; ?> >Select School</option>
                            <option value="Coputer Science">Coputer Science</option>
                            <option value="E-commerce">E-commerce</option>
                            <option value="Telecom and Networking">Telecom and Networking</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input value=<?php echo $password;?> required class="form-control" type="password" name="pwd" id="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password:</label>
                        <input value=<?php echo $password;?>  required class="form-control" type="password" name="Confirm Password" id="">
                    </div>
                    <div class="form-group">
                        <label for="profile">Profile:</label>
                        <input type="file" name="image" />
                    </div>
                    <input required type="submit" class="btn btn-primary" value="submit">
                </form>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">

            </div>
        </div>
        <?php include_once 'footer.php' ?>
    </div>
    <?php
        mysqli_close($conn);
    ?>
</body>

</html>
