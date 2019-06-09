<?php
session_start();
if(isset($_SESSION['sroll']))
{
	header('location:catego.php');
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
}.q{
position:relative;
top:30;
left:-100;
}
.w{
position:relative;
top:50;
left:-100;
}
::placeholder{
  color:#CAC6C6;
}
</style>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<body>
<div>
<img class="abc" src="125.png">
<h3>Quick books</h3>
<div class="page">
<div class="form">
<form action="login.php" method="post">
<br>
<div class="q"><i class="fas fa-user"></i>
</div>
<input type="text" placeholder="User Name" name="uname"/> 
<div class="w"><i class="fas fa-lock"></i></div><br>
<input type="password" placeholder="Password" name="pswd"/>

<br><br><button value="login" name="login">LOG IN </button><br><br>
<a href="forgetpswd.php">Forgotten Password?</a> <br>
<a href="index1.php">New User</a>
</form>
</div>
</div>

</body>
</html><?php
include('dbcon.php');

if(isset($_POST['login']))
{
	$username=$_POST['uname'];
$password=$_POST['pswd'];
	$que="SELECT * FROM `userdata` WHERE `email` ='$username' AND `password` ='$password'";
$run=mysqli_query($con,$que);
$row= mysqli_num_rows($run);
   
	if($row <1){
	?>	<script>
           alert('username or password does not match!!');
           window.open('login.php','_self')
		</script>
	<?php	
		}
		else
		{
		$data=mysqli_fetch_assoc($run);
		$rl=$data['roll'];
         $_SESSION['sroll']=$rl;
        header('location:catego.php');
	}
}
?>