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
		<style type="text/css">
			h4, h5, h6 {
				color: #fff;
			}
			.main-msg {
				line-height: 1.5em;
			}
		</style>
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
						<h3>About Us</h3>
						<h4>If you want further information about JU distance education </h4>
						<h5> we provide distance education in different field of studies </h5>
						<h4><u>Motto of the distance education</u></h3>
						<h5>1.To provide quality education</h5>
						<h5>2.Undertaking a problem solving research work, which focuses on national 
						need and benefiting the community with the outcome</h5>
						<h6>JU Continuing and distance Office  works for change!!</h6>
						<p>JU Continuing and distance Office plays a great role 
						in producing a well knowledgeable citizen
						 for the development of our country.</p>
						JU CDE OFFICE!!!<br>
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
