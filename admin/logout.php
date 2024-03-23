<?php
include('../config/connectiondb.php');

 session_destroy();


 header('location:'.url.'admin/signin.php');



?>