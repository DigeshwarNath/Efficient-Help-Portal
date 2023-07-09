<html>
<head>
<title> my page</title>
<style type="text/css" rel="stylesheet">


tr:nth-child(odd)
{
    background-color: lightpink;
}
tr:nth-child(even)
{
    background-color: lightyellow;
}
tr:hover{
    background-color:orange;
    }
table
{
    box-shadow:20px 20px 20px 1px  grey;
    border-style: solid;
    
}







</style>

</head><body>
<form name="myform" method="post">
<input type="date" name="cal"/>
<input type="submit" name="showBtn" value="show data"/>
</form></body></html>

<?php
extract($_POST);
if(isset($showBtn) or isset($_GET['a']))
{
$tab=<<<Test
    <table border="5" align="center">
    <center><h1>View Appointments</h1></center>
    <tr><th> Appointment Id</th><th>Patient Name</th><th> Dr name</th><th> Date Of Taking Appointment</th><th>Date Of Appointment</th><th> time</th><th> category</th><th> Booking Status</th><th> Previous Disease</th></tr>  
Test;

     $link=mysqli_connect("localhost","root","","myproject2023");
     $qry="select * from Appointment_details where ";
     if(isset($showBtn))
        $qry.="Date='$cal'";
      else
        $qry.="Date=curdate()";  
     $resultset=mysqli_query($link,$qry);
  while($r=mysqli_fetch_row($resultset)) 
  {
    $tab.="<tr><td>$r[0]</td><td>$r[7]</td><td>$r[6]</td><td>$r[3]</td><td>$r[1]</td><td>$r[2]</td><td>$r[5]</td><td>$r[4]</td><td>$r[8]</tr>";
    }
   
$tab."</table>";
echo $tab;
}
?>