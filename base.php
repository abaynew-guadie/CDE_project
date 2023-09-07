<?php
	session_start();
	require_once "connection.php";
	require_once "template_engine/ti.php";
?>
<html>
	<head>
<title>Home page</title>
		<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php emptyblock("extra-style"); ?>
	</head>
<body>
<header><?php require("header.php"); ?></header>
<div class="container-main row">
	<section>
	<aside class="col-25">
	<?php emptyblock("left-block"); ?>
	</aside>
	<main class="main col-65">
	<img class="moto" alt="slide one" src="images/workbench.jpg" />
<div class="main-msg">
	<h3>Wellcome to distance education managment system</h3>
<p>Welcome to the continuing and distance education coordinating directorate of Jimma University. 
The directorate is running a range of first degree programs in collaboration with hosting colleges and departments of the University on week-end and summer modalities. We will continuously update our website with new program information, so be sure to check back often. <br /><br />
		Dr. xxx yy <br />
Director, Continuing and Distance Education Coordinating Directorate</p>
	</div>
	</main>
	<aside class="col-25">
	<?php include "leftlogin.php"; ?>
<div class="social-link">
		<h3>Social Links</h3>
		<ul>
		<li>
	<a href="https://facebook.com" target="blank"><img class="logo" src="images/logo/logo_facebook.png" /></a>
	</li>
	<li>
<a href="https://t.me" target="blank"><img class="logo" src="images/logo/logo_telegram.svg" /></a>
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
