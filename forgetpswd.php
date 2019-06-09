<?php
include('dbcon.php');
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $que="SELECT * FROM `userdata` WHERE `email`='$email'";
  $run = mysqli_query($con,$que);
  $count = mysqli_num_rows($run);
  $row = mysqli_fetch_array($run);
  if ($count >0)
  {
    echo $row['password'];
}
else  {
  echo "<script>alert('email not found');</script>";
}
}
?>
<html>
<head>
<title>LOG IN</TITLE>
<style>
 body  {
  background-image: url(555.jpg);
  background-size:cover;
}
.pc{
height:100px;
width:100px;
position:absolute;
border-radius:50%;
top:130px;
left:615;
}
a{
text-decoration:none;
color:#ffffff;
font-size:18;
}
.page{
width:425px;
padding:10%;
margin:auto;
}
.form{
background-color:D7FBFF;
background-color:rgba(26,23,13,40%);
position:relative;
max-width:auto;
height:240px;
margin:40;
padding:50px;
text-align:center;
border-radius:10px;
}
.form input{
font-family:monospace;
outline:1;
background-color:rgba(26,23,13,40%);
border:none;
text-align:center;
width:100%
background:rgba(26,23,13,40%);
border:1;
margin:-1px;
padding:13px 28px;
box-sizing:border-box;
font-size:15;
color:white;
}
button{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;

  }
  button:hover{ box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
.abc{
height:100px;
width:100px;
position:absolute;
top:15px;
left:890;
}
h3{
position:absolute;
font-size:60;
top:-25;
left:1000;
}
::placeholder{
  color:#CAC6C6;
}
</style>
</head>
<body>
<div>
<img class="abc" src="125.png">
<h3>Quick books</h3>
<div class="page">
<div class="form">
<form action="" method="post">
<br>
<input type="text" placeholder="Registered email-id" name="email"/> 
<br><br><button value="login" name="login">VERIFY </button><br><br>
<a href="index1.php">New User</a>
</form>
</div>
</div>
</body>
</html>