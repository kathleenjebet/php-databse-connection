<?php
$server ="localhost";
$username ="root";
$password ="";
$database ="web2";

$conn =mysqli_connect($server,$username,$password,$database);
if (isset ( $_POST['submitbutton']))
{     
      $fullname=$_POST['fullname'];
      $phonenumber=$_POST['phonenumber'];
      $emailaddress=$_POST['emailaddress'];
      $gender=$_POST['gender'];
      $course=$_POST['course'];

    $insertData =mysqli_query($conn, "INSERT INTO enrollment(fullname,phonenumber,emailaddress,gender,course)VALUES('$fullname','$phonenumber','$emailaddress','$gender','$course')");
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
    <title>enroll</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="index.php">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
   <nav class="navbar navbar-expand-lg bg-light fixed-top-shadow">
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
                 <a href="#" class="nav-link text-white btn btn-primary ">Register Now</a>
                 <a href="#" class="nav-link">Location</a>
                </div>
            </div>
         </div>
      </div>
  </nav>
  <main class="p-5 bg-light  text-dark mb-2 ">
        <h1>JULY SOFTWARE ENGINEERING BOOTCAMP</h1>
        <span><i class="fa fa-calendar-check-o fa-3x"></i></span>
					<span class="float-centre">20th July 2022</span> <br>
          <span><i class="fa fa-map-marker fa-3x"></i></span>
					<span class="float-centre">Zalego Academy, <br>Devan plaza</span>
       
  </main>
  <div class="container ">
    <div class="row">
      <div class="col-lg-12 pt-5 pb-2">
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam possimus adipisci error! Iure amet, tempore, nobis natus accusamus consequatur ex a cumque accusantium at esse odio odit, consectetur deleniti sunt atque!
        </p>
        
      </div>
        
    </div>
  </div>
  <div class="container shadow p-3 mb-5 bg-white rounded   ">
  <form action="enroll.php" method="POST" >
  <h1 class="text-centre text-primary">Sign up today?</h1>
    <div class="row"> 
      <div class="mb-3 col-lg-6 ">
      
           <label for="fullname" class="form-label">Full name:</label>
           <input type="text"  name="fullname" class="form-control" placeholder="Enter your full name" >
       </div>
       <div class="mb-3 col-lg-6">
           <label for="phonenumber" class="form-label">Phone Number:</label>
           <input type="tel" name="phonenumber" class="form-control" placeholder="Enter your phonenumber" >
       </div>    
   </div>
   <div class="row"> 
       <div class="mb-3 col-lg-6 ">
           <label for="emailaddress" class="form-label">Email Address:</label>
           <input type="email"  name="emailaddress"class="form-control" placeholder="Please enter your email" >
       </div>
       <div class="mb-3 col-lg-6">
           <label for="gender"   name="gender"class="form-label">Whats your gender?</label>
           <select class="form-select" name="gender" >
            <option disabled>--select your gender--</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
           </select>
      
       </div>
       <div class="lg-12">
        <p>in oder to complete your registraation in the bootcamp you are required to select one course undertaking.Plese NOTE that will be your learning track during the 2-week immersion</p>
       </div>
       <div class="mb-3 col-lg-6 ">
           <label for="courses" class="form-label">Whats your prefferd course?</label>
           <select class="form-select" name="course">
            <option disabled>--select your course--</option>
            <option value="Androiod App Development">Andriod App Development</option>
            <option value="Web Design and Delopment">Web Design and Delvopmen</option>
            <option value="Data Analysis">Data Analysis</option>
            <option value="Cyber Security">Cyber Security</option>
           </select>
       </div>
       <div class="lg-12">
        <p>
          You agree by providing your information ypu understand all our data privacy and protection policy outlined in our Terms &conditions and the privacy policy stament.
        </p>
       </div>
        <div class="form-check" >
        <input type="checkbox"  class="form-check-input" id="dropdownCheck">
        <label class="form-check-label" for="dropdownCheck">
         <p>
         Agree to terms and conditions
         </p>
        </label>
      </div>
    </div>

    <button type="submit" name="submitbutton" class="btn btn-primary">submit application</button>

  </form>
  
 
  </div>
  <form class="row"  action="about-us.php" method="POST">
  <div class="container text-centre">
    <div class="row">
     <div class="text-center">
       <p>Subscribe to get information latest news about <br>Zalego Academy </p> 
      </div>
      <div class="mb-3 col-lg-6">
       <input type="email" name="emailaddress1" class="form-control" placeholder="Your email address" >
      </div>
      <div class="mb-3 col-lg-6">
       <button type="submit" name="submitbutton1" class="btn btn-primary">Subscribe</button> 
    </div>
  </div>
  </form >
              
 </div>

 <hr>
<footer>
 &copy;Zalego Academy2022
</footer>
</div>  
    
     
<script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>  
  <script src="/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>