<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once'script.php';?>
</head>
<body>
    <?php include_once'header.php';?>
        <div class="row container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style="solid royalblue; margin-top:50px">
                <h1 class="text-primary" style="borderbottom:2px solid; padding:20px">List</h1>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Gender</th>
                            <th>Date of Birth</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                                include_once'connection.php';
                                $sql = 'select * from employees';
                                $result = $con->query($sql);
                                if($result->num_rows>0){
                                    while($row = $result->fetch_assoc()){
                                        $id = $row['emp_id'];
                                        $Username = $row['emp_name'];
                                        $Gender = $row['gender'];
                                        $Dob = $row['dob'];
                                        echo("
                                            <tr>
                                                <td>$Username</td>
                                                <td>$Gender</td>
                                                <td>$Dob</td>
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
</body>
</html>