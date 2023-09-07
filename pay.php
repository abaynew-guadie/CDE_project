<?php
session_start();
require_once "connection.php";
?>
<html>
	<head>
	<style>
	table{
		width:200px;
		hight:150px;
	};
	</style>
	
		<title>Home page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<header><?php require("header.php"); ?></header><br>
		<br>
		<form action="pay1.php">
			<center><table  style="height:60px; width:250px;" border="1" bgcolor="#ff0098">
				<tr><td>payment form</td></tr>
				<tr><td bgcolor="#03ff02"><input type="text" name="sender"placeholder="sender name"style="height:30px; width:200px;" required> 
					</td></tr>
				<tr><td bgcolor="#03ff02"><textarea style="height:100px; width:200px;" placeholder="write your information" required></textarea>
					</td></tr>
				<tr><td bgcolor="#03ff02">account number<input type="number" name="account" min="12" maxlength="16" placeholder="1000131214876"></td></tr>
				<tr><td bgcolor="#03ff02">amount<input type="number"  name="amount" placeholder="100" min="1900" maxlength="4000"height=30px;width=200px; ></td></tr>
				<tr><td bgcolor="#ff0098"><button><input type="submit" name="submit" placeholder="pay" style="height:30px; width:200px;" required></button></td></tr>
			</table></center>
		</form>
		
	</body>