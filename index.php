
<!-- connect file  -->
<?php

    include('includes/connect.php');
    // this function has the dynamic products displayed 
    include('functions/common_function.php');
    session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome link  -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />

    <style>
            .welcome{
                font-family:'Lucida Console';
            }
    </style>
</head>
<body>


    <div class="container-fluid p-0">
        <!-- navbar from bootstrap -->
        <div class="nav-box-out" style="
      width: 100%;
  height: 400px;
  display: flex;
  flex-direction: column;
  background-image: url('https://images.unsplash.com/photo-1528698827591-e19ccd7bc23d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80');
  background-size:     cover;            
  background-repeat:   no-repeat;
  background-position:center; 
  justify-content: start;
">



<div class="navnav">
<nav class="navbar navbar-expand-lg navbar-light " >
        <div class="container-fluid">
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                


                <?php



if(!isset($_SESSION['username'])){
}else{

    $username = $_SESSION['username'];
    $user_image="Select * from `user_table` where username='$username'";
    $result_image=mysqli_query($con,$user_image);
    $row_image=mysqli_fetch_array($result_image);
    $result_image=$row_image['user_image'];

    echo"
    <a href='./users_area/profile.php?username=$username'> <img src='./users_area/user_images/$result_image' width='50' height='50' class='rounded-circle'></a>
    ";
}
                ?>
                </li>
             
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php"style="color:white; font-size:24px;"><b>&nbsp Home</b></a>
                </li>

                <li class="nav-item">
                <a class="nav-link" href="display_all.php"style="color:white;font-size:24px;"><b>All Products</b></a>
                </li>
                <li>

            

<?php

    if(!isset($_SESSION['username'])){
        echo"
        <a style='color:white; font-size:24px;' class='nav-link' href='./users_area/user_login.php'>Login </a>
        ";
    }else{
        echo"
        <a class='nav-link ' style='color:white; font-size:24px;' href='./users_area/user_logout.php'>Logout </a>
        ";
    }

?>
                </li>

            </ul>
            <form class="d-flex"  action="search_product.php" method="get">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data" style="border-radius:50px">
                <!-- <button class="btn btn-outline-light" type="submit">Search</button> -->
                <input type="submit" value="Search" class="btn
                btn-dark btn btn-outline-light" name="search_data_product" style="border-radius:50px">
            </form>
            </div>
        </div>
        </nav>
</div>




<div class="navtext-box" style="display:flex;
justify-content:center;
flex-direction:column;
color: aliceblue;">
    <div class="actualtext " style=" color: aliceblue; text-align:left; margin-left:500px; margin-top:28px;">
<p>
   <b style=" color: aliceblue; text-align:left; margin-left:-20px; margin-top:30px; font-size:40px; font-family: 'Lucida Console'">INVENTORY</b>
</p>
<p style="margin-top:20px;">
   <b style=" color: aliceblue; text-align:left; margin-left:-20px; margin-top:30px; font-size:30px; font-family: 'Lucida Console'">
   Experience the uniqueness
    </b> 
</p>
<p style="margin-top:-15px;">
   <b style=" color: aliceblue; text-align:left; margin-left:-20px; margin-top:30px; font-size:20px; font-family: 'Lucida Console'">
   Your place, Your store
    </b> 
</p>

<p style="margin-left:-20px;">
<button class="solid-button-button button Button" 
style="
border-color:rgb(148, 110, 102);
    width:100px;
  border-radius: 50px;
  background-color: rgb(148, 110, 102);
  transition: all 0.3 ease-in;
" 
onclick="scrollToDiv()">
                    <span style="color">Store</span>
                  </button>
</p>



    </div>

</div>



        </div>



        <script>
        function scrollToDiv() {
        const divElement = document.querySelector('#products_main');
        divElement.scrollIntoView({ behavior: 'smooth' });
        }
    </script>




<div class="p-1 m-1 mb-4">
       <?php
        if(!isset($_SESSION['username'])){
                    echo"
                    <h3 style='color:black; font-size:24px;'>
                    <div class='bg-light welcome'> 
                    <a class='nav-link text-center' href='#'>Welcome Guest</a>
                    </div>
                    </h3>
                    ";
                }else{
                    echo"
                    <h3 style='color:black; font-size:24px;'>
                    <div class='bg-light welcome'>
                    <a class='nav-link text-center' href='#'>Welcome ".$_SESSION['username']."</a>
                    </div>
                    </h3>
                    ";
                }
            
?>
       </div>
            
<div class="row m-1">
    <h3 style='text-align:center; color:rgb(146, 171, 194);'><b>TOP 3 CONTRIBUTORS</b></h3>

<?php 

show_top3_sellers();

?>

</div>




        <!-- fourth child (divided into 2 parts - products and categories) -->
        <div class="row px-2" id='products_main'>
            <div class="col-md-10">
                <div class="row">
                    <!-- the containers (codes from bootstrap) are put for each item  -->


                    <!-- php code for dynamic data from insert product  -->
                    <?php
                    getproducts();
                    get_unique_categories();

                    ?> 

                </div>

            </div>







            <div class="col-md-2 seconndaryside p-0">
                <!-- sidenav  -->


                <!-- categories to be displayed -->
                <ul class="navbar-nav me-auto text-center">
                <li class="nav-item sidehead">
                        <a href="#" class="nav-link text-light"><h4 style="font-family: 'Lucida Console'">CATEGORIES</h4></a>
                    </li>

                    <?php
                        getcategories();
                    ?>
                </ul>


                
            </div>
        </div>





        <!-- footer last child -->
        <!-- imclude footer -->
        <?php
            include('includes/footer.php');
        ?>

    </div>
    
    



  












    <!-- bootstrap js link   -->

    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>





    
</body>
</html>