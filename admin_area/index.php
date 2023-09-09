


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../style.css">
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- font awesome link  -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>

<style>
    .pic{
    width: 100%;
  height: 400px;
  display: flex;
  flex-direction: column;
  background-image: url('https://images.unsplash.com/photo-1512389142860-9c449e58a543?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fHNob3BwaW5nJTIwYmFja2dyb3VuZHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=1000&q=60');
  background-size:     cover;            
  background-repeat:   no-repeat;
  background-position:center; 
  justify-content: start;
    }
</style>
<body>
 

<?php 
session_start();
$userid=$_SESSION['username'];
if($userid!="admin"){
   
    
}
?>



    <!-- navbar  -->
    <div class="container-fluid p-0">
        <!-- navbar from bootstrap -->

        <!-- first child  -->
        


        <!-- second-child  -->
        <div class="bg-light">
            <h3 class="text-center p-3"><b>MANAGE &nbsp DETAILS</b></h3>
        </div>


        <!-- third-child  -->
        <!-- col should always sum upto 12  -->
        
        <div class="row ">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center pic">
 
                <div class="text-center m-3">

                    <a style='border-radius:50px' href="../display_all.php"  class='btn btn-secondary m-2'>View Products</a>

                    <a style='border-radius:50px' href="index.php?insert_category"  class='btn btn-secondary m-2'>Insert Categories</a>


                    <a style='border-radius:50px' href="index.php?list_users"  class='btn btn-secondary m-2'>List Users</a>


                    <!-- <button class="m-3 "><a href="index.php?insert_products" target="blank" class="nav-link text-light bg-info m-1">Insert Products</a></button> -->
                    <!-- <button class="m-3"><a href="index.php?viewall" class="nav-link text-light bg-info my-1">View Products</a></button> -->
                    <!-- ?insert_category is get variable,  index.php so that link is directed here  -->
                    <!-- <button class="m-3"><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button> -->
                    <!-- <button class="m-3"><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button> -->
                    <!-- <button class="m-3"><a href="index.php?allp" class="nav-link text-light bg-info my-1">All Orders</a></button> -->
                    <!-- <button class="m-3"><a href="index.php?allp" class="nav-link text-light bg-info my-1">All Payments</a></button> -->
                    <!-- <button class="m-3"><a href="" class="nav-link text-light bg-info my-1 ">List Users</a></button> -->
                    <?php

    if(!isset($_SESSION['username'])){
        echo"
        <a style='color:white; font-size:24px;' class='nav-link' href='./users_area/user_login.php'>Login </a>
        ";
    }else{
        echo"
        <a class='nav-link m-5' style='color:black; font-size:24px;' href='../users_area/user_logout.php'>Logout </a>
        ";
    }

?>
                    
                </div>


            </div>
        </div>


        <!-- fourth child  -->
        <div class="container my-3">
            <?php
            if(isset($_GET['insert_category'])){
                include('insert_categories.php');
            }

            if(isset($_GET['viewall'])){
                include('./viewall.php');
            }
            if(isset($_GET['allp'])){
                include('./all_payments.php');
            }
            if(isset($_GET['list_users'])){
                include('list_users.php');
            }
            

            ?>
        </div>


         <!-- footer last child -->
         <?php
            include('../includes/footer.php');
        ?>


    </div>


    <!-- bootstrap js link   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>