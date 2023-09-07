<?php
session_start();
require_once "connection.php";
?>
<html>
	
<head>
		<title>Home page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header><?php require("header.php"); ?></header>
		<div class="container-main row">
			<section>
				<aside class="col-25">
					<?php include "left.php"; ?>
				</aside>
				<style type="text/css">
						.main{
							background-color: #ffffff;
						}
					</style>
				<main class="main col-65">
					
					<div id="contentindex5">
		<?php
		include('ps_pagination.php');
	$conn = mysqli_connect('localhost','root','');
	if(!$conn) die("Failed to connect to database!".mysqli_error($conn));
	$status = mysqli_select_db($conn,'cde');
	if(!$status) die("Failed to select database!");
?>

	<fieldset><legend>Notice Bored</legend>
<?php

	$date=date('Y-m-d');
	$sql1=mysqli_query($conn,"SELECT * from postss where Ex_date>='$date' ORDER BY dates ASC") or die(mysqli_error($conn));	
	$ro=mysqli_num_rows($sql1);
	if($ro!='0')
	{
		
	$sql="SELECT * from postss where Ex_date>='$date' ORDER BY dates DESC";
	//$pager = new PS_Pagination($conn,$sql,1,10);
	//$rs = $pager->paginate();
	$rs=mysqli_query($conn,$sql);
	while($row=mysqli_fetch_array($rs))
	{
	
            echo"<p align='right'><b>Date:</b>"."<u>".$row['dates']."</u>"."</p>";
            echo"<font face='monotype corsiva' size='7' ><center>"."<u>".$row['Title']."</u>"."</center>"."</p>";
             
           	
			echo"<font face='monotype corsiva' size='5' ><center>".$row['types']."</center>"."</p>"."</font>";
			echo "<font  size='3'>".$row['info'];
           echo"<font size='4'><center>".$row['posted_by']."</center>"."</p>";
         		

	}
	}
	else
	{
		echo '<script type="text/javascript">alert("There No Post Notice!!!");</script>';
		
	}
	//echo '<div style="text-align:center;font-size:25px;color:red;bgcolor:blue">'.$pager->renderFullNav().'</div>';
?>
</fieldset>
</div>
				</main>
				<aside class="col-25">
					<?php include "leftlogin.php"; ?>
					<div class="social-link">
						<h3>Social Links</h3>
						<ul>
							<li>
								<a href="https://m.facebook.com/pg/JimmaUniversityOfficial" target="blank"><img class="logo" src="images/logo/logo_facebook.png" /></a>
							</li>
							<li>
								<a href="https://t.me/JimmaUniversityOfficial" target="blank"><img class="logo" src="images/logo/logo_telegram.svg" /></a>
							</li>
							<li>
								<a href="https://mail.google.com" target="blank"><img class="logo" src="images/logo/logo_gmail.svg" /></a>
							</li>
							<li>
								<a href="https://linkedin.com" target="blank"><img class="logo" src="images/logo/logo_linkedin.png" /></a>
							</li>
						</ul>
					</div>
				</aside>
			</section>
		</div>
		<?php require("footer.php"); ?>
	</body>
</html>