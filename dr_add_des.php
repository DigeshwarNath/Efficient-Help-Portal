<?php
session_start();
?>
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
</head>
<body>
<form method="post">
<table border="5" align="center">
<tr><td>Patient Id </td> <td><input type ="text" name="pid" readonly="true" value="<?php echo $_GET['pid']; ?>" /></td> </tr>
<tr><th colspan="2">Description<textarea name="des" rows="5" cols="50"></textarea></th></tr>
<tr><th colspan="2"><input type="submit" name="subBtn" value="Submit"/></th></tr>

</table>
</form>
</body>
</html>

<?php
extract($_POST);
if(isset($subBtn))
{
    $link=mysqli_connect("localhost","root","","myproject2023");
$qry="insert into  Description_details(Appointment_Id,Patient_ID,Dr_ID,Date,Description)values($_GET[aid],$_GET[pid],$_SESSION[DID],curdate(),'$des')";
mysqli_query($link,$qry);



}


?>