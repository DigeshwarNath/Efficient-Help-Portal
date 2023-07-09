




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
</head>
<body>
<form name="my form" action="" method="post">
<center><h1>My Details</h1></center>
<table border=5 width="500px" align="center" bordercolor="grey">
<tr><td>Doctor Id </td> <td><input type="text" name="did" readonly="true" value="<?php echo $_SESSION['DID']; ?>" /></td> </tr>
<tr><td>Doctor Name </td><td><input type="text" name="dnm"readonly="true" value="<?php echo $_SESSION['DNM']; ?>" /></td> </tr>
<tr><td>Email </td><td><input type="text" name="mail"readonly="true" value="<?php echo $_SESSION['DMAIL']; ?>" /></td> </tr>
<tr><td>Contact No</td><td><input type="text" name="mob"readonly="true"value="<?php echo $_SESSION['DCN']; ?>" /></td> </tr>
<tr><td>Address </td><td><input type="text" name="addr"readonly="true" value="<?php echo $_SESSION['DADDR']; ?>" /></td> </tr>
<tr><td>Speciality </td><td><input type="text" name="text"readonly="true" value="<?php echo $_SESSION['DSPL']; ?>" /></td> </tr>
</table>
</form></body></html>
