<?php
include("includes/connect.php");
include("functions\common_function.php");

session_start();

$username=$_GET['userid'];
$product_id=$_GET['product_id'];

$queryupdatesold="UPDATE `user_table` SET sold=sold+1 WHERE username='$username'";
$resultupdatesold=mysqli_query($con,$queryupdatesold);




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
        

                        










$deletequery="DELETE FROM `products` WHERE product_id='$product_id'";
$resultdelete=mysqli_query($con,$deletequery);






echo "<script> alert('Thank you for your purchase')</script>";
echo "<script> window.open('index.php','_self')</script>";







?>