<?php
  include('../Database/connect.php');
  if(isset($_POST['brand_insert']))
  {
    $brand_title=$_POST['brand_title'];
    $select_query="Select * from `brands` where brand_tittle='$brand_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0) 
    {
      echo " <script> alert('This Brand is already present inside the database')</script>  ";
    }
    else{
      $insert_query="insert into `brands` (brand_tittle) values ('$brand_title')";
      $result=mysqli_query($con,$insert_query);
      if($result)
    {
      echo " <script> alert('This Brand is has been inserted to the database')</script>";
    }
    }

  }
 ?>
 <h2 class='text-center'>Insert Brands</h2>
<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
  <span class="input-group-text bg-danger" id="basic-addon1">
    <i class="fa-solid fa-receipt"></i>
  </span>
  <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
   <input type="submit" class="bg-danger border-0 my-3 p-2" name="brand_insert" value="Insert Brand">
<!-- <button class="bg-danger p-2 my-3 border-0">Insert Categories</button> -->
</div>

</form>

