<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/all.min.css">

    <!--Google font CSS-->
    <link href="https://fonts.googleapis.com/css?family=Gotu&display=swap" rel="stylesheet">
    
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <title>Vroomsters</title>
</head>
<body>

<!-- Start Navigation -->
<nav class="navbar navbar-expand-sm navbar-dark  pl-5 fixed-top"
style="background-color: rgba(0,0,0,0.5);">
<a href="index.php" class="navbar-brand shake"><img src="images/logo.png" 
height=70 width=100></a>
<!--  button for phone -->
<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
<div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
        <li class="nav-item"><a href="index.php" 
        class="nav-link">Home</a></li>
        <li class="nav-item"><a href="#service" 
        class="nav-link">Service</a></li>
        <li class="nav-item"><a href="#aboutus" 
        class="nav-link">About Us</a></li>
        <li class="nav-item"><a href="#registration" 
        class="nav-link">Registration</a></li>
        <li class="nav-item"><a href="#contactus" 
        class="nav-link">Contact Us</a></li>
        
    </ul>
</div>
</nav>
<!--End Navigation--> 

<!--Start header-->
<header class="back-image" style="background-image:url(images/car.jpg);">
<div class="text">
            <h2> CARS & SERVICES & CONTACTS</h2>
			<h1> VROOMSTERS</h1>
			<h3> WE ARE THE ONE OF THE WORLDS TOP CAR SERVICE AGENCIES</h3>
            <a href="requester/loginpage.php" class="btn btn-info mr-4"> Login </a>
            <a href="#registration" class="btn btn-info  mr-4"> Sign Up </a> 
</div>
</header>
<!--End header-->

<!--start about us-->
<div class="container" id="aboutus">
    <div class="jumbotron mt-5">
        <h4 class="text-center">About Vroomsters</h4>
        <p>
        Vroomsters.Com is a leading two-sides digital automotives marketplace
that connects car shoopers with sellers. Launched in 2020 and
headquartered in CA, the company empowers shoopers with the data,
resources and digital tools needed to make informed buying decisions
and seamlessly connect with automotives retailers.In a rapidly changing
market <a href="#djfk">Vroomsters.Com</a> enables automotive dealers and
and manufacturer with innovative technical solutions and data-driven 
intellegence to better reach and influence ready-to-buy shoopers, 
increase inventory turn and gain market share. In 2020, <a href="#djfk">Vroomsters.Com</a>
acquired Dealer Inspire<sup>R</sup>, an innovative technology company 
building solutions that future-proof dealership with more efficient 
operations, a faster and easier car buying process,connected digital
experience that sell and service more vehicle.
        </p>
    </div>
</div>
<!--end about us-->

<!--start service section-->
<div class="container text-center border-bottom mt-5" id="service">
    <h2 >Our Services</h2>
    <div class="row mt-4">
        <div class="col-sm-4">
           <a href="#"><i class="fas fa-car fa-8x text-success"></i></a>
           <h5 class="mt-4">Cars Appliances</h5>
        </div>
        <div class="col-sm-4">
           <a href="#"><i class="fas fa-sliders-h fa-8x text-primary"></i></a>
           <h5 class="mt-4">Preventive Maintenance</h5>
        </div>
        <div class="col-sm-4">
           <a href="#"><i class="fas fa-cogs fa-8x text-info"></i></a>
           <h5 class="mt-4">Repair</h5>
        </div>

    </div>
</div>
<!--end service section-->

<!--start registraion form-->
<?php
include('registration.php')
?>
<!--end registraion form-->

<!--start cars-->
<div>
<div class="container">
<div class="text-center" style="font-size:30px;">Cars</div>
<!--start first row--> 
<div class="row mt-2">
        <!--first col -->
        <div class="col-lg-4 col-sm-6">
            <div class="cars">
                 <img src="images/car1.png" class="img-fluid" 
                 alt="avt1">
            </div>
        </div>
        <!-- end first col -->

        <!--second col -->
        <div class="col-lg-4 col-sm-6">
            <div class="cars">
                 <img src="images/car8.png" class="img-fluid" 
                 alt="avt3">
            </div>
        </div>
        <!--end second col -->
         
        <!--third col -->
        <div class="col-lg-4 col-sm-6">
            <div class="cars">
                 <img src="images/car4.png" class="img-fluid" 
                 alt="avt4">
            </div>
        </div>
        <!-- end third col -->
</div>
<!--end first row--> 

<!--start second row--> 
<div class="row mt-2">
        <!--first col -->
        <div class="col-lg-4 col-sm-6">
            <div class="cars">
                 <img src="images/car6.png" class="img-fluid" 
                 alt="avt6">
            </div>
        </div>
        <!--end first col -->

        <!--second col -->
        <div class="col-lg-4 col-sm-6">
            <div class="cars">
                 <img src="images/car7.png" class="img-fluid" 
                 alt="avt7">
            </div>
        </div>
        <!-- end second col -->

        <!--third col -->
        <div class="col-lg-4 col-sm-6">
            <div class="cars">
                 <img src="images/car9.png" class="img-fluid" 
                 alt="avt9">
            </div>
        </div>
        <!--end third col -->
</div>
<!--end second row-->  
</div>
</div>
<!--end cars-->

<!--start contact us-->
<div class="container" id="contactus">
    <h4 class="text-center mb-4 mt-5" style="font-size:30px;">Contact Us</h4>
    <div class="row">
        <!--first col-->
        <?php
        include('contactus.php')
        ?>
        <!--end first col-->

        <!--start second col-->
        <div class="col-md-4 text-center">
        <strong>Headquarter</strong><br>
          TATA LLC<br>
          1600 Amphitheatre
          <br> Parkway Mountain View,
          <br> CA 94043<br>
        <a href="#" target="_blank">www.vroomsters.com</a><br><br><br>
        <strong>Branch</strong><br>
             C 40,<br>
             South Part II,<br> 
             Service South enclave<br> 
             Gurugram, Haryana<br>
             <a href="#" target="_blank">www.vroomsters.com</a>
            <br>
       </div>
        <!--end second col-->
    </div>
</div>
<!--end contact us-->

<!--start footer-->
<footer class="container-fluid bg-dark mt-5 text-white">
    <div class="container">
        <div class="row py-3">
            <!--start first col-->
            <div class="col-md-6">
                <span class="pr-2">Follow Us:</span>
                <a href="#" target="_blank" class="pr-2 fi-color">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" target="_blank" class="pr-2 fi-color">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" target="_blank" class="pr-2 fi-color">
                    <i class="fab fa-youtube"></i>
                </a>
                <a href="#" target="_blank" class="pr-2 fi-color">
                    <i class="fab fa-google-plus-g"></i>
                </a>
                <a href="#" target="_blank" class="pr-2 fi-color">
                    <i class="fab fa-rss"></i>
                </a>
            </div>
            <!--end first col-->

            <!--start second col-->
            <div class="col-md-6 text-right">
            <small>Designed by Gaurav ; 2020</small>
             <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
            </div>
            <!--end second col-->
        </div>
    </div>

</footer>
<!--end footer-->

<!--Javascript-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>


</body>
</html>