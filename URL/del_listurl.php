<?php
 $con = mysqli_connect('localhost','id13171096_simplecred12','fn5AULk5XHs7\lQU','id13171096_simplecred') or die('Unable To connect');
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="DELETE FROM Onlyurladd";
if($x!=true)
{
if (!mysqli_query($con,$sql))
  {
  //die('Error: ' . mysqli_error($con));
  header('location: failed.php');
 }
}
 ?>
<br><br><br><br><h1 align="center" style="color:white;">DELETED ALL CLIPBOARD URL !!!</h1>
    <script>
setTimeout(function() {
  window.location.href = "list_urlclip.php";
}, 10);
</script>
<?php
mysqli_close($con);
?>
<body style="background-color:black;"></body>
<style>
img[alt="www.000webhost.com"]{display:none;}
</style>