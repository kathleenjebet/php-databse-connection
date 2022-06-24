<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
</head>
<body>
    <!--navbar starts here-->
    <nav class="navbar navbar-expand-lg bg-light fixed-top-shadow">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Zalego Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menus">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menus">
                <div class="navbar-nav">
                    <a href="home.html" class="nav-link active">Home</a>
                    <a href="about us.html" class="nav-link">About Us  </a>
                    <a href="enroll.php" class="nav-link btn btn-primary">Register now</a>
                    <a href="#" class="nav-link">Location</a>
                </div>
            </div>
        </div>
    </nav>
    <main class="p-5 bg-dark  text-success mb-4 ">
        <h1>Welcome,Kathleen Jebet</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi reiciendis ipsa itaque quis, nam sed sit consectetur illum perferendis excepturi.</p>
        <button class="btn btn-primary">Learn More</button>
    </main>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <h1>Header1</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisici
                    ng elit. Dolor, qui, nisi assumenda soluta laborum molestiae doloribus vero iste ea maiores, quas aliquam explicabo sequi dolores accusantium velit. Nisi, corrupti est.</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            <div class="col-lg-4 col-md-6">
                <h1>Header2</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisici
                    ng elit. Dolor, qui, nisi assumenda soluta laborum molestiae doloribus vero iste ea maiores, quas aliquam explicabo sequi dolores accusantium velit. Nisi, corrupti est.</p>
                <button class="btn btn-primary">View Details</button>
            </div>
            <div class="col-lg-4 col-md-6">
                <h1>Header3</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisici
                    ng elit. Dolor, qui, nisi assumenda soluta laborum molestiae doloribus vero iste ea maiores, quas aliquam explicabo sequi dolores accusantium velit. Nisi, corrupti est.</p>
                <button class="btn btn-primary">View Details</button>
            </div>
        </div>
        <!-- contact us starts here -->
        <div class="row pt-5">
            <h1>Register now</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, illo error rerum quibusdam ea delectus corporis repudiandae tempora ratione suscipit, quisquam quod iure debitis aliquam laborum hic alias, esse architecto.
            </p>
            <form>
                <div class="row"> 
                   <div class="mb-3 col-lg-6 ">
                        <label for="firstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" placeholder="Enter your first name" >
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="secondname" class="form-label">Second Name</label>
                        <input type="text" class="form-control" placeholder="Enter your second name" >
                    </div>    
                </div>
                <div class="row"> 
                    <div class="mb-3 col-lg-6 ">
                        <label for="phonenumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" placeholder="Enter your phone number" >
                    </div>
                    <div class="mb-3 col-lg-6">
                        <label for="emailaddress" class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter your email address" >
                    </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-12">
                        <label for="message" class="form-label">Your Message </label>
                        <textarea cols="30" rows="5" class="form-control"></textarea>
                    </div>
                </div>
               <button type="submit" class="btn btn-primary">Send a Message</button>

            </form>
            <!-- End Contact Us -->
            <footer>
                &copy;Zalego Academy2022
            </footer>
            <hr>
        </div>
    </div>
  
    


    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
</body>
</html>