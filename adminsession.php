<?php
session_start();
if(!isset($_SESSION['AID']))
{
    header("location:homepage.php");
    
}



?>