<?php
include_once('adminsession.php');
?>

<html>
<head>

<style type="text/css">
.topnav {
  background-color: black;
  overflow: hidden;
}


.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}


.topnav a:hover {
  background-color: pink;
  color: black;
}


.topnav a.active {
  background-color: blue;
  color: white;
}
</style>
</head>
<body background="bck2.jpg" height="100%" width="100%" style="background-repeat:cover;">

<div class="topnav">
  <a  class="active"href="homepage.php"><font face="Lucida Calligraphy">Home</font></a>
  <a href="adddoctor.php" target="MyFrame"><font face="Lucida Calligraphy">Add Doctor</font></a>
  <a href="viewdoctor.php" target="MyFrame"><font face="Lucida Calligraphy"> View Doctor</font></a>
  <a href="viewpatient.php" target="MyFrame"><font face="Lucida Calligraphy">View Patient</font></a>
  <a href="viewappointment.php?a=1" target="MyFrame"><font face="Lucida Calligraphy">View Appointment</font></a>
  <a href="adminlogout.php" target="MyFrame"><font face="Lucida Calligraphy">Logout</font></a>
  
</div>
<div>
<iframe name="MyFrame" width="100%" height="100%">
</iframe>
</div>



</body>
</html>

<?php

/**
 * @author Karunesh
 * @copyright 2019
 */



?>