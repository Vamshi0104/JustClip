<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Just Clip</title>
<div class="wrapper">
<h1 align="center" class="cursive" >JUST CLIP</h1>
<button class="button" onclick="window.location.href='login_url.php'">URL</button>
<button class="button1" onclick="window.location.href='login_text.php'">TEXT</button>
<div align="center">
<button class="button2" onclick="window.location.href='edit_notes.php'">EDITOR</button>
</div>
<div class="footer">
  <footer style="color:black;font-weight:600;">&copy; Copyright 2020 MVK</footer>
</div>
<style>
img[alt="www.000webhost.com"]{display:none;}
@import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700');
html,
body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    color: #ffffff;
     background: rgb(132, 55, 63);
  background: -moz-linear-gradient(90deg, rgba( 132, 55, 63) 0%, rgba(176,143,38) 100%);
  background: -webkit-linear-gradient(90deg, rgba(  132, 55, 63) 0%, rgba(176,143,38) 100%);
  background: linear-gradient(90deg, rgba(  132, 55, 63) 0%, rgba(176,143,38) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#c37bff",endColorstr="#83b4ed",GradientType=1);
}
/* Navbar section */
.wrapper{
    text-align: center;
}
.button {
    position: absolute;
    top: 50%;
    left:30%;
 background-color: black; 
  border: none;
  color:#ffffff;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 49px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button2 {
    position: absolute;
    top: 70%;
    left:42%;
 background-color: black; 
  border: none;
  color:#ffffff;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 49px;
  transition-duration: 0.4s;
  cursor: pointer;
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
.button1 {
    position: absolute;
    top: 50%;
left:60%;
background-color: black; 
  border: none;
    color:#ffffff;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 49px;
  transition-duration: 0.4s;
  cursor: pointer;
}
.button:hover {
  background-color:#1E90FF; 
  color: white; 
  border: 2px solid white;
}

.button1:hover {
  background-color:#1E90FF; 
  color: white; 
  border: 2px solid white;
}
.button2:hover {
  background-color:#1E90FF; 
  color: white; 
  border: 2px solid white;
}
.cursive
{
position:absolute;
top:22%;
left:20%;
font-size:65px;
font-family: 'Questrial','Helvetica Neue',Arial,sans-serif;
text-transform: none;
 text-align: center;
}

@media only screen and (min-width: 320px) {
    .container {
        margin: 0 ;
    }
.cursive
{
position:absolute;
top:22%;
left:40%;
font-size:55px;
font-family: 'Questrial','Helvetica Neue',Arial,sans-serif;
text-transform: none;
 text-align: center;
}
.button
{
left:35%;
}
.button1
{
left:50%;
}
.button2
{
left:42%;
}
}
@media only screen and (max-width: 600px) {
    .container {
        margin: 0 ;
    }
.cursive
{
position:absolute;
top:22%;
left:40%;
font-size:55px;
font-family: 'Questrial','Helvetica Neue',Arial,sans-serif;
text-transform: none;
 text-align: center;
}
.button
{
left:35%;
}
.button1
{
left:50%;
}
.button2
{
left:25%;
}
}
@media only screen and (max-width: 800px) and (min-width: 520px) {
.container {
    margin: 0 ;
}
.cursive
{
position:absolute;
top:22%;
left:75%;
font-size:55px;
font-family: 'Questrial','Helvetica Neue',Arial,sans-serif;
text-transform: none;
 text-align: center;
}
.button
{
left:45%;
}
.button1
{
left:50%;
}
.button2
{
left:30%;
}
}
@media screen and (max-width:900px) {
.button
{
left:25%;
margin: 4px 2px;
}
.button1
{
left:50%;
margin: 4px 2px;
}
.cursive
{
position:absolute;
top:29%;
left:30%;
font-size:45px;
font-family: 'Questrial','Helvetica Neue',Arial,sans-serif;
text-transform: none;
margin: 4px -30px;
 text-align: center;
}
}
@media screen and (min-width: 768px) and (max-width: 1024px) {
.cursive
{
position:absolute;
top:22%;
left:40%;
font-size:55px;
font-family: 'Questrial','Helvetica Neue',Arial,sans-serif;
text-transform: none;
 text-align: center;
}
.button
{
left:35%;
}
.button1
{
left:50%;
}
}
@media screen and (max-width:768px) {
.button
{
left:20%;
}
.button1
{
left:55%;
}
.cursive
{
position:absolute;
top:29%;
left:32%;
font-size:49px;
font-family: 'Questrial','Helvetica Neue',Arial,sans-serif;
text-transform: none;
 text-align: center;
}
}
</style>