<?php
$name=$_POST['name'];
$mobile=$_POST['mobile_number'];
$bkname=$_POST['book_name'];
$abt_bk=$_POST['about_book'];
include('dbcon.php');
$query="INSERT INTO `userdata1`(`name`, `mobile_number`, `book_name`, `about_book`) VALUES ('$name','$mobile','$bkname','$abt_bk')";
$run=mysqli_query($con,$query);
if($run== TRUE)
{	echo "<b><br><br><br><br><br><br><br><br><br><br><h1 align ='center'>your data is succesfully stored</h1>";
  
}
else
{ echo "error";}
?>
<html><head><title>quick books</title>
<style>
body{
background-image:linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)),url(4444.jpg);
background-size:cover;
}
h3{
position:absolute;
font-size:60;
top:-5;
left:1000;
}.abc{
height:100px;
width:100px;
position:absolute;
top:30;
left:880;
}
button{
	background-color:#FF1010;
	border-radius:100px;
	height:30;
	width:40;
	border:0;     
}
button:hover{ box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
div{
position:absolute;
top:2;
left:5;

}
</style></head>
<body><br><br><br><br>
	<div>
<a href="catego.php"><button><b><<</b></button></a></b>
</div>
<img class="abc" src="125.png">
<h3>Quick books</h3>
</body>
</html>