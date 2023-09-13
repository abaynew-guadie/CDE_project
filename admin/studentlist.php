<?php
	session_start();
	require_once "../connection.php";
	require_once "../ps_pagination.php";
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
		<header><?php require("../header.php"); ?></header>
		<div class="container-main row">
			<section>
				<aside class="col-25">
					<?php require("sidemenu.php"); ?>
					<?php include "../left.php"; ?>
				</aside>
				<main class="main col-65">
					<div id="contentindex5">
						<form action="" method="post"><?php					
							$sql = "SELECT * FROM student where unread='no'";		
							$pager = new PS_Pagination($con, $sql, 12, 1);
							$rs = $pager->paginate();
	
							$sql2 = "SELECT * FROM entrance_exam where status='unsatisfactory' and (account=' ' or account='seen')";		
							$pager2 = new PS_Pagination($con, $sql2, 12, 1);
							$rs2 = $pager2->paginate();
		
							$query = mysqli_query($con,"select * from student where unread='no' ORDER BY Department ASC")or die(mysqli_error());
							$coun = mysqli_num_rows($query);

							$query1 = mysqli_query($con,"select * from entrance_exam where status='unsatisfactory' and (account=' '  or account='seen') ORDER BY S_ID ASC")or die(mysqli_error());
							$coun1 = mysqli_num_rows($query1);
							$total=$coun+$coun1;
							if ($total != '0'){
								if($coun!=0)
								{
							?> List of students Create Account for All Students<a href="generatepassword.php" style="color: blue;background-color:pink; font-size: 20px;text-decoration: none;">Create Account For All Students</a>
								<table id="resultTable" width="100%" cellspacing="0" style="margin-left: -20px">
									<tr>
										<th>Student ID</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Sex</th>
										<th>Email</th>
										<th>PhoneNo</th>
										<th>College</th>
										<th>Department</th>
									</tr>
									<?php while($row1 = mysqli_fetch_array($query )){	
											$id=$row1["S_ID"]; ?>
									<tr>
										<div class="post" id="del<?php echo $id; ?>">
											<td><?php echo $row1["S_ID"]; ?></td>
											<td><?php echo $row1["FName"]; ?></td>
											<td><?php echo $row1["LName"]; ?></td>
											<td><?php echo $row1["Sex"]; ?></td>
											<td><?php echo $row1["Email"]; ?></td>
											<td><?php echo $row1["Phone_No"]; ?></td>
											<td><?php echo $row1["College"]; ?></td>
											<td><?php echo $row1["Department"]; ?></td>
										</div>
											<?php } ?>
									</tr>
								</table>
						</form>
<?php echo '<div style="text-align:center">'.$pager->renderFullNav().'</div>'; }
if($coun1!=0)
	{ ?> 
		List of students Block Account
		<table id="resultTable" width="100%" cellspacing="0" style="margin-left: -20px">
			<tr>
				<th>Student ID</th>
				<th>Department</th>
				<th>Status</th>
				<th>Status2</th>
				<th>Action</th>
			</tr><?php
			$sql2 = "SELECT * FROM entrance_exam where status='unsatisfactory' and (account=' ' or account='seen')";
			$rs2=mysqli_query($con,$sql2);
			while($row11 = mysqli_fetch_array($rs2)){	
			$id=$row11["S_ID"]; 
			$query0 = mysqli_query($con,"select * from student where S_ID='$id'")or die(mysqli_error());	
				$row110 = mysqli_fetch_array($query0);
				$dpt=$row110['Department'];							
			?>
			<tr>
				<div class="post" id="del<?php echo $id; ?>">
					<td><?php echo $row11["S_ID"]; ?></td>
					<td><?php echo $dpt; ?></td>
					<td><?php echo $row11["status"]; ?></td>
					<td style="color: green;font-size: 20px"><?php echo $row11["account"]; ?></td>
					<td><a href="ACTIONs.php?status=<?php echo $row11['S_ID'];?>" id="btn" onchange="Block" onclick="return confirm('Are you sure <?php echo $id?>');"><?php
					 $select=mysqli_query($con,"select * from account WHERE UID='$id' ");
					$row=mysqli_fetch_object($select);
					//$status_var=$row->status;

						?>
						<input type="button" value="Block" style="background-color: #243cdb;color: #fffbfb;height: 25px;width: 100px; text-decoration: none;" /> </a>
					</td>
				</div>
				<?php } ?>
			</tr>
	</table>
	<?php echo '<div style="text-align:center">'.$pager->renderFullNav().'</div>'; } }else{ ?>
		<div class="alert alert-info"><i class="icon-info-sign"></i> <font size="3px">No New Request found!</div> <?php } ?></div></div>
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