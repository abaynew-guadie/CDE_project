<?php
include 'connection.php';

session_start();
 $n=$_POST['faname'];
$e=$_POST['em'];
$content=$_POST['feedback'];
$con= mysqli_connect('localhost','root','','cde');
if(!$con)
{
die('could not be connect :' .mysql_error());
}

$sql="INSERT INTO feed_back(name,email,Comment,date) VALUES('$n','$e','$content',Now())";
$result=mysqli_query($con,$sql);
if(!$result)
{
die("<script>alert('Error! your feedback is not sended!');
window.location=\'feedback.php\';</script>" . mysqli_error($con));
}
else

$x='<script type="text/javascript">alert("Your Information Is Successfully sended !!!");
window.location=\'feedback.php\';</script>';
echo $x;
mysqli_close($con);
?>