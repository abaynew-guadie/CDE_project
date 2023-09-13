<?php
	session_start();
	require_once "../connection.php";
	if(isset($_SESSION['sun'])&& isset($_SESSION['spw'])&& isset($_SESSION['sfn'])&& isset($_SESSION['sln'])&& isset($_SESSION['srole']))
{
?>
<html>
	<head>
		<title>Home page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<style type="text/css">
			ul.profile, ul.side-menu {
			  list-style-type: none; /* Remove bullets */
			  padding: 0; /* Remove padding */
			  margin: 0; /* Remove margins */
			  margin-bottom: .5em;
			}

			ul.profile li, ul.side-menu li {
			  border: 1px solid #ddd; /* Add a thin border to each list item */
			  margin-top: -1px; /* Prevent double borders */
			  background-color: #f6f6f6; /* Add a grey background color */
			  padding: 12px; /* Add some padding */
			}
			ul.side-menu li a, ul.profile li a {
				text-decoration: none;
				color: #000;
			}
			ul.side-menu li.active, ul.profile li.active {
				background-color: dodgerblue;
			}
			ul.side-menu li:hover, ul.profile li:hover {
				background-color: #ddd;
			}
			.profile-pic {
				width: 100%;
				height: 10em;
				margin-left: 0;
				margin-right: 0;
				border-radius: .5em;
				object-fit: cover;
			}
			.name  {
				text-align: center;
				font-family: sans-serif;
				font-size: 1em;
				color: #fff;
				margin: .5em;
			}
		</style>
	</head>
	<body>
		<header><?php require("header.php"); ?></header>
		<div class="container-main row">
			<section>
				<aside class="col-25">
					<?php require("sidemenu.php"); ?>
					<?php include "../left.php"; ?>
				</aside>
				<main class="main col-65">
					<div id="contentindex5">
						<?php
	//Include the PS_Pagination id
		include('../ps_pagination.php');
	
	//Connect to mysql db
	$conn = mysqli_connect('localhost','root','');
	if(!$conn) die("Failed to connect to database!");
	$status = mysqli_select_db($conn,'cde');
	if(!$status) die("Failed to select database!");
?>                                         

<p align="center" style="color: #2773d8;font-family: time new romans;font-size: 17;">Number of record:<?php include '../connection.php'; $count_item=mysqli_query($con,"select * from feed_back " ) or die(mysqli_error());
$count=mysqli_num_rows($count_item);
//$a=count($sql2);
if($count>=1)
{
echo"<font color='red'>".($count)."</font>"; ?></p>
<?php

 	$sql = "SELECT * FROM feed_back  ORDER BY date DESC";
	$pager = new PS_Pagination($conn, $sql, 10, 1);
	$rs = $pager->paginate();
?>
<form name="frmUser" method="post" action="" id="frm1">
<table border="0" width="600px"cellpadding="1" id="resultTable">
<tr>
<th>Name</th>
<th>Email</th>
<th>UserType</th>
<th>comment</th>
<th>date</th>
<th>delete</th>
</tr>
</tr>
<?php
$i=0;
 	$sql = "SELECT * FROM feed_back  ORDER BY date DESC";
	$rs=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($rs)) {
	$id=$row['fbid'];
?>
<tr>

<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["role"]; ?></td>
<td><?php echo $row["Comment"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo '<a href="deletefeedback.php?id='.$row['email'].'">Delete</a>';?></td>
</tr>
<?php
}
?>
</table>
<?php
	echo '<div style="text-align:center">'.$pager->renderFullNav().'</div>';
	}
	else
	echo"<br/>no comment";
?>
					</div>
				</main>
				<aside class="col-25">
					<img src="userphoto/a.jfif">
					<ul class="profile">
						</li>
						<li><a href="updateprofilephoto.php">Change Photo</a></li>
						<li><a href="changepass.php">Change password</a></li>
					</ul>
					<div class="social-link">
						<h3>Social Links</h3>
						<ul>
							<li>
								<a href="https://facebook.com" target="blank"><img class="logo" src="../images/logo/logo_facebook.png" /></a>
							</li>
							<li>
								<a href="https://t.me" target="blank"><img class="logo" src="../images/logo/logo_telegram.svg" /></a>
							</li>
							<li>
								<a href="https://mail.google.com" target="blank"><img class="logo" src="../images/logo/logo_gmail.svg" /></a>
							</li>
							<li>
								<a href="https://linkedin.com" target="blank"><img class="logo" src="../images/logo/logo_linkedin.png" /></a>
							</li>
						</ul>
					</div>
				</aside>
			</section>
		</div>
		<?php require("../footer.php"); ?>
	</body>
</html>
<?php
}
else
	header("location:../index.php");
?>