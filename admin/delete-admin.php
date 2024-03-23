<?php

include('../config/connectiondb.php');
include('./login-check.php');



$ID= $_GET['id'];

$sql= "DELETE  FROM admin WHERE id=$ID";

$res= mysqli_query($con,$sql);


if($res==TRUE)
{
    //echo 'deleted suucess';
    $_SESSION['delete']= '<h5 class="text-success text-center">Deleted Successfully</h5><br>';
    header('location:'.url.'admin/manage-admin.php');
}
else{
    //echo 'failed to delete';
    $_SESSION['delete']= '<h5 class="text-danger text-center">Failed To Delete. Try Again!</h5><br>';
    header('location:'.url.'admin/manage-admin.php');
}


?>