<?php
include_once('drsession.php');
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
  <a class="active" href="homepage.php"><font face="Lucida Calligraphy">Home</font></a>
  <a href="drdetails.php" target="MyFrame"><font face="Lucida Calligraphy">My Details</font></a>
  <a href="doctormyapp.php"target="MyFrame"><font face="Lucida Calligraphy">My Appointments</font></a>
  <a href="doctorsearchpatient.php"target="MyFrame"><font face="Lucida Calligraphy">Search Patient</font></a>
  <a href="todaysapp.php"target="MyFrame"><font face="Lucida Calligraphy">Today's Appointment</font></a>
  <a href="drlogout.php"><font face="Lucida Calligraphy">Logout</font></a>
  
</div>
<div>
<iframe name="MyFrame" width="100%" height="100%">
</iframe>
</div>

</body>
</html>
