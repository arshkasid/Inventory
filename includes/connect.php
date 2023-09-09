
<!-- dont have a password, NOT the mysql password !  -->
<?php
$con=mysqli_connect('localhost','root','','Mystore');
if(!$con){
    die(mysqli_error($con));
}
?>
