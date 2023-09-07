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
						<h3>Criteria's to attend JU distance education learning system as a new student</h3>
						<ol>
							<li>The student can be admitted if and only if he/she complete grade 12 pass marks or 10+3(diploma).</li>
							<li>For grade 12, the pass mark must be above based on the ministry of education.</li>
							<li>To be accepted by natural science fields, the student must be natural science student.</li>
							<li>For diploma students their major and minor courses must be related to the course they select to register.</li>
							<li>Students must pay 30 birr for application to the finance office in its internal bank account.</li>
							<li>Students must receive recite and give the recite to be admitted.</li>
							<li>New student admitting must happens at the beginning of the first academic year</li>
						</ol>
						<div class="nb"><strong>N.B</strong> For registration ,students will pay 150 birr for the first registration weeks.If registration is passed,those students who come later will pay a penality of 100 birr for the campus in its internal account.</div>
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