<html>
<head>
<title>Easy Notes</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto);
@import url(https://fonts.googleapis.com/css?family=Handlee);
body {
 margin: 40px 0 0;
color:black;
font-family: 'Roboto', sans-serif;
background: rgb(132, 55, 63);
  background: -moz-linear-gradient(90deg, rgba( 132, 55, 63) 0%, rgba(176,143,38) 100%);
  background: -webkit-linear-gradient(90deg, rgba(  132, 55, 63) 0%, rgba(176,143,38) 100%);
  background: linear-gradient(90deg, rgba(  132, 55, 63) 0%, rgba(176,143,38) 100%);
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#c37bff",endColorstr="#83b4ed",GradientType=1);
}
img[alt="www.000webhost.com"]{display:none;}
#fe
{
width:100px;
display: block;
width: 40vh;
  height: 45px;
  border: none;
text-align: center;
  border-radius: 5px;
  font-size: 20px;
  font-weight:500;
  margin-bottom: 30px;
 margin : 0 auto;
}
#bye {
position:absolute;
border-radius: 25px;
left:65%;
 width: 150px;
float:right;
padding :15 20;
background: none;
  color: white;
  font-size: 17px;
  border: 2.5px solid white;
  border-left: 10;
  cursor: pointer;
}
#bye:hover {
  background: green;
}
.paper {
    position: relative;
    width: 90%;
    max-width: 800px;
    min-width: 400px;
    height: 360px;
    margin: 0 auto;
    background: #fafafa;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,.3);
    overflow: hidden;
}
.paper:before {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 0;
    width: 60px;
    background: radial-gradient(#575450 6px, transparent 7px) repeat-y;
    background-size: 30px 30px;
    border-right: 3px solid #D44147;
    box-sizing: border-box;
}
#fn
{
color:white;
text-align:center;
font-weight:500;
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
.paper-content {
    position: absolute;
    top: 30px; right: 0; bottom: 30px; left: 60px;
    background: linear-gradient(transparent, transparent 28px, #91D1D3 28px);
    background-size: 30px 30px;
}
.paper-content textarea {
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    line-height: 30px;
    padding: 0 10px;
    border: 0;
    outline: 0;
    background: transparent;
    color: mediumblue;
    font-family: 'Handlee', cursive;
    font-weight: bold;
    font-size: 18px;
    box-sizing: border-box;
    z-index: 1;
}
@media only screen and (max-width: 600px) {
#hi
{
margin-left:235px;
}
#bye
{
position:absolute;
border-radius: 25px;
left:60%;
 width: 150px;
float:right;
padding :15 20;
background: none;
  color: white;
  font-size: 17px;
  border: 2.5px solid white;
  border-left: 10;
  cursor: pointer;
}
}
@media screen and (min-width: 601px) and (max-width: 800px) {
#hi
{
margin-left:435px;
}
#bye
{
position:absolute;
border-radius: 25px;
left:65%;
 width: 150px;
float:right;
padding :15 20;
background: none;
  color: white;
  font-size: 17px;
  border: 2.5px solid white;
  border-left: 10;
  cursor: pointer;
}
}
@media screen and (min-width: 801px) and (max-width: 1200px) {
#hi
{
margin-left:585px;
}
#bye
{
position:absolute;
border-radius: 25px;
left:65%;
 width: 150px;
float:right;
padding :15 20;
background: none;
  color: white;
  font-size: 17px;
  border: 2.5px solid white;
  border-left: 10;
  cursor: pointer;
}
}
}
</style>
<script>
function download(filename, text) {
  var element = document.createElement('a');
  element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
  element.setAttribute('download', filename);

  element.style.display = 'none';
  document.body.appendChild(element);

  element.click();

  document.body.removeChild(element);
}
</script>
</head>
<body>
<h1 align="center" style="font-family:Handlee;color:white;font-size:35px;">&raquo; Easy Notes &laquo;</h1>
<form onsubmit="download(this['name'].value, this['text'].value)">
<h1 id="fn">File Name :</h1><input type="text" name="name" id="fe" title="Enter File Name like 'Hello.html'" placeholder="File Name with Extension.." autofocus required/><br><br>
<div class="paper">
    <div class="paper-content">
        <textarea name="text" id="t1" autofocus>Hey Buddy !&#10;Add Your Notes and Share Now...</textarea>
    </div>
</div><br><br>
<input type="submit" id="bye" value="Download">
<br><br><br><br><br>
</form>
<div class="footer">
  <footer style="color:black;font-weight:600;">&copy; Copyright 2020 MVK</footer>
</body>
</html>