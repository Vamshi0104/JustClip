<?php
 $con = mysqli_connect('localhost','id13171096_simplecred12','fn5AULk5XHs7\lQU','id13171096_simplecred') or die('Unable To connect');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Onlyurladd (URL) 
VALUES 
('$_POST[Url]')";

if (!mysqli_query($con,$sql))
  {
  //die('Error: ' . mysqli_error($con));
  header('location: failed.php');
  }
 ?>
<br><br><br><br><h1 align="center" style="color:white;">NOTES SAVED ...</h1>
    <script>
setTimeout(function() {
  window.location.href = "edit_notes.php";
}, 20);
</script>
<?php
mysqli_close($con);
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body style="background-color:black;"><div class="footer">
  <footer style="color:black;font-weight:600;">&copy; Copyright 2020 MVK</footer></body>
<style>
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
</style>