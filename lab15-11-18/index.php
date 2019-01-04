<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Niptict</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include_once'script.php';?>
    </head>
    <body>
        <?php include_once'header.php';?>
        <?php include_once'connection.php';?>
        <div class="row container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" style="solid royalblue; margin-top:50px">
                <h1 class="text-primary" style="border-bottom:2px solid; padding:20px">List Student</h1>
                <div class="row">
                    <?php
                        $sql = 'select * from student';
                        $result = $con->query($sql);
                        if($result->num_rows>0){
                            while($row = $result->fetch_assoc()){
                                $Username = $row['Username'];
                                $Gender = $row['Gender'];
                                $School = $row['School'];
                                $Email = $row['Email'];
                                $Profile = $row['St_Profile'];
                                echo("
                                    <div class='card col-sm-4' style='margin-top:50px'>
                                        <img class='card-img-top' src='img/$Profile' alt='image'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$Username</h5>
                                        </div>
                                        <ul class='list-group list-group-flush'>
                                            <li class='list-group-item'>Gender : $Gender</li>
                                            <li class='list-group-item'>Email : $Email</li>
                                            <li class='list-group-item'>School : $School</li>
                                        </ul>
                                    </div>
                                ");
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-sm-1"></div>
        
        <?php include_once'footer.php';?>
    </body>
</html>