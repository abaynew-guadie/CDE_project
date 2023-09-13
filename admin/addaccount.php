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
		<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	   	<script src="lib/jquery.js" type="text/javascript"></script>
	  	<script src="src/facebox.js" type="text/javascript"></script>
	  	<script type="text/javascript">
	    	jQuery(document).ready(function($) {
	      	$('a[rel*=facebox]').facebox({
	        	loadingImage : 'src/loading.gif',
	        	closeImage   : 'src/closelabel.png'
	      	})
	      })
	  	</script>
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
			#contentindex5 {
				color: #fff;
			}
			#contentindex5  a, #contentindex5 input {
				text-decoration: none;
				padding: .25em .5em;
				margin: .5em;
				color: #fff;
			}
			#contentindex5 input {
				color: #000;
			}
			#contentindex5  a {
				background-color: dodgerblue;
				display: block;
				width: 10em;
				text-align: center;
				border-radius: .25em;
				font-weight: bolder;
			}
			#contentindex5 > div > a {
				display: inline-block;
				width: 5em;
			}
			#contentindex5 > p {
				font-size: 1.5em;
				font-family: sans-serif;
				font-weight: bold;
				padding: .5em;
				color:  #fff;
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
						<?php require("createaccount.php"); ?>
					</div>
				</main>
				<aside class="col-25">
					<img src="userphoto/a.jfif">
					<ul class="profile">
						<li><a href="changepass.php">Change password</a></li>
						<li><a href="updateprofilephoto.php">Change Photo</a></li>
						
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