<?php
session_start();
if(!isset($_SESSION['DID']))
{
    header("location:homepage.php");
    
}



?>