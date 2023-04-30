<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="mainpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
   <style>
    .admin-image
{
    width: 100px;
    object-fit:contain;

}
   </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
       <div class="container-fluid">
        <img src="./images/logo-removebg-preview.png" class="logo" alt="">
        <nav class="navbar navbar-expand-lg ">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="" class="nav-link">Welcome Guest</a>
                </li>
            </ul>
        </nav>
    </div>
    </nav>
    <div class="bg-light">
            <h3 class="text-center p-2">Manage Details</h3>
        </div>

        <!-- Below of Manage details sections  -->
        <div class="row">
            <div class="col-md-12 bg-secondary  d-flex align-items-center">
                <div class="px-3">
                    <a href="#"> <img src="./images/dd.jpg" alt="" class="admin-image"> <p class="text-light text-center">Anjila Tripathi</p></a>
                </div>
                <div class="botton text-center">
                <button class="my-3"><a href="" class="nav-link text-light bg-danger my-3 pd-3">Insert Products</a></button>
                <button><a href="" class="nav-link text-light bg-danger my-3 pd-3">View Products</a></button>
               <button><a href="insert-categories.php" class="nav-link text-light bg-danger my-3 pd-3">Insert Categories</a></button>
               <button><a href="" class="nav-link text-light bg-danger my-3 pd-3">View Categories</a></button>
               <button><a href="" class="nav-link text-light bg-danger my-3 pd-3">Insert Brands</a></button>
               <button><a href="" class="nav-link text-light bg-danger my-3 pd-3">View Brands</a></button>
               <button><a href="" class="nav-link text-light bg-danger my-3 pd-3">All Orders</a></button>
               <button><a href="" class="nav-link text-light bg-danger my-3 pd-3">All Payments</a></button>
               <button><a href="" class="nav-link text-light bg-danger my-3 pd-3">List Users</a></button>
               <button><a href="" class="nav-link text-light bg-danger my-3 pd-3">Log Out</a></button>
                </div>
            </div>
        </div>
        <div class="bg-danger text-center ">
  <p>All rights reserved <i class="fa-regular fa-copyright" style="color: #100909;"></i> - Designed by Anjila Tripathi-2023</p>
</div> 
    </div>
</body>
</html>