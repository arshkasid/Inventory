<?php
session_start();
    include('../includes/connect.php');
    // if isset is dont for submit only so that you can take the data entered in form and put it in the table
    
    // insert_product (name for submit )
    if(isset($_POST['insert_product'])){

            //accessing text into variables
            $product_title=$_POST['product_title'];
            $product_keywords=$_POST['product_keywords'];
            $product_category=$_POST['product_category'];
            $product_price=$_POST['product_price'];
            $product_status='true';
            $username=$_SESSION['username'];


            //accessing images
            $product_image1=$_FILES['product_image1']['name'];
           


            //accessing image temp name
            $temp_image1=$_FILES['product_image1']['tmp_name'];
           


            //checking if empty
            if($product_title=='' or $product_keywords=='' 
            or $product_category=='' or $product_price=='' 
            or $product_image1=='' ){
                echo "<script>alert('Please fill all the available fields')</script>";
                exit();
            }
            else{
                // move images in one folder
                move_uploaded_file($temp_image1,"./product_images/$product_image1");
               

                //insert query
                $insert_products="insert into `products` (product_title,
                product_keywords,category_id,product_image1,product_price,date,status,username) values ('$product_title','$product_keywords','$product_category','$product_image1','$product_price',NOW(),'$product_status','$username')";

                //execute query
                $result_query=mysqli_query($con,$insert_products);
                

                if($result_query){
                    echo "<script>alert('Successfully inserted the Product')</script>";
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
    <title>Insert Products</title>
    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font awesome link  -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body class="bg-light" style="background:rgb(200,200,200">
    <div class="container mt-5" style="border:8px; width: 700px; height:700px; background:white; box-shadow: 2px 4px 8px 8px rgba(0, 0, 0, 0.05);">
        <h1 class="text-center p-5">Insert Products</h1>


        <!-- enctype for images  -->
        <form action="" method="post" enctype="multipart/form-data">


            <!-- product name   -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title " class="form-label">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="
                Enter Product Title" autocomplete="off" required="required">
            </div>



            <!-- description  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="
                Enter Product Keywords" autocomplete="off" required="required">
            </div>


            <!-- selecting a category (dynamic data)  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_category" id="" class="form-select">
                    <option value="">Select a Category</option>
                    <?php
                        $select_cat="Select * from `categories`";
                        $result_cat=mysqli_query($con,$select_cat);
                        while($row_data=mysqli_fetch_assoc($result_cat)){
                            $cat_title=$row_data['category_title'];
                            $cat_id=$row_data['category_id'];
                            echo "<option value='$cat_id'>$cat_title</option>";
                        }
                    ?>

                    <!-- <option value=''>CA</option>
                    <option value="">CB</option>
                    <option value="">CC</option>  -->

                </select>
            </div>


          


            <!-- image 1  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-label">Product Image</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" 
                 required="required">
            </div>


           

            <!-- product price  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price " class="form-label">Product Price</label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="
                Enter Product Price" autocomplete="off" required="required">
            </div>


            <!-- submit  -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class='btn btn-secondary m-2' style='border-radius:50px' value="INSERT">
                <a href="../index.php" class='btn btn-secondary m-2' style='border-radius:50px'>RETURN TO HOME</a>
            </div>
            

        </form>
    </div>

    
</body>
</html>

