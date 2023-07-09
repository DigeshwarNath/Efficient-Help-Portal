<html>
<head>
<title> my page</title>
<style type="text/css" rel="stylesheet">

input[type=text]
{
    border: 2px solid olive;
}
tr:hover{
    background-color:grey;
}
tr:nth-child(odd)
{
    background-color: lightpink;
}
table
{
    box-shadow:20px 20px 30px 20px  olive;
    border-style: double;
    
}
</style>
</head>

<body>
<form name="my form" action="" method="post">
<center><h1>Cancel Booking</h1></center>
<table border=5 width="500px" align="center" bordercolor="grey">
<tr><th>Appointment Id</th><th><input type="text" name="id" required="true" /></th></tr>
<tr><th colspan="3">
<input type="submit" name="subBtn" value="Cancel"/>

</th></tr>
</table>
</form>
</body></html>
<?php
extract($_POST);
//echo $_GET['id'];
if(isset($_GET['id']))
{
    $link=mysqli_connect("localhost","root","","myproject2023");
$qry="update Appointment_details set  Booking_Status='Cancel' where  Appointment_Id=$_GET[id]";
$resultset=mysqli_query($link,$qry);
header("location:patientviewapp.php?c=1");
}
?>











