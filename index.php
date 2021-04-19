<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>PHP site</title>
</head>
<body>

<?php include 'menu.php'; ?>
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/1.jpg" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="./images/2.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="./images/3.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">About Us</h2>
</div>
<div class="container-fluid">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<img src="./images/4.jpg" class="img-fluid aboutimg">
</div>
<div class="col-lg-6 col-md-6 col-12">
<h2 class="display-4">My name is Nipan Pradhan</h2>
<p class="py-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil officiis, delectus, quaerat aut illo vero excepturi sint quisquam veritatis nesciunt, nisi optio repellat dolor nam minima incidunt est enim laudantium?
</p>
<a href="about.php" class="btn btn-success"> Know More</a>
</div>
</div>
</div>
</section>


<section class="my-5">
<div class="py-5">
<h2 class="text-center">Services</h2>
</div>

<div class="container-fluid">
<div class="row">

<div class="card text-white bg-success  m-4 flex-direction:column" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-dark m-4" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-info m-4" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-danger m-4" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</div>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">Our Gallery</h2>
</div>

<div class="container-fluid">
<div class="row">

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>

<div class="col-lg-4 col-md-4 col-12">
<img src="./images/6.jpg" class="img-fluid pb-4">
</div>
</div>
</div>

</section>

<section class="my-5">
<div class="py-5">
<h2 class="text-center">My Contact</h2>
</div>



<div class="w-50 m-auto">
<form action="userinfo.php" method="post">

<div class="form-group">
<label>Username</label>
<input type="text" name="user" class="form-control">
</div>


<div class="form-group">
<label>Email Id</label>
<input type="text" name="email" class="form-control">
</div>


<div class="form-group">
<label>Mobile Number</label>
<input type="text" name="mobile" class="form-control">
</div>

<div class="form-group">
<label>Comments</label>
<textarea name="comments" class="form-control"></textarea>
</div>


<button type="submit" class="btn btn-success">Submit</button>

</form>

</div>

</section>

<footer>
<p class="p-3 bg-dark text-white text-center"> Copyrights @2021 By Nipan Pradhan.</p>
</footer>










   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
</body>
</html>