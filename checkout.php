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
    <title>Ecommerce Website-checkout page</title>
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap css link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- font awesome link  -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
    />
</head>
<body>
    <!-- navbar  -->


                    <!-- the containers (codes from bootstrap) are put for each item  -->
                    <?php

$product_id=$_GET['product_id'];

                if(!isset($_SESSION['username'])){
                    echo "<script> alert('Please login before Check Out')</script>";
                    echo "<script> window.open('users_area/user_login.php','_self')</script>";
                }else{
                    echo "<script> window.open('payment.php?product_id=$product_id','_self')</script>";
                }

                ?>
                </div>

            </div>







       




        <!-- footer last child -->
        <!-- imclude footer -->
        <?php
            include('../includes/footer.php');
        ?>

    </div>
    
    



    <!-- bootstrap js link   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

