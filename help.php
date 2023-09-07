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
					<div id="contentindex5">
						<div id="bodydivision" style="color: #fff;">

						
<h1>Scope Of The Project<br></h1>										
-Online application service to admit new and senior students.<br>										
-Online academic services like:<br>									    
-Online payment <br>   										
-Distributing module<br>  										
-Register student online<br>										
-Distributing assignment  <br>										
-Give new information<br>					
<h1> Purpose/Significance<br></h1>							
-Since users can access the system everywhere they  can get different services at the same time and hence the system saves time.<br>							
-The newly developed system is web based and gives online services. Since every activity is done by computer.<br>							
-It minimizes the workload of both students and workers. Because students can be admitted wherever they are and can communicate with their teacher online. Since they can download modules, they save the time to copy it. <br>
-The system can perform every activity that can be done by the workers.<br>							
-Since every information and document is stored on the database, there will not be any redundancy and losing of data.<br>							
-The system allows searching and updating any selective information easily if it is already on the database. It does not take time to retrieve data as the existing system.<br>							
-It also minimizes material wastage that can be lost for printing and copying bulk of modules. And since one person can perform different activities using the system, it can also minimize man power.<br>
							
-The system is easy to use and its interface is user friendly.<br><br>
													
										
						</div>
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