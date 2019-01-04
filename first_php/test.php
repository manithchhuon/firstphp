<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">Hello, CS!</h1>
            <p class="lead">How was your holiday!</p>
            <hr class="my-4">
            <p>Back to school now. It is time for practise</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn less</a>
        </div>
        <h4 class="display-4">without php</h4>
        <div class='col-3'>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="pic/img1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <div class="float-right">
                        <a href="#" class="btn btn-success btn-md ">Go</a>
                        <a href="#" class="btn btn-danger btn-md ">GOn't</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <h4 class="display-4">with php</h4>
        <?php
        $img = ["img1","img2","img3"];
        for($i = 0; $i < 3; $i++) {
            echo "
            <div class='col-3'>
                <div class='card' style='width: 18rem;'>
                    <img class='card-img-top' src='pic/img1.jpg' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>".$img[$i]."</h5>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                        <div class='float-right'>
                            <a href='#' class='btn btn-success btn-md '>Go</a>
                            <a href='#' class='btn btn-danger btn-md '>GOn\'t</a>
                        </div>                    
                    </div>
                </div>
            </div>
            ";
        }
        ?>


    </div>

    

</body>
</html> 