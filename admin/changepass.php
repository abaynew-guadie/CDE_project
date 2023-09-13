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
						<form action="uaccounta.php" method="POST"  onsubmit='return validate()'>
<table bgcolor="#f9fbf9" cellpadding="12" border="0">
<tr><td colspan="2" ><center><h1 style="color: #4b80b4"><b>Change Password
</b></h1></center></td></tr>
<tr><td>Old Password:</td><td><input type="password" id="password" name="opass" required="required"  placeholder="old_password" style="height: 30px;" /></td></tr>
<tr><td>New Password:</td><td><input type="password" id="password" name="npass"required="required"  placeholder="new_password" style="height: 30px;"/></td></tr>
 <tr><td>Confirm Password:</td><td><input type="password" id="password" name="rnpass" required="required"  placeholder="confirm_password" style="height: 30px;"/></td></tr>
 <tr><td><input type="submit" id="btn" name="submit" value="CHANGE"size="20" style="height: 30px;width: 100px;"></td><td>
<input type="reset" id="btn" name="validate" value="RESET"size="20" style="height: 30px;width: 150px;"></td></tr>
</table>
</form>
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
