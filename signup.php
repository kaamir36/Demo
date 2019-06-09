<?php
$first_name=$_POST['fname'];
$last_name=$_POST['sname'];
$roll=$_POST['roll'];
$email=$_POST['email'];
$password=$_POST['password'];
$dob=$_POST['dob'];
$gender=$_POST['r1'];
include('dbcon.php');
$que = "INSERT INTO `userdata`(`fname`, `lname`, `roll`, `email`, `password`, `dob`, `gender`) VALUES ('$first_name','$last_name','$roll','$email','$password','$dob','$gender')"; 
$run = mysqli_query($con,$que);

if($run == TRUE)
{	echo "<br><br><br><br><br><br><br><style>h1{
text-decoration:none; 
color:#CAC6C6;
}</style><h1 align='center'>you are succesfully registered</h1><h2 align='center'><b><style>a{
text-decoration:none; 
color:#ffffff;
}</style>
<a href='login.php'>Go to login page</a>";
  
}
else
{ echo "<br><br><br><br><br><br><br><h1 align='center'><br><br>error</h1>";}
?>
<HTML>
<HEAD><title>Quick books</title>
<style>

body  {
background-image:linear-gradient(rgba(255,255,255,0.1),rgba(255,255,255,0.1)), url(89.jpg);
background-size:cover;
}

				
.abc{
height:80px;
width:80px;
position:absolute;
top:30px;
left:10;
}
h3{
position:absolute;
font-size:50;
top:-05;
left:90;

}

</style>
</head>
<BODY>
<div>
<img class="abc" src="125.png">
<h3>Quick books</h3>
</div>


</BODY>


</HTML>