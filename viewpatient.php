
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
    border-style: groove;
    
}







</style>

</head><body>
<form name="myform" method="post">
<input type="submit" name="showBtn" value="show data"/>
</form></body></html>

<?php
extract($_POST);
if(isset($showBtn))
{
$tab=<<<Test
    <table border="5" align="center">
    <center><h1>View Patient</h1></center>
    <tr><th>Patient Id</th><th>Patient Name</th><th>E-mail</th><th>Password</th><th>Contact</th><th>Age</th><th>Gender</th><th>Previous disease</th><th>Address</th></tr>  
Test;
     $link=mysqli_connect("localhost","root","","myproject2023");
     $qry="select * from patient_details";
     $resultset=mysqli_query($link,$qry);
  while($r=mysqli_fetch_row($resultset)) 
  {
    $tab.="<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[8]</td></tr>";
    }
   
$tab."</table>";
echo $tab;
}
?>