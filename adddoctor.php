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
<form name="myform"  method="post">
<center><h1>Add Doctor</h1></center>
<table border=5 width="500px" align="center" bordercolor="grey">
<tr><th>Doctor Name</th><th><input type="text" name="dnm"/></th></tr>
<tr><th>Doctor E-mail</th><th><input type="mail" name="dmail"/></th></tr>
<tr><th>Password</th><th><input type="password" name="psw"/></th></tr>
<tr><th>Doctor contact</th><th><input type="number" name="dcn"/></th></tr>
<tr><th>Doctor Qualification</th><th><input type="text" name="dq"/></th></tr>
<tr><th>Gender</th><th><input type="radio" name="g1" value="Male"/>Male
<input type="radio" name="g1" value="Female"/>Female</th>
</tr>
<tr><th>Clinic Contact</th><th><input type="number" name="ccm"/></th></tr>
<tr><th>Address</th><th><input type="text" name="addr"/></th></tr>



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

<tr><th colspan="3">
<input type="submit" name="subBtn" value="submit"/>

</th></tr>


<?php
extract($_POST);
if(isset($subBtn))
{
$link=mysqli_connect("localhost","root","","myproject2023");
$qry="insert into  dr_details(  Dr_Name, E_mail, dr_password, Dr_Contact_No, dr_qualification, Dr_Gender,Dr_speciality, Clinic_Contact_no, Clinic_Address)values('$dnm','$dmail','$psw','$dcn','$dq','$g1','$category','$ccm','$addr')";
$resultset=mysqli_query($link,$qry);

}



?>