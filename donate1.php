<?php
$name=$_POST['name'];
$mobile=$_POST['mobile_number'];
$bkname=$_POST['book_name'];
$message=$_POST['message'];
include('dbcon.php');
$query="INSERT INTO `userdata2`(`name`, `mobile_number`, `book_name`, `message`) VALUES ('$name','$mobile','$bkname','$message')";
$run=mysqli_query($con,$query);
if($run== TRUE)
{ echo "<b><br><br><br><br><br><br><br><br><br><br><style>h1{
text-decoration:none; 
color:#CAC6C6;
}</style><h1 align='center'>Thank you for your help</h2>";
  
}
else
{ echo "error";}
?>
<html>
<head>
<title>DONATE</TITLE>
<style>
body{
background-image:url(454.jpeg);
background-size:cover;
}
.abc{
height:100px;
width:100px;
position:absolute;
top:30;
left:20;
}
h3{
position:absolute;
font-size:60;
top:-5;
left:130;
}
div{
float:left;
}
.sld{
background-color:red;
height:75%;
width:45%;
position:absolute;
top:20%;
left:52%;

}

</style>
</head>
<body><br><br><br><br>
<img class="abc" src="125.png">
<a href="catego.php" style = "color:black"><h3>Quick books</h3></a>
</body>
</html>