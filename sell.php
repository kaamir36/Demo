
<html>
<head>
<title>SELL</TITLE>
<style>
body{
background-image:linear-gradient(rgba(255,255,255,0.4),rgba(255,255,255,0.4)),url(4444.jpg);
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
height:75%;
width:45%;
position:absolute;
top:20%;
left:44%;

}
.f{
height:75%;
width:30%;
position:absolute;
top:22%;
left:10%;
background-color:rgba(26,23,13,35%);
text-align:center;
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
margin:9px;
padding:12px 0px;
box-sizing:border-box;
font-size:20;
color:#ffffff;
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
::placeholder{
color:#CAC6C6;
}
textarea{
  background:rgba(20,20,13,50%);;
  color: white;
  font-size:20px;
  border:none;
text-align:center;
}
#outerbox
{
  width:700px;
  overflow:hidden;
}
#sliderbox
{
   position:relative;
   width:4200px;
     animation-name:project;
     animation-duration:30s;
     animation-iteration-count:infinite;   
}
#sliderbox img
{  
     float:left;
}
@keyframes project{
  
    0%
    {
      left:0px;
      
    }   
         14%
    {
        left:0px;
    }
    17%
    {
      left:-700px;
    }
    30%
    {
      left:-700px;
    }
    34%
    {
      left:-1400px;
    }
    47%
    {
      left:-1400px;
    }
    50%
    {
      left:-2100px;
    }
    64%
    {
      left:-2100px;
    }
    67%
    {
      left:-2800px
    }
    80%
    {
      left:-2800px;
    }
    84%
    {
      left:-3500px;
    }
    97%
    {
      left:-3500px;
    }
    100%
    {
      left:4200px;
    }
      
     
}
  
</style>
</head>
<body>

<img class="abc" src="125.png">
<a href="catego.php" style = "color:black"><h3>Quick books</h3></a>

<div class="sld">
    <div id="outerbox">
        <div id="sliderbox">
            <img src="1.jpg"/>
      <img src="2.jpg"/>
      <img src="3.jpg"/>
      <img src="4.jpg"/>
      <img src="5.jpg"/>
      <img src="6.jpg"/>
    </div>
    </div>


</div>
<div class="f">
<form action="sell1.php" method="post">
<br><br><br>
<input type="text" placeholder="YOUR NAME" name="name"><br>
<input type="text" placeholder="MOBILE NUMBER" name="mobile_number"><br>
<input type="text" placeholder="NAME OF THE BOOK" name="book_name"><br>
<textarea type="message" placeholder="ABOUT THE BOOK" name="about_book" style="padding:60px 7px"></textarea><br>


<button>UPLOAD</button> 
</form>
</div>

</body>
</html>
