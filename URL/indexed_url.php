<?php
session_start();
echo'<script>
function dis();{document.getElementById("bye").disabled = true;document.getElementById("hi").disabled = true;}</script>';
?>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>URL_CLIP</title>
<style>
h1
{
font-family:serif;
font-weight:900;
}
form
{
color:white;
}
body {
  height: 20vh;
  color: #FFF;
  background: rgb(132, 55, 63);
  background: -moz-linear-gradient(90deg, rgba( 132, 55, 63) 0%, rgba(176,143,38) 100%);
  background: -webkit-linear-gradient(90deg, rgba(  132, 55, 63) 0%, rgba(176,143,38) 100%);
  background: linear-gradient(90deg, rgba(  132, 55, 63) 0%, rgba(176,143,38) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#c37bff",endColorstr="#83b4ed",GradientType=1);
	 padding-top: 75px;
}
#m1
{
    top:10%;
  padding: 1em 1.5em;
  float:right;
  text-decoration: none;
  text-transform: uppercase;
  background-color: black; 
  border: none;
color:#ffff4c;
  padding: 16px 32px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
#formclass
{
  align-items: center;
  text-align: center;
  left:40%;
}
#m1:hover {
  background-color:red; 
  color: white; 
  border: 2px solid white;
}
input#search-bar {
	 margin: 0 auto;
	 width: 400px;
	 height: 55px;
	 padding: 0 20px;
	background: none;
	color:white;
	 font-size: 20px;
	 border: 5px solid white;
                  border-radius: 25px;
	 outline: none;
}
span {
    content: "\27A4";
    font-size:30px;
}
img[alt="www.000webhost.com"]{display:none;}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   padding:8px;
   background-color: #ccc;
   color: white;
   text-align: center;
}
input#bye {
position:relative;
border-radius: 20px;
right:8%;
 width: 140px;
padding :15 20;
background: none;
  color: white;
  font-size: 17px;
  border: 2.5px solid white;
  border-left: 10;
  cursor: pointer;
}
input#bye:hover {
  background: green;
}
input#hi {
position:absolute;
border-radius: 20px;
 width: 140px;
 right:35%;
padding :15 20;
background: none;
  color: white;
  font-size: 17px;
  border: 2.5px solid white;
  border-left: 10;
  cursor: pointer;
}
input#hi:hover {
  background:  #1E90FF;
}
@media screen and (max-width:768px) {
input#hi {
right:23%;
}
input#bye {
right:12%;
}
}
@media only screen and (max-width: 600px) {
input#hi {
width: 100px;
right:12%;
}
input#bye {
width: 100px;
right:15%;
}
input#search-bar {
width: 300px;
}
#m1
{
padding: 10px 20px;
}
}
</style>
<a class="button1" href="logout.php" id="m1"><i class="fa fa-fw fa-user"></i>Logout</a><br><br><br>
<body>
  <form action="add_urlclip.php" id="formclass" method="post" >
<h1 align="center">URL ClipBoard</h1><br><br><br><br>
<span>&#10148;</span>&emsp;<input  type="url" name="Url" id="search-bar" onfocus="this.placeholder=''" onblur="this.placeholder='Type URL like  https://www.google.com'" spellcheck="value" autofocus="autofocus" required><br><br><br>
&emsp;&emsp;&emsp;&emsp;<input type="submit" id="bye" value="ADD">&emsp; 
&emsp;&emsp;&emsp;<input type="button" id="hi" onclick="window.location.href='list_urlclip.php'" value="LIST">
  </form>
<div class="footer">
  <footer style="color:black;font-weight:600;">&copy; Copyright 2020 MVK</footer>
</div>
<?php
if(($_SESSION["Name"])) {
?>
<br><br><br><br>
        <h1 align="center">Hello <?php echo $_SESSION["Name"]; ?> !!!</h1>
        
<?php
}else{
    echo "<h1>Please login first .</h1>";
   echo '<script>setTimeout(function () {window.location.href="fail.php";},1);</script>';
}
?>
</body>
</html>