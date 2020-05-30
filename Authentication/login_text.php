<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('localhost','id13171096_simplecred12','fn5AULk5XHs7\lQU','id13171096_simplecred') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM Me WHERE Password='" . $_POST["Password1@99"] . "'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["Name"] = $row['Name'];
} else {
$message = "Oops... Invalid Password !!!";
}
}
if(isset($_SESSION["Name"]))
{
header("Location:clip_easynotes.php");
}
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login_TEXT_CLIP</title>
<div class="cont">
  <div class="form">
    <form action="" method="post">
        <div class="message" ><?php if($message!="") { echo $message; } ?></div>
      <h1>Login</h1>
      <input type="password" 
             id="passw1" class="pass"
             name="Password1@99"  placeholder="Password" required/>
<input type="checkbox" onclick="myFunction1()">&nbsp;Show Password
<br><br>
      <button type="submit" class="login">Login</button>
    </form>
  </div>
 </div>
<div class="footer">
  <footer style="color:black;font-weight:600;">&copy; Copyright 2020 MVK</footer>
<style>
@import url('https://fonts.googleapis.com/css?family=Raleway:300,400,700');

*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Raleway', sans-serif;
}
.message
{
font-weight:600;
color:red; 
text-align:center;
}
body{ 
 background: rgb(132, 55, 63);
  background: -moz-linear-gradient(90deg, rgba( 132, 55, 63) 0%, rgba(176,143,38) 100%);
  background: -webkit-linear-gradient(90deg, rgba(  132, 55, 63) 0%, rgba(176,143,38) 100%);
  background: linear-gradient(90deg, rgba(  132, 55, 63) 0%, rgba(176,143,38) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#c37bff",endColorstr="#83b4ed",GradientType=1);
}
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
.cont{
  position: relative;
  width: 25%;
  height: 350px;
  padding: 10px 25px;
  margin: 10vh auto;
  background: #fff;
  border-radius: 8px;
}

.form{ width: 100%; height: 100%; }

h1, h2, .user, .pass{ 
  text-align: center;
  display: block;
}

h1{ 
  color: #606060;
  font-weight: bold;
  font-size: 40px;
  margin: 30px auto;
}
.pass, .login{
  width: 100%;
  height: 45px;
  border: none;
  border-radius: 5px;
  font-size: 20px;
  font-weight: lighter;
  margin-bottom: 30px;
}
.pass{ background: #ecf0f1; }

.login{
  color: #fff;
  cursor: pointer;
  margin-top: 20px;
  background: #3598dc;
  transition: background 0.4s ease;
}

.login:hover{ background: green; }

@media only screen and (min-width : 280px) {
  .cont{ width: 90% }
}

@media only screen and (min-width : 480px) {
  .cont{ width: 60% }
}

@media only screen and (min-width : 768px) {
  .cont{ width: 40% }
}

@media only screen and (min-width : 992px) {
  .cont{ width: 30% }
}

h2{ color: #fff; margin-top: 25px; }
</style>
<script>
function myFunction1() {
  var x = document.getElementById("passw1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>