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
					
<div id="contentindex5">
<form action="1.php"method="POST" >
<table  cellpadding="5" border="0">
<tr><td colspan="2" >
<center>Send feedback Form</center></td></tr>

<tr><td> Name:</td>
<td><input type="text" pattern="[a-zA-Z]*" name="faname" id="faname" style="height: 30px;width: 200px;" required="required"  placeholder="name" />
<script type="text/javascript">
				   
 var f1 = new LiveValidation('faname');				   
 f1.add(Validate.Presence,{failureMessage: " Please enter  name "});				    
 f1.add(Validate.Format,{pattern: /^[a-zA-Z]+$/ ,failureMessage: " It allows only String"});				
 </script> 	
</td></tr>

<tr><td> Email:</td><td><input type="email" name="em" id="emial" style="height: 30px;width: 200px;" required="required"  placeholder="email" />
</td></tr>


<tr><td>Comment:</td>
<td><textarea  name="feedback" id="feedback"  ROWS="15" COLS="24"  placeholder="Text" wrap="warp" required="" style="height: 100px;width: 200px;text-align: left;"></textarea>
         
 <script type="text/javascript">
				  
  var f1 = new LiveValidation('feedback');				   
 f1.add(Validate.Presence,{failureMessage: " Please enter feedback "});				    
 f1.add(Validate.Format,{pattern: /^[0-9a-zA-Z&nbsp; ]+$/ ,failureMessage: " It allows only String"});
				     
 f1.add( Validate.Length, { minimum: 10, maximum: 10000 } );
				 </script>  	
         </td></tr>
<tr><td></td><td><input type="submit"  name="submit" value="Send" style="height: 40px;width: 120px;"id="m">
<input type="reset"  name="clear" value="Clear" style="height: 40px;width: 120px;"id="m"> </td>

</tr>
</table>	
</form>
 </div>
				
</main>				
<aside class="col-25">					
<?php include "leftlogin.php"; ?>					
<div class="social-link">
						
<h3>Social Links</h3>						
<ul>							
<li>								
<a href="https://m.facebook.com/pg/JimmaUniversityOfficial" target="blank"><img class="logo" src="images/logo/logo_facebook.png" /></a>
							
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