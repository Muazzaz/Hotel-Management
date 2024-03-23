<?php   
 if(!isset($_SESSION['username']))
 {
   $_SESSION['invalid access']='<h5 class="text-danger text-center">Login to Admin Panel </h5><br>';
   header('location:'.url.'admin/signin.php');
 }

?>