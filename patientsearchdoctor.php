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

<body>
<form name="my form" method="post">
<center><h1>Search Doctor</h1></center>
<table border=5 width="500px" align="center" bordercolor="grey">
<tr><th>"Category"</th>
<th>
<select name="category">
<option>--select--</option>
<option>General Doctor</option>
<option>Heart Specialist</option>
<option>Bone Specialist</option>
<option>Gynaecologist</option>
<option>Pediatrician</option>
<option>Psychiatrist</option>
<option>Allergist</option>
<option>Diabetician</option>
<option>Pediatrician</option>
<option>Neurologist</option>
<option>Dentist</option>

<option>Dermatologist</option>
<option>Plastic Surgeon</option></select>
<th><input type="submit" value="search" name="showBtn"></th>
</table>
<?php
extract($_POST);
if(isset($showBtn))
{     
$tab=<<<Test
    <table border="5" align="center">
    <tr><th>Dr. Id</th><th>Dr.Name</th><th> Dr.speciality</th><th> Email</th><th>Contact No.</th><th> Clinic No.</th><th> Gender</th><th> Clinic Address</th><th> Qualification</th></tr>  
Test;
     $link=mysqli_connect("localhost","root","","myproject2023");
     $qry="select * from dr_details where  Dr_speciality='$category'";
     $resultset=mysqli_query($link,$qry);
  while($r=mysqli_fetch_row($resultset)) 
  {
    $tab.="<tr><td>$r[0]</td><td>$r[1]</td><td>$r[2]</td><td>$r[3]</td><td>$r[4]</td><td>$r[5]</td><td>$r[6]</td><td>$r[7]</td><td>$r[9]<td><a href='patientbook.php?id=$r[0]'>Book Appointment</a></td></tr>";
    }
   
$tab."</table>";
echo $tab;
}
?>