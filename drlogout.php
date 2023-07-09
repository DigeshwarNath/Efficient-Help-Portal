<?php
session_start();
if(isset($_SESSION['DID']))
{
   session_destroy();
   header("location:homepage.php");   
    
}



?>