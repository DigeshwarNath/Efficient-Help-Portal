<html>
<head>
<style type="text/css">
*
 {box-sizing: border-box}


.container {
  padding: 5px;
}


input[type=text], input[type=password] ,input[type=addr],input[type=number]{
  width: 100%;
  padding: 10px;
  margin: 0px 0 0px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus ,input[type=addr]:focus ,input[type=number]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 0px;
}


.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}


a {
  color: dodgerblue;
}
img.avatar {
  width: 10%;
  border-radius: 20%;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body  background="bck2.jpg" height="100%" width="100%" style="background-repeat:cover;">
<form method="post">
<div class="imgcontainer">
    <center><img src="logo1.jpeg"  alt="Avatar" class="avatar"></center>
  </div>
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="nm"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="nm" required>
    <label for="addr"><b>Address</b></label>
    <input type="addr" placeholder="Enter Address" name="addr" required>
    <label for="cn"><b>Contact no.</b></label>
    <input type="number" placeholder="Enter Contact No." name="cn" required>





    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="conpsw" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" name="subBtn" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Succesfully Account Created? <a href="myproject2.php">Login Now</a>.</p>
  </div>
</form>

</body>
</html>
<?php
extract($_POST);
if(isset($subBtn))
{
$link=mysqli_connect("localhost","root","","myproject2023");
$qry="insert into user_details(User_Name,User_Email,User_Password,User_Contact,address)values('$nm','$email','$psw','$cn','$addr')";
$resultset=mysqli_query($link,$qry);

}
?>