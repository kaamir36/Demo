<HTML>
<HEAD><title>Quick books</title>
<style>

body  {
background-image:linear-gradient(rgba(255,255,255,0.1),rgba(255,255,255,0.1)), url(89.jpg);
background-size:cover;
}
.page{
width:400;
padding:10%;
margin:auto;
height:240;
}
.form{
background-color:D7FBFF;
background-color:rgba(26,23,13,40%);
position:relative;
max-width:auto;
height:460px;
margin:12;
padding:50px;
text-align:center;
border-radius:10px;
top:-90;
left:-15;
border-radius:15px;
}
.dob{
position:relative;
top:-360;
left:-20;
text-align:center;
}
.form input{
position:relative;
top:3;
font-family:"roboto";
outline:1;
background:rgba(26,23,13,40%);
width:100%
border:none;
margin:5px;
padding:12px;
box-sizing:border-box;
font-size:20;
border:none;
color:#8F9198;
}
button{
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 12px 48px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 15px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; 
  transition-duration: 0.4s;

  }
  button:hover{ box-shadow: 0 12px 16px 0 rgba(0,0,0,0.54),0 17px 50px 0 rgba(0,0,0,0.49);
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
p{
font-family:"roboto";
margin:5;
font-size:18;
}
::placeholder{
  color:#CAC6C6;
}
</style>
</head>
<BODY>
<div>
<img class="abc" src="125.png">
<h3>Quick books</h3>
</div>
<div class="page">
<div class="form">
	<form action="signup.php" method="post">
<input type="text" placeholder="Name" name="fname" required="required"/> <input type="text" placeholder="Surname"name="sname" required="required"/>
<input type="number" placeholder="College Roll Number" name="roll" required="required"/>
<input type="email" placeholder="Email" name="email" required="required"/>
<input type="password" placeholder="Password" required="required" name="password"/>
</div>

<div class="dob" >
<br><br><p><b>DATE OF BIRTH</b></p>
<input style="background:rgba(26,23,13,40%) ;border:none;color:#CAC6C6;font-size:18;text-align:center " type="date" name="dob" value="dob">

<br><br>
<p><b>GENDER</b></p>
&nbsp &nbsp <b>Male<input type="radio" name="r1" value="M" required="required">
Female</b><input type="radio" name="r1" value="F" required="required"><br>
<button>SIGN IN </button>
</form>

</div>
</div>

</BODY>


</HTML>