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
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-7" style="solid royalblue; margin-top:50px">
                <h1>Register</h1>
                <div class="form-group row" style="margin-top:50px">
                    <label class=" col-form-label col-sm-4 pt-0">Username </label>
                    <input type="text" class="col-sm-8" placeholder="Username" name="username" required>
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Gender</legend>
                        <div class="col-sm-8">
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
                    <label class=" col-form-label col-sm-4">Position</label>
                    <select class="custom-select col-sm-8" name ="position">
                        <option selected>Position</option>
                        <option value="">HR</option>
                        <option value="">Assistant</option>
                        <option value="">Develop</option>
                        <option value="">Intern</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label class=" col-form-label col-sm-4" for="input Dob">Date of birth:</label>
                    <input type="Date" class="form-control col-sm-8" name="dob" placeholder="dd/mm/yyyy">
                </div>
                <div class="form-group row">
                    <div class="col-sm-2 mg">
                        <input type="submit" class="btn btn-primary" value="Register" name="submit">
                    </div>
                </div>
            </div> 
        </div>
    </form>
 </body>
</html>