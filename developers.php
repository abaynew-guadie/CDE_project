
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
			td {
				padding: .5em;
				text-align: center;
			}
			tr:first-child {
				background-color: #ccc;
			}
		</style>
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
	 <h4>Section&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I</h4>
		  <table style="text-align:center; padding: .25em;">
<caption><h4>Developer name</h4></caption>										
<tr bgcolor="#80998e;">
<td>ID Number</td>	
<td>Name</td>											
<td>Sex</td>										
<td>E-Mail</td>									
<td>Photo</td>										
</tr>										
<tr>											
<td allign="center">1001692004</td>											
<td allign="center">Mr Abaynew Guadie</td>											
<td allign="center">M</td>											
<td>abaynewhu@yahoo.com</td>											
<td><img src="images/abay.jpg" height="50" width="100%"></td>									
</tr>
															
</table>
				
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
		
	</body>
</html>
