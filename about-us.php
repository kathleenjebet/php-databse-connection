<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="zalego";

$conn =mysqli_connect($server,$username,$password,$database);
if (isset ( $_POST['submitbutton']))
{
      $emailaddress = $_POST['emailaddress'];

    $insertData =mysqli_query($conn, "INSERT INTO subscribers(emailaddress)VALUES('$emailaddress')");
    if($insertData){
        echo "Data submitted successfuly";
    }
    else
     {
        echo "Connection failed" .mysqli_error($conn);
     }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.html">
</head>
<body>
    <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top-shadow">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Zalego Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menus">
            <div class="navbar-nav">
                <a href="index.html" class="nav-link active">Home</a>
                <a href="index.html" class="nav-link">About Us
                    
                </a>
                <a href="#" class="nav-link">Contact Us</a>
                <a href="#" class="nav-link">Location</a>
            </div>
        </div>
    </div>
</nav> -->

    <main class="p-5 bg-light text-dark">
        <h1>About Us</h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero maxime quam cupiditate accusantium praesentium cumque mollitia ipsa labore! Ex, similique.
        </p>

    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-2 pb-5">
                <h1>Our Program</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nesciunt in ratione quibusdam possimus non. Suscipit nihil soluta consectetur ullam, optio veniam natus quam animi nisi similique corrupti iure neque!
                </p>
            </div>
            <div class="col-lg-6">
                <img src="/images/jess-bailey-q10VITrVYUM-unsplash.jpg" alt="computer keyboard" height="200vh" width="300px ">
            </div>
            <h1>The Programs </h1>
            <div class="row pt-3 pb-4">
                <div class="col-sm-3">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">Skill Discovery</h5>
                      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, optio!.</p>
                      <a href="#" class="btn btn-primary">View Details</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="card ">
                    <div class="card-body">
                      <h5 class="card-title">Upskilling Program</h5>
                      <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, doloremque.</p>
                      <a href="#" class="btn btn-primary">view Details</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Path finding Program</h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Similique, optio!.</p>
                        <a href="#" class="btn btn-primary">View Details</a>
                      </div>
                    </div>
                  </div>
              </div>

        </div>
        <div class="row p-5">
            <p style="font-size:x-large; "  > <h6>
                Subscribe to get information latest news about <br> Zalego Academy </h6> </p>
        </div>
        <form class="row"  action="about-us.php" method="POST">

            <div class=" col-auto ">
                <input type="email" name="emailaddress" class="form-control" placeholder="Your email address" >
            </div>
            <div class=" col-auto mb-5">
                <button type="submit" name="submitbutton" class="btn btn-primary">Subscribe</button> 
            </div>
        </form >
        <hr>
        <footer>
            &copy;copyright2022 
        </footer>
    </div>
  <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>  
  <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>