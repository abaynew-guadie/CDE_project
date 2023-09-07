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
<header>
<?php require("header.php"); ?></header>
<div class="container-main row">
	<section>
	<aside class="col-25">
	<?php include "left.php"; ?>
	</aside>
<main class="main col-65">
		<div class="main-msg">
<h3>The colleges in Jimma University university are: </h3>
		<ol type="1">
		<li>
		<h4>Agriculture and Natural resource</h4>
		<ul type="disc">
		<li>Rular Development</li>
		<li>Plant Science</li>
								<li>Animal Science</li>
									<li>Natural Res.Management</li>
									<li>Horticulture</li>
								</ul>
							</li>
							<li>
								<h4>Natural and Computational Science</h4>
								<ul type="square">
									<li>Chemistry</li>
									<li>Physics</li>
									<li>Mathematics</li>
									<li>Biology</li>
									<li>Sport Science</li>
									<li>Statistcs</li>
								</ul>
							</li>
							<li>
								<h4>Business and Economics</h4>
								<ul>
									<li>Economics</li>
									<li>Accounting</li>
									<li>Management</li>
								</ul>
							</li>
							<li>
								<h4>Health Science</h4>
								<ul>
									<li>Nursing</li>
									<li>Public health science</li>
									<li>Midwifery</li>
									<li>NIMEI</li>
								</ul>
							</li>
							<li>
								<h4>Social Science and Humanities</h4>
								<ul type="a">
									<li>English</li>
									<li>Amharic</li>
									<li>History</li>
									<li>Geography</li>
									<li>Psycology</li>
									<li>Sociology</li>
								</ul>
							</li>
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