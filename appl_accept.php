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
				<main class="main col-65">
					<div class="main-msg">
<h3>How to Apply?</h3>
<p>self sponsored summer students are requested to apply in person on those campus whereas government sponsored students are advised to communicate their employers in advance. a student who is attending for his/her undergraduate degree program at the summer program of the University should have the following documents in his her file. Letter stating working experience Certificate and transcript University application form Bank payment for private students Registration slip.</p>
</div>
<div class="main-msg">
<h3>After the Application</h3>
<p>Keep with you registration slip(notification message) that you have been given during registration at least until you graduate Private students keep either the original or the copy of the payment complete with you at least until you graduate.</p>
	</div>
<div class="main-msg">
<h3>New Student Orientation</h3>
<p>the directorate will arrange a discussion forum at which all the responsible bodies of the university will meet new entrants to let them know the rules and regulations of the university.</p>
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