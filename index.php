<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="E-commerce WebSite">
    <meta name="author" content="Corina Punga">

    <title>WeLoveMatcha</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">
   
  </head>

  <body>

    

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-upper text-primary mb-3">WeLoveMatcha</span><br>
      <span class="site-heading-lower text-primary mb-3">The Boutique Store For Matcha</span>
    </h1>

    <!-- Navigation -->
 
   
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-upper text-expanded d-lg-none" href="index.html">WeLoveMatcha</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              
              <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="about.php">About Us</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="what.php">What is Matcha?</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="tips.php">Tips and Recipes</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="shop.php">Shop</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="customer-login.php">Account</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="cart.php">My Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="pictures/about.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">100% Organic Matcha</span>
              <span class="section-heading-lower">Worth Drinking</span>
            </h2>
            <p class="mb-3">One of the major health benefits of matcha tea is that it delivers a mega dose of antioxidants in every sip. According to the latest innovation in antioxidant research, matcha is packed with exponentially more antioxidants than any other â€˜superfoodâ€™.
            </p>
            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="shop.php">Buy Your Matcha!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="page-section cta">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <div class="cta-inner text-center rounded">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Our Promise</span>
                <span class="section-heading-lower">To You</span>
              </h2>
              <p class="mb-0">WeLoveMatcha Team is dedicated to providing you with friendly service and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!<b> Enjoy our new online store<b>!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; WeLoveMatcha 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
