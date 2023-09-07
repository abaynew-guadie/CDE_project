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
<?php require("header.php"); ?>
</header>		
<div class="container-main row">			
<section>				
<aside class="col-25">					
<?php include "left.php"; ?>
				
</aside>				
<main class="main col-65">						
<div id="contentindex5">
<form method="post" >
<table bgcolor="#f9fbf9" cellpadding="12" border="0" width="370px" >
<tr><td colspan="2" ><center><b><h3>Forgot password</h3></b>
</center></td></tr>
<tr>
<td>Enter UserName</td>
<td>
<input type="text" name="query" id="text" style="height: 30px;" required/>&nbsp;</td>
</tr>
<tr><td></td><td>
<input type="submit" name="submit" value="Search" style="height: 30px;width: 150px;"/></td></tr><br/>
</table>
</form>
<?php

if(isset($_POST['submit']))
{
$query = $_POST['query'];	
$min_length = 1;
if(strlen($query) >= $min_length)
{
	
$query = htmlspecialchars($query);
$query = mysqli_real_escape_string($link, $query);
$raw_results =mysqli_query($link,"SELECT * FROM  account WHERE UserName='$query'");
if(mysqli_num_rows($raw_results)>0)
{
while($query2 = mysqli_fetch_array($raw_results))
{
	$stat=$query2['status'];
	if($stat=='yes')
	{
?>

<form action="" method="post" >
	
<table bgcolor="#f9fbf9" cellpadding="12" border="0"   >
<tr>
<td>UserName</td>
<td> 
<input type="text" name="UserName" size="20" style="height: 30px;" value="<?php echo $query2['UserName']; ?>"  readonly=""/>
</td>
</tr>
	
<tr><td>New Password:</td>
<td>
<input type="password" name="password" required size="20" style="height: 30px;" /><br />
<script type="text/javascript">				   
 var f1 = new LiveValidation('password');				 
  f1.add(Validate.Presence,{failureMessage: " It cannot be empty Password"});				 
  f1.add(Validate.Format,{pattern: /^[0-9a-zA-Z]+$/ ,failureMessage: " It allows String and numbers"});				 
  f1.add( Validate.Length, { minimum: 6, maximum: 12 } );
				   </script>	
</td></tr>
<tr><td>Confirm Password:</td><td> <input type="password" name="confirmpassword" required size="20" style="height: 30px;"/><br />
	<td>
<script type="text/javascript">				   
 var f1 = new LiveValidation('confirmpassword');				   
f1.add(Validate.Presence,{failureMessage: " It cannot be empty Password"});				  
 f1.add(Validate.Format,{pattern: /^[0-9a-zA-Z]+$/ ,failureMessage: " It allows String and numbers"});				  
 f1.add( Validate.Length, { minimum: 6, maximum: 12 } );		 
  </script>	
	</td></tr>
	<tr><td></td>
<td>
<input type="submit" name="Reset" value=" Change Password " style="height: 30px;width: 150px" />	
</td></tr>	
</table>	
</form>
	
<?php
}else
echo "<h3 style='margin-left:100px;color:red'>Your account is Blocked!!!</h3";
}
}
else{
echo "<h3 style='margin-left:100px;color:red'>Incorect UserName Please Try Agian!!!</h3";

}
}

}
else{
//echo "Minimum length is greater than one";
}
?>

<?php


if (isset($_POST["Reset"]))
{
	    $user = $_POST["UserName"];
	    $password = $_POST["password"];
	    $confirm = $_POST["confirmpassword"];
			 $np= password_hash($password, PASSWORD_DEFAULT); // encryptIt($password);
			 $cp= password_hash($confirm, PASSWORD_DEFAULT); // encryptIt($confirm);
			  if(empty($password)||empty($confirm)){
				echo"invalid password";
			  }
			  else{
			  $sql="select * from account WHERE UserName='$user'";
		 	   $result = mysqli_query($link, $sql);
		       $records = mysqli_num_rows($result);
		       $myrow = mysqli_fetch_array($result);
		       $staa=$myrow['Password'];
		 
			 
 if($password==$confirm)			 
 {				 
 $sql="UPDATE account SET Password='$np' WHERE UserName='$user'";				  			
 if( mysqli_query($link,$sql)){
echo "<h3 style='color: #fff; textalign: center;'>Reset password sucessfull!</h3>";			 
 }}
			  			 
 else{
echo "<h3 style='color: #fff; textalign: center;'>password is not matched!try again.</h3>";
	}}}
	
?>	
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

