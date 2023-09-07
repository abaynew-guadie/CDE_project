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
<p>The Continuing Education Program at Jimma University was first started in 1980 at Jimma College of Agriculture to 
train the students in general agriculture at diploma level. Even though there was high demand of distance and off campus programs from 
different stakeholders, due to various reasons there was only one program in distance, management at certificate and diploma level at the College. 
Gradually the office expands its programs to the summer in-service and in 2003 the office started two summer programs namely: 
teachers’ education at degree level and Law at diploma level.</p>
						
<ol type="1">							
<li><h4>Economics</h4></li>							
<li><h4>Management</h4></li>							
<li> <h4>Acounting</h4></li>							
<li><h4>Law</h4></li>						
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