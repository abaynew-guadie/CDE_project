<?php
$domain="localhost";
$dbuser="root";
$dbpass="";
$dbname="cde";
$con=mysqli_connect($domain,$dbuser,$dbpass);
if(mysqli_errno($con)){
printf("connect failed:%s\n",mysql_error($con));
	exit();
}
$link=mysqli_connect($domain,$dbuser,$dbpass);
if(mysqli_connect_errno()){
printf("connect failed: %s\n", mysqli_connect_errno());
	exit();
}
mysqli_select_db($link,$dbname)or die(mysqli_error($link));
mysqli_select_db($con,$dbname)or die(mysqli_errno($con));
?>