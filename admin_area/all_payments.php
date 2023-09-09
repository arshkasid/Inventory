



<div class="row">





<?php 
include('../includes/connect.php');


// SELECT `product_id`, `user_ip`, `buyer_username`, `seller_username`, `product_title`, `price`, `product_image` FROM `bought`
global $con;

$select="SELECT * FROM `bought`";
$res=mysqli_query($con,$select);
while($row=mysqli_fetch_array($res)){
$pro_id=$row['product_id'];
$buyer_username=$row['buyer_username'];
$seller_username=$row['seller_username'];
$pro_title=$row['product_title'];
$pro_price=$row['price'];
$pro_image=$row['product_image'];
$buyer_ip=$row['user_ip'];

echo "
<div class='col-md-4 mb-2'>
                            <div class='card' style='height:400px;
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
                            
                            '>
                            <img src='../admin_area/product_images/$pro_image' class='card-img-top' alt='$pro_title'>
                            <div class='card-body'>
                                <h5 class='card-title'>$pro_title</h5>
                                <p class='card-text' style='height:40px; text-overflow: ellipsis; 
                                -webkit-box-orient: vertical;
display: -webkit-box;
-webkit-line-clamp: 2;
overflow: hidden;
text-overflow: ellipsis;
white-space: normal;
                                
                                
                                
                                '>buyer:$buyer_username and seller:$seller_username</p>
                                <p class='card-text'>Price: $pro_price/-</p>
                                
                                
                                
                               
                                
                            </div>
                        </div>
                        </div>




                            ";


}



?>





</div>