<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <style>
        .center{
            color: black;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
        session_start();
        if($_SESSION['userid']){
            header("location:login.php");
        }
        if(isset($_POST['submit'])){
        $addList = $_POST['username']."-". $_POST['email']."-". $_POST['phone']. "-". $_POST['gender']. "/n";
        fwrite($list, $addList);
        fclose($list);
        // hear("location:")
        }
    ?>
    <div class="container-fluid">
        <nav class="navbar navbar-light bg-info">
            <span class="navbar-brand mb-0 h1">This is Niptict (; You won't be able to cry after join NIPTICT </span>
        </nav>
        <div class="row">
            <div class="col-md-5" style="border-right:2px solid royalblue; margin-top:100px">
                <h1 class="center">Register</h1>
                <form action="register.php" method="POST">
                    <label for="name" class=" col-form-label">Userame </label><br>
                    <input type="text" class="col-md-11" placeholder="Username" name="username" required>
                    <br>
                    <label for="name" class=" col-form-label">Email </label><br>
                    <input type="text" class="col-md-11" placeholder="Username" name="email" required>
                    <br>
                    <label for="name" class=" col-form-label">Phone Number </label><br>
                    <input type="text" class="col-md-11" placeholder="Username" name="phone" required>
                    <br>
                    <label for="gender" class="col-form-label">Gender</label>
                        <select id="gender" class="form-control col-md-11" name="gender">
                            <option selected value="">Male</option>
                            <option>Female</option>
                            <option>Other</option>
                        </select>
                    <br>
                    <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                </form>
            </div>
            <div class="col-md-7" style="margin-top:100px">
                <h1 class="center">List</h1>
                <div class="row" style="border-top:2px solid black; margin-left:3px; margin-right: 3px">
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Gender</th>
                                <th scope="col">School</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $list = fopen("list.txt","r");
                            while(!feof($list)){
                                $eachLine = fgets($list);
                                $data = explode("-", $eachLine);

                                if($eachLine){
                                    echo "<tr>";
                                        echo "<td>".$data[0]."</td>";
                                        echo "<td>".$data[1]."</td>";
                                        echo "<td>".$data[2]."</td>";
                                        echo "<td>".$data[3]."</td>";
                                        echo "<td> CS3 </td>";
                                    echo "</tr>";
                                }                
                            }
                            fclose($list);
                        ?>
                        </tbody>
                    </table>
                    
                </div>
                    <div class="row" style="border-top:2px solid black; margin-left:3px; margin-right: 3px"> </div>
            </div>
        </div>
    </div>
</body>
</html>