
<?php

include('../includes/connect.php');
// this function has the dynamic products displayed 
include('../functions/common_function.php');

?>




<div class="row">

<?php

global $con;
//only if category and brand variable is not set, display the data
if(!isset($_GET['category'])){
    $select_query="Select * from `products` order by rand() ";
    $result_query=mysqli_query($con,$select_query);

                while($row=mysqli_fetch_assoc($result_query)){

                    // in insert product, to put n database, it was the the name of the input form part that was written in the [], her to fetch it is the column name in [] (the $name is just a variable)
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_description=$row['product_description'];
                    $category_id=$row['category_id'];
                    $product_price=$row['product_price'];
                    //accessing images
                    

                    echo " 
                        <div class='col-md-4 mb-2'>
                        <div class='card' style='height:400px;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
max-width: 300px;
margin: auto;
text-align: center;
font-family: arial;
                        
                        '>
                            <img src='../admin_area/product_images/$product_image1' class='card-img-top' alt='$product_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p class='card-text' style='height:40px; text-overflow: ellipsis;  overflow: hidden;
                                -webkit-box-orient: vertical;
display: -webkit-box;
-webkit-line-clamp: 2;
overflow: hidden;
text-overflow: ellipsis;
white-space: normal;
                                
                                
                                
                                '>$product_description</p>
                                <p class='card-text'>Price: $product_price/-</p>
                                
                                
                                
                                <a style='border-radius:50px' href='product_details.php?product_id=$product_id' class='btn btn-secondary'>View More</a>
                                <button class='btn btn-secondary' style='border-radius:50px'>
                            <a href='checkout.php?product_id=$product_id' style='text-decoration: none; color: black' style='border-radius:50px' >Check Out</a>
                          </button>
                                
                            </div>
                        </div>
                        </div>";

                }
    }















?> 

</div>






