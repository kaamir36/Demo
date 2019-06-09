
<?php
 function showData(){ include('dbcon.php');
if(isset($_POST['searchh']))
{
  $sch = $_POST['search'];
  $que = "SELECT * FROM `userdata1` WHERE `book_name` LIKE '%$sch%'";
  $run = mysqli_query($con,$que);
  if($run == TRUE)
  {
  while($data = mysqli_fetch_assoc($run))
  {

    $name =$data['name'];
    $mobile = $data['mobile_number'];
     $book = $data['book_name'];
     $abt_bk = $data['about_book'];
    echo "<br><br><br>";
    echo "<h2 align = center> Name-$name";
    echo "<h2 align = center> Number-$mobile";
    echo "<h2 align = center> book-$book";
    echo "<h2 align = center> about book-$abt_bk";  

     
  
  }}
else{
  echo "error";
}
}
}
?>
<html>
<head>
<title>BUY</TITLE>
<style>
body{
background-image:linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)),url(4444.jpg);
background-size:cover;
}
.abc{
height:100px;
width:100px;
position:absolute;
top:35;
left:20;
}
a{
  text-decoration: none;
}
h3{
position:absolute;
font-size:60;
top:3;
left:130;
}
.f{
height:20%;
width:30%;
position:absolute;
top:2%;
left:60%;
border-radius:10px;

}
input{
text-align:center;
color:#ffffff;	
font-family:"roboto";
outline:1;
background:rgba(20,20,13,50%);
border:none;
width:100%
border:1;
margin:4px;
padding:8px 0px;
box-sizing:border-box;
font-size:20;
color:#ffffff;
border-radius:15px;
}

button{
  background-color: #4CAF50;
  border: none;
  border-radius:15px;
  color: white;
  padding: 11px 32px;
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
::placeholder{
color:#ffffff;
}
textarea{
  background:rgba(20,20,13,50%);;
  color: white;
  font-size:20px;
text-align:center;
}

</style>
</head>
<body>

<img class="abc" src="125.png">
<a href="catego.php" style = "color:black"><h3>Quick books</h3></a>

<div class="sld">

</div>
<div class="f">
<form action="buy.php" method="post">
<br><br>
<input type="text" name="search" placeholder="NAME OF THE BOOK" name="bkname">

<button value = "searchh" name= "searchh">SEARCH</button> 
</form>
</div>
<?php showData();   ?>
</body>
</html>

