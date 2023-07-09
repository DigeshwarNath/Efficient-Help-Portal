<?php
session_start();

?>
<html>
<head>
<title> my page</title>
<style type="text/css" rel="stylesheet">

input[type=text]
{
    border: 3px solid blue;
}
input[type=mail]
{
    border: 3px solid blue;
}
input[type=password]
{
    border: 3px solid blue;
}
input[type=date]
{
    border: 3px solid blue;
}
input[type=time]
{
    border: 3px solid blue;
}
input[type=number]
{
    border: 3px solid blue;
}
input[type=radio]
{
    border: 3px solid blue;
}


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
<form name="my form"  method="post">
<center><h1>Book Appointment</h1></center>
<table border=5 width="500px" align="center" bordercolor="grey">


<tr><th>Category</th>
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
<input type="submit" name="showBtn" value="Show Doctors" /></th></tr>
<tr><th>Dr. Name</th>
<th>
<select name="dnm">
<option>--select--</option>
<?php
extract($_POST);
if(isset ($showBtn))
{
   $link=mysqli_connect("localhost","root","","myproject2023");
$qry="select Dr_Name,Dr_Id from dr_details where Dr_speciality ='$category' "; 
$resultset=mysqli_query($link,$qry);
while($r=mysqli_fetch_row($resultset))
{
    echo"<option>$r[0]--$r[1]</option>";
}
}
?></select>
</th>
</tr>

<tr><th>Date Of Appointment</th><th><input type="date"  name="dob"/></th></tr>


<tr><th>Time</th>
<th>
<select name="time">
<option>--select--</option>
<option>10:00 AM-1:00 PM</option>
<option>6:00 PM-9:00 PM</option>
</select></th></tr>
<tr><th>Previous Disease</th><th><input type="text"  name="predis"/></th></tr>
<tr><th>Booking Status</th><th><input type="text"  name="bs"/></th></tr>

<tr><th colspan="3">
<input type="submit" name="subBtn" value="submit"/>

</th></tr>

<?php

extract($_POST);
if(isset($subBtn))
{
    $did=explode("--",$dnm);
    
    
    $link=mysqli_connect("localhost","root","","myproject2023");
    $qry="insert into appointment_details(Dr_Id,Patient_name,category,Date,Date_Of_Taking_Appointment, time, Previous_Disease,Dr_name, Booking_Status,Patient_ID )values($did[1],'$_SESSION[NM]','$category','$dob',curdate(),'$time','$predis','$did[0]','$bs','$_SESSION[ID]')";
    $resultset=mysqli_query($link,$qry);
   
    



}


?>