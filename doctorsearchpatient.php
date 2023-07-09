<?php
session_start();
?>
<html>
<head>
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
</head>
<body>
<form method="post">
<center><h1>Search Patient</h1></center>
<table border="5" align="center">
<tr><td>Patient Name</td><td><input type="text" name="pnm"/></td></tr>
<tr><th colspan="2"><input type="submit" name="subBtn" value="Search"/></th></tr>
</table>
</form>
</body>


</html>
<?php
extract($_POST);
if(isset($subBtn))
{
    $tab=<<<Test
    
    <table border="5" align="center">
    <tr><th> Appointment_Id </th><th> Patient_name</th><th> Date </th><th> time</th><th>Previous Disease</th></tr>  
Test;
     $link=mysqli_connect("localhost","root","","myproject2023");
     $qry="select * from  appointment_details where Patient_Name='$pnm' and Dr_Id=$_SESSION[DID]";
     $resultset=mysqli_query($link,$qry);

  while($r=mysqli_fetch_row($resultset)) 
  {
    $tab.="<tr><td>$r[0]</td><td>$r[7]</td><td>$r[1]</td><td>$r[2]</td><td>$r[8]</td></tr>";
    }
   
$tab."</table>";
echo $tab;

}

?>