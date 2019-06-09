<?php
session_start();
if(($_SESSION['sroll'])===null)
{
	echo "<script>location.href='login.php'</script>";
}

        if($_SESSION['sroll'])
        {
        	include('dbcon.php');
        	$r1= $_SESSION['sroll'];
        	$que="SELECT * FROM `userdata` WHERE `roll` ='$r1'";
$run=mysqli_query($con,$que);
$data=mysqli_fetch_assoc($run);
		$name=$data['fname'];
		echo "<h1 align=left><font color=white>Welcome <font size='1000'>$name! </font></h1>";
        }
        else
        {

        	echo "<a href='login.php'>";
        }
      



?>
       <html>
<head>
<title>Quick books</TITLE>
<style>
 body  {
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(64464.jpg);
 
  background-size:cover;
}
button{
font-family:fantasy;
border: none;
color: white;
height:150;
width:275;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 60px;
margin: 4px 2px;
cursor: pointer;
-webkit-transition-duration: 0.4s; 
transition-duration: 0.2s;
border-radius:10px;
}
button:hover{ 
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
height:160px;
width:300px;
}	
.rt{
	position:absolute;
	left:1230px;
    top:25;
}
.rt:hover{ 
box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
height:60px;
width:00px;
}
.rt:hover{ 
 	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
a{
text-decoration:none; 
color:#ffffff;
}

</style>
</head>
<body>
<table border=0 height=100% width=100%>
<tr height=40% width=100%>
<td ><div class="rt">
	 <a  style="background-color:red"  href='logout.php'><input style="height:40px;
width:90px"; type=button name=Logout value=Logout></a>
</div>
</td>
</tr>
<form>
<tr height=30% width=100%>
<td width=7%>
</td>
<td><button style="background-color:#4CAF50"><a href="sell.php">SELL</button></a>
</td>
<td><button style="background-color:#351297"><a href="buy.php">BUY</button></a>
</td>
<td><button style="background-color:#6D959B"><a href="donate.php">DONATE</button>
</td>
<td><button style="background-color:#BC8F8F"><a href="books(word).pdf">LIBRARY </button></a>
</td>
<td width=5%>
</td>
</tr></form>
<tr height=35% width=100%>
</tr>
</table>
</body>
</html>

        
