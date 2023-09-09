<?php



include('./includes/connect.php');
    // this function has the dynamic products displayed 
    include('./functions/common_function.php');
    session_start();




$user=$_GET['buyer_username'];
$product_id=$_GET['product_id'];
$sq="delete from `bought` where product_id='$product_id' and buyer_username='$user'";
$run=mysqli_query($con,$sq);


echo "<script>alert('Request deleted');

 window.open('./baught.php','_self');</script>

";

?>