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
<center><p>Distance Education</p>						
<p>Service Fees</p></center>						
<p>All students in Jimma University of the continuing and distance studies benefit from a reduced tuition rate—a rate set with the realities of the learners in mind. 
This is more affordable than comparable universities, and considerably less than the actual cost incurred in rendering the services.</p>					
					
</div>					
<br>					
<br>					
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
</html>s