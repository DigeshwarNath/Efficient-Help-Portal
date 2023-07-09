<?php
session_start();
if(isset($_SESSION['ID']))
{
    echo $_SESSION['ID'];
   session_destroy();
   header("location:homepage.php");   
    
}



?>