<?php
include('../Database/connect.php');
if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keyword = $_POST['product_keyword'];
    $product_category = $_POST['product_category'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    if ($product_title == '' or $product_description == '' or $product_keyword == '' or  $product_category == '' or $product_price == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '') {
        echo "<script>alert('Your response is incomplete please fill up the form completely')</script>";
    } else {
        move_uploaded_file($temp_image1, "added_product_images/$product_image1");
        move_uploaded_file($temp_image2, "added_product_images/$product_image2");
        move_uploaded_file($temp_image3, "added_product_images/$product_image3");

        $insert_products = "INSERT INTO `products` (product_title, product_description, product_keyword, category_id, product_image1, product_image2, product_image3, product_price, date, status) VALUES ('$product_title', '$product_description', '$product_keyword', '$product_category', '$product_image1', '$product_image2', '$product_image3', '$product_price', NOW(), '$product_status')";
        $result_query = mysqli_query($con, $insert_products);
        if ($result_query) {
            echo "<script>alert(Successfully inserted the product</script>";
        }
    }
}
?>

<!DOCTYPE html>
 <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products- Admin Dashboard </title>
    <link rel="stylesheet" href="../mainpage.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> 
</head>
<body class="bg-info">
    <div class="container">
        <h1 class="text-center">Insert Products</h1>
        <form action="#" method="post" enctype="multipart/form-data">
        <div class="form-outline mb-4 w-50 m-auto">
         <label for="product_title" class="form-label">Product Title</label>
         <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product title" autocomplete="off" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
         <label for="product_description" class="form-label">Product Description</label>
         <input type="text" name="product_description" id="product_description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
         <label for="product_keyword" class="form-label">Product Keyword</label>
         <input type="text" name="product_keyword" id="product_keyword" class="form-control" placeholder="Enter Product keyword" autocomplete="off" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <select name="product_category" id="" class="form-select">
                <option value="">Select a Category </option>
                <?php
                $select_query="Select * from `categories`";
                $result_query=mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query))
                {
                    $category_title=$row['categories_title'];
                    $category_id=$row['categories_id'];
                    echo"<option value='$category_id'> $category_title</option>";
                }
               ?>
            </select>
</div>
 <!-- <div class="form-outline mb-4 w-50 m-auto">
             <select name="product_brand" id="" class="form-select">
                <option value="">Select a Brands</option>
             <?php
                $select_query="Select * from `brands`";
                 $result_query=mysqli_query($con,$select_query);
                 while($row=mysqli_fetch_assoc($result_query))
               {
                    $brand_title=$row['Brands_title'];                     $brand_id=$row['Brands_id'];
                    echo"<option value='$brand_id'>$brand_title</option>";
                }
               ?> 
             </select>
 </div>   -->
<div class="form-outline mb-4 w-50 m-auto">
         <label for="product_image1" class="form-label">Product Image 1 </label>
         <input type="file" name="product_image1" id="product_image1" class="form-control" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
         <label for="product_image2" class="form-label">Product Image 2 </label>
         <input type="file" name="product_image2" id="product_image2" class="form-control" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
         <label for="product_image3" class="form-label">Product Image 3</label>
         <input type="file" name="product_image3" id="product_image3" class="form-control" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
         <label for="product_price" class="form-label">Product Price</label>
         <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product Price" autocomplete="off" required>
        </div>
        <div class="form-outline mb-4 w-50 m-auto">
            <input type="submit" name="insert_product" class="btn btn-secondary   mb-3 px-3" value="Insert Products">

</div>
        
       </form>
    </div>
    
</body>
</html>