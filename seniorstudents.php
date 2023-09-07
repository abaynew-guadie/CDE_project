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
					
<h3>Criteria's to attend JU distance education learning system as a senior student</h3>						
<ol>							
<li>You  have to achieve the passing grade (point) and complete full payment of the  semester to be registered.</li>							
<li>Senior student registering must happens at the beginning of each academic semester.</li>							
<li>The grading system in the DE is the same as JU regular students.</li>							
<li>The payments for the summer students are complete at once.</li>							
<li>The payment for weekend students is once in each semester.</li>						
</ol>					
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