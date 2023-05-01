<?php 
  include('Database/connect.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It Suits You</title>
     <link rel="stylesheet" href="mainpage.css">
    <!--Bootstrap Link !-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
</head>
<body>
<!-- navbar-->
<div class="container-fluid p-0" >  <!-- container-fluid make the nav bar width to 100% of the screen !-->
<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <img src=".\images\logo-removebg-preview.png" alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Cart</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <ul class="navbar-nav me-auto"><li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">login</a>
        </li>
      </ul>
</nav>
  <div class="bg-light">
    <h3 class="text-center">It Suits You</h3>
    <p class="text-center">Whatever you purchase... It Suits you!!!</p>
  </div>
  <div class="row">

    <div class="col-md-10">
     <div class="row">
        <div class="col-md-4 mb-2">
        <div class="card">
 <img src=".\images\novel.jpg" class="card-img-top" alt="...">
   <div class="card-body">
    <h5 class="card-title text-center">It Ends with us</h5>
    <p class="card-text">Novel that redefines your perceptions for love and relationship.</p>
    <a href="#" class="btn btn-danger">Add to Cart</a>
    <a href="#" class="btn btn-danger">View more</a>
   </div>
   </div>
   </div>
        <div class="col-md-4">
        <div class="card" >
  <img src=".\images\earlobring.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Ear Lob Earing</h5>
    <p class="card-text">Earing for ear that enhances your features.</p>
    <a href="#" class="btn btn-danger">Add to Cart</a>
    <a href="#" class="btn btn-danger">View More</a>
  </div>
</div>
       
</div>
        <div class="col-md-4">
        <div class="card">
  <img src=".\images\ludo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Ludo Board</h5>
    <p class="card-text">Wooden Ludo board for your free time.</p>
    <a href="#" class="btn btn-danger">Add to Cart</a>
    <a href="#" class="btn btn-danger">View more</a>
  </div>
</div>
    </div>
        <div class="col-md-4">
        <div class="card">
  <img src=".\images\bangles.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Blue Glass Bangle</h5>
    <p class="card-text">Beautiful blue glass bangles with golden touch in it. Best for festive seasons.</p>
    <a href="#" class="btn btn-danger">Add to Cart</a>
    <a href="#" class="btn btn-danger">View more</a>
  </div>
</div>
      </div>
      
        <div class="col-md-4">
        <div class="card">
  <img src=".\images\saree.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Saree</h5>
    <p class="card-text">Black and golden saree to brighten up your day.</p>
    <a href="#" class="btn btn-danger">Add to Cart</a>
    <a href="#" class="btn btn-danger">View more</a>
  </div>
</div>
</div>
<div class="col-md-4">
        <div class="card">
  <img src=".\images\photo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center">Photo Frame</h5>
    <p class="card-text">Family photo frames prefect place for you memories.</p>
    <a href="#" class="btn btn-danger">Add to Cart</a>
    <a href="#" class="btn btn-danger">View more</a>
  </div>
</div>
</div>

</div>
</div>
<div class="col-md-2 bg-secondary p-0">
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-danger">
            <a href="#" class="nav-link text-light">
              <h4> Delivery Brands</h4>
            </a>
          </li>
          <?php 
          $select_brands="Select * from `brands`";
          $result_brands=mysqli_query($con,$select_brands);
          while($row_data=mysqli_fetch_assoc($result_brands)){
            $brand_title=$row_data['Brand_tittle'];
            $brand_id=$row_data['Brand_id'];
             echo "<li class='nav-item'> 
             <a href='mainpage.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
          </li>";}
          ?>;
        </ul>
        <ul class="navbar-nav me-auto text-center">
          <li class="nav-item bg-danger">
            <a href="#" class="nav-link text-light">
              <h4>Categories</h4>
            </a>
          </li>
          <?php 
          $select_categories="Select * from `categories`";
          $result_categories=mysqli_query($con,$select_categories);
          while($row_data=mysqli_fetch_assoc($result_categories)){
            $category_title=$row_data['categories_title'];
            $category_id=$row_data['categories_id'];
             echo "<li class='nav-item'> 
             <a href='mainpage.php?category=$category_id' class='nav-link text-light'>$category_title</a>
          </li>";}
          ?>;
        </ul>
</div>
 </div>
  <!-- footer part -->
<div class="bg-danger text-center ">
  <p>All rights reserved <i class="fa-regular fa-copyright" style="color: #100909;"></i> - Designed by Anjila Tripathi-2023</p>
</div> 
</div>
<!-- JS through bootstrap !-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>