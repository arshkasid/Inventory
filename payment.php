

<?php

include('includes/connect.php');
    // this function has the dynamic products displayed 
    include('functions/common_function.php');
    session_start();



$product_id=$_GET['product_id'];
$buyer_username=$_SESSION['username'];

$getbuyerinfo="SELECT * FROM user_table WHERE username='$buyer_username'";
$run_getbuyerinfo=mysqli_query($con,$getbuyerinfo);
$row_getbuyerinfo=mysqli_fetch_array($run_getbuyerinfo);


    $buyer_email=$row_getbuyerinfo['user_email'];
    $buyer_mobile=$row_getbuyerinfo['user_mobile'];
    $buyer_user_image=$row_getbuyerinfo['user_image'];

$getsellerusername="SELECT * FROM products WHERE product_id='$product_id'";
$run_getsellerusername=mysqli_query($con,$getsellerusername);
$row_getsellerusername=mysqli_fetch_array($run_getsellerusername);
$seller_username=$row_getsellerusername['username'];
$product_image=$row_getsellerusername['product_image1'];








$product_id=$_GET['product_id'];
$user_ip=getIPAddress();
$buyer_username=$_SESSION['username'];


$select_query="Select * from `products` where  product_id='$product_id' ";
        $result_query=mysqli_query($con,$select_query);

                    $row=mysqli_fetch_assoc($result_query);
        $seller_username=$row['username'];
        $product_title=$row['product_title'];
        $price=$row['product_price'];
        $product_image=$row['product_image1'];


        $insertq="insert into `bought` (product_id,user_ip,buyer_username,seller_username,product_title,price,	product_image) values ( '$product_id','$user_ip','$buyer_username','$seller_username','$product_title','$price','$product_image' )";

        $resultinsert=mysqli_query($con,$insertq);


        echo "<script>
        alert('Your request has been sent to the seller');
        window.open('index.php?','_self');
        </script> ";




?>