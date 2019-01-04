<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <?php include_once'script.php';?>
</head>
<body>
    <?php include_once'header.php';?>
    <form action="process.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7" style="solid royalblue; margin-top:50px">
                <h1>Register</h1>
                <div class="form-group row" style="margin-top:50px">
                    <label class=" col-form-label col-sm-2 pt-0">Username </label>
                    <input type="text" class="col-sm-9" placeholder="Username" name="username" required>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Male" checked>
                                <label class="form-check-label"> Male </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="Female">
                                <label class="form-check-label"> Female </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label class=" col-form-label col-sm-2">School</label>
                    <select class="custom-select col-sm-9" name ="school">
                        <option selected>Select School</option>
                        <option value="Computer Scinece">Computer Scinece</option>
                        <option value="Telecom">Telecom</option>
                        <option value="E-commerce">E-commerce</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class=" col-form-label col-sm-2">Email </label>
                    <input type="text" class="col-sm-9" placeholder="Email" name="email" required>
                </div>
                <div class="form-group row">
                    <label class=" col-form-label col-sm-2">Password </label>
                    <input type="password" class="col-sm-9" placeholder="Password" name="pwd" required>
                </div>
                <div class="form-group row">
                    <label class=" col-form-label col-sm-2">Confirm Password </label>
                    <input type="password" class="form-control form-control col-sm-9" placeholder="Confirm Password" name="ConfirmPassword" required>
                </div>
                <div class="form-group row">
                    <label class=" col-form-label col-sm-2">Profile </label>
                    <input type="file" class="col-sm-9" name = "profile">
                </div>
                <div class="form-group row">
                    <div class="col-sm-2 mg">
                        <input type="submit" class="btn btn-primary" value="Register" name="submit">
                    </div>
                </div>
            </div> 
        </div>
    </form>
    <?php include_once'footer.php';?>
</body>
</html>