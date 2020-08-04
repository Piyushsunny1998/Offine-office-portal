<!DOCTYPE html>
<html>
<head>
<style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
body{
margin:0;
padding:0;
}

html{
   background-image:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.8)),url("img/2.jpg");
  background-size:cover;
  position:relative;
}
div.p1{

  left:150px;

}
h1{
   text-transform:uppercase;
    font-size:80px;
	font-weight:900;
	text-align:center;
	color:white;
	font-family: 'Lato', sans-serif;
	margin-top:100px;
	background-image:url("img/4.jpg");
	background-size:cover;
	color:transparent;
	-webkit-background-clip:text;
 }
div.d{
  position:absolute;
  height:200px;
  width:500px;
  background-color:grey;
  top:350px;
  left:350px;
  border-radius:10px;
  padding:10px;
  font-size:20px;
}
input[type=text]
{
   width:350px;
   border-radius:7px;
   height:20px;
      font-family: 'Lato', sans-serif;
 }
input[type=password]
{
   width:350px;
   border-radius:7px;
   height:20px;

 }
 input[type=submit]
{
  height:40px;
  width:100px;
   border-radius:5px;
   background-color:transparent;
   color:white;
   font-family: 'Lato', sans-serif;
}
#p1{
  margin-left:350px;
 }
 p{
   font-size:20px;
   color:white;
   }
 button{
   width:70px;
   height:40px;
      border-radius:5px;
 }
</style>
</head>
<body>

<div class="p1 animated bounceInLeft">
<h1>WELCOME TO ADMIN PANEL</h1>
</div>
<div class="d animated bounceInLeft">
<form action = >

<p>Username:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type = "text" placeholder="username"/></p>
<p>Password:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type = "password" placeholder="password"/></p>
<input type = "submit" value = "submit" id="p1"/>
</form>
<button><a href = "homepage.htm">Back</button>
</div>

</body>
</html>
