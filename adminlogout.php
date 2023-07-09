

<?php
session_start();
if(isset($_SESSION['AID']))
{
    echo $_SESSION['AID'];
   session_destroy();
   header("location:homepage.php");   
    
}



?>
