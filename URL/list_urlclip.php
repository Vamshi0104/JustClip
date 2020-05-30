<html>
<head>
<title>List of URL's</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
table
{
border-style:solid;
border-width:2px;
font-weight:600;
border-color:white;
}
body
{
background-image: url("19.jpg");
background-repeat: no-repeat;
color:white;
font-weight:600;
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
#hi1
{
positon:absolute;
float:right;
right:50%;
padding:10 20px;
background-color:black;
color:white;
border:2px solid white;
}
#hi1:hover
{
   background-color:red;
   color:white;
}
img[alt="www.000webhost.com"]{display:none;}
</style>
</head>
<body bgcolor="black"><br>
<h1 align="center">&emsp;List of URL</h1><br><br><br>
<?php
 $con = mysqli_connect('localhost','id13171096_simplecred12','fn5AULk5XHs7\lQU','id13171096_simplecred') or die('Unable To connect');
 
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$result = mysqli_query($con,"SELECT * FROM Onlyurladd");

echo "<table border='6' align='center'>
<tr>
<th>S.No</th>
<th>URL</th>
<th>Date 'N' Time</th>
</tr>";
$i=0;
$c=0;
while($row = mysqli_fetch_array($result))
  {
    $i++;
  echo "<tr>";
  echo "<td align='center'>" . $i . "</td>";
  echo "<td>" . $row['URL'] . "</td>";
  echo "<td>" . $row['Date & Time'] . "</td>";
  echo "</tr>";
$c++;
  }

echo "</table>";

 echo "Number of Rows : $c";
mysqli_close($con);

?>
<br><br><input type="button" id="hi1" value="DELETE" onclick="window.location.href='del_listurl.php';"/>
<div class="footer">
  <footer style="color:black;font-weight:600;">&copy; Copyright 2020 MVK</footer>
</body>
</html>