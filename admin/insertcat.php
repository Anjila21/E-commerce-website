<?php
  include('../Database/connect.php');
  if(isset($_POST['cat_insert']))
  {
    $category_title=$_POST['cat_title'];
    $select_query="Select * from `categories` where categories_title='$category_title'";
    $result_select=mysqli_query($con,$select_query);
    $number=mysqli_num_rows($result_select);
    if($number>0) 
    {
      echo " <script> alert('This Category is already present inside the database')</script>  ";
    }
    else{
      $insert_query="insert into `categories` (categories_title) values ('$category_title')";
      $result=mysqli_query($con,$insert_query);
      if($result)
    {
      echo " <script> alert('This Category is has been inserted to the database')</script>";
    }
    }

  }
 ?>
<form action="" method="post" class="mb-2">
  <div class="input-group w-90 mb-2">
  <span class="input-group-text bg-danger" id="basic-addon1">
    <i class="fa-solid fa-receipt"></i>
  </span>
  <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username" aria-describedby="basic-addon1">
</div>
<div class="input-group w-10 mb-2 m-auto">
   <input type="submit" class="bg-danger border-0 my-3 p-2" name="cat_insert" value="Insert Categories">
<!-- <button class="bg-danger p-2 my-3 border-0">Insert Categories</button> -->
</div>

</form>