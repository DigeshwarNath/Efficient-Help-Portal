<html>
<head>
<style type="text/css">
form {
  border: 3px solid double;
}


input[type=mail], input[type=password] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 8px;
  display: inline-block;
  border: 1px solid red;
  box-shadow:5px 5px 5px 5px lightblue;
  box-sizing: border-box;
}


button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 18px 10px;
  border: none;
  cursor: pointer;
  width: 57%;
}


button:hover {
  opacity: 0.8;
}


.cancelbtn {
  width: auto;
  padding: 15px 25px;
  background-color: olive;
  
}


.imgcontainer {
  text-align: center;
  margin: 12px 0 6px 0;
}


img.avatar {
  width: 10%;
  border-radius: 20%;
}


.container {
  padding: 0px;
  text-align: center;
}


span.psw {
  float: right;
  padding-top:0px;
}


@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 50%;
    
  }
}
</style>
</head>
<body  background="bck2.jpg" height="100%" width="100%" style="background-repeat:cover;">
<form method="post">
  <div class="imgcontainer">
    <img src="logo1.jpeg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="Email" style="background-color: olive;"><b>Email address</b></label>
    <input type="mail" placeholder="Enter Email" name="Email" required>
    <br />
    <label for="psw" style="background-color: olive;"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" name="subBtn" >Login</button>
    <br/>
    <label> 
     
    <a href="myproject8.php">Register now</a>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  

  <div class="container" style="background-color:pink">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw"> <a href="#">Forgot password?</a></span>
  </div>
</form>

</body>
</html>


<?php

extract($_POST);
if(isset($subBtn))
{
    $link=mysqli_connect("localhost","root","","myproject2023");
    $qry="select * from patient_details where  E_mail='$Email' and Password='$psw'";
    $resultset=mysqli_query($link,$qry);
    $count=mysqli_num_rows($resultset);
    
    $r= mysqli_fetch_row($resultset);
    if($count!=0) 
    {
    session_start();
    $_SESSION['ID']=$r[0];
    $_SESSION['NM']=$r[1];
    $_SESSION['MAIL']=$r[2];
    $_SESSION['CN']=$r[4];
    $_SESSION['ADDR']=$r[8];    
      
    header("location:myproject9.php");
    }
    
    
}


?>


