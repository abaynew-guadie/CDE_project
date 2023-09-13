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
						<p align="center" style="color: white;"><b>Blocked User in the organization</b></p>
<p align="center" style="color: #2773d8;font-family: time new romans;font-size: 17;">Number of record:<?php include '../connection.php';
 $count_item=mysqli_query($con,"select * from account WHERE status='no'" ) or die(mysql_error($con));
$count=mysqli_num_rows($count_item);
//$a=count($sql2);
echo"<font color='red'>".($count)."</font>"; ?></p>
<?php
include '../connection.php';
$con= mysqli_connect('localhost','root','','cde');
$result=mysqli_query($con,"SELECT * FROM account WHERE status='no'");
?>

<table cellpadding="1" cellspacing="1" id="resultTable" style="margin-left: -20px;">

<tr>
<th>UID</th>
<th>First<br>Name</th>
<th>Last<br>Name</th>
<th>Sex</th>
<th>Email</th>
<th>Phone</th>
<th>Location</th>
<th>Action</th>
</tr>
<?php
$con= mysqli_connect('localhost','root','','cde');
$result=mysqli_query($con,"SELECT * FROM account WHERE status='no'") or die(mysqli_error($con));
mysqli_select_db($con,'cde');
while($myrow=mysqli_fetch_array($result))
{
	$id=$myrow['UID'];
	$sql="SELECT * FROM user WHERE UID='$id'";
$result1=mysqli_query($con,$sql);
$myrow1=mysqli_fetch_array($result1);	
echo "<tr>";
echo "<td>" . $myrow['UID']. "</td>";
echo "<td>" . $myrow1['fname']. "</td>";
echo "<td>" . $myrow1['lname']. "</td>";
echo "<td>" . $myrow1['sex']. "</td>";
echo "<td>" . $myrow1['Email']. "</td>";
echo "<td>" . $myrow1['phone_No']. "</td>";
echo "<td>" . $myrow1['location']. "</td>";
//echo "<td>" . $myrow['photo']. "</td>";
//echo "<td>" . $myrow['d_code']. "</td>";
//echo "<td>" . $myrow['c_code']. "</td>";



$data5=$myrow['status'];
$data3='yes';?>
<td><a href="ACTIONVBU.php?status=<?php echo $myrow['UID'];?>" 
 id="btn" onchange="Block" onclick="return confirm('Are you sure <?php echo $id?>');">
 <?php
 $select=mysqli_query($con,"select * from account WHERE UID='$id' ");
$row=mysqli_fetch_object($select);
$status_var=$row->status;
IF($status_var=='yes'){
	?>
<input type="button" value="Block" style="background-color: #243cdb;color: #fffbfb;height: 25px;width: 100px; text-decoration: none;"/> 
	 <?php
}
else
{
 ?>
<input type="button" value="UNBlock" style="background-color: red;color: #ffffff;height: 25px;width: 100px; text-decoration: none;" /></a></td>

<?php
}
}
?>
</tr>
</table>
<?php
mysqli_close($con);
?>
					</div>
				</main>
				<aside class="col-25">
					<img class="profile-pic" src="<?php echo $_SESSION['sphoto']; ?>" />
					<span class="name">Hello, <?php echo "<b>".strtoupper($_SESSION['sfn']." ".$_SESSION['sln'])."</b>"; ?></span>
					<ul class="profile">
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
