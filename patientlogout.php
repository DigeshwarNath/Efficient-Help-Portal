<?php

session_start();
if(isset($_SESSION['UserName']))
{
echo "Welcome...".$_SESSION['UserName'];
}
else

header("location:myproject7.php");

extract($_POST);
if(isset($logoutBtn))
{
    session_destroy();
    header("location:myproject7.php");
}

?>
