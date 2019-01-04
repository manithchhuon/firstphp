<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once'script.php';?>
</head>
<body>
    <?php include_once'header.php';?>
        <div class="row container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style="solid royalblue; margin-top:50px">
                <h1 class="text-primary" style="borderbottom:2px solid; padding:20px">List Student</h1>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>School</th>
                            <th>Email</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                include_once'connection.php';
                                $sql = 'select * from student';
                                $result = $con->query($sql);
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()){
                                        $id = $row['Student_id'];
                                        $Username = $row['Username'];
                                        $Gender = $row['Gender'];
                                        $School = $row['School'];
                                        $Email = $row['Email'];
                                        $Profile = $row['St_Profile'];
                                        echo("
                                            <tr>
                                                <td>$Username</td>
                                                <td>$Gender</td>
                                                <td>$School</td>
                                                <td>$Email</td>
                                                <td>
                                                    <img width='60'px height='auto' src='img/$Profile' alt='loading'
                                                </td>
                                                <td>
                                                    <a href='edit.php?id=$id' class='btn btn-light mr-3 col-sm'>Edit</a>
                                                </td>
                                                <td>
                                                    <button type='button' class='btn-danger ml-3 col-sm'>Delete</button>
                                                </td>
                                            
                                            </tr>
                                        
                                        ");
                                    }
                                }
                                
                            ?>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <?php include_once'footer.php';?>
</body>
</html>