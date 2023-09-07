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
	<main class="main contact col-65">
<table border=0>
<tr>
<td></td></tr>
<tr>
<td></td></tr>
<tr>
<td><strong></strong> </td></tr>
<tr>
<td><strong></strong> </td></tr>
<tr>
<td><strong></strong> <a href="a@gmail.com"></a></td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>
<td>Registrar </td></tr>
<tr>
<td>Mr Abaynew Guadie</td></tr>
<tr>
<td><strong>Tel:</strong> (+251)-932019077</td></tr>
<tr>
<td><strong>Website:</strong> <a href="www.ju.edu.et">www.ju.edu.et</td></tr>
<tr>
<td><strong>E-mail:</strong> <a href="ero@ju.edu.et">ero@ju.edu.et</a></td></tr>
<tr>
<td>&nbsp;</td></tr>
<tr>
<td>Instructors </td></tr>
<tr>
<td>Ato AA BB </td></tr>
<tr>
<td></td></tr>
<tr>
<td><strong>Tel:</strong> (+251)-047-111-2202</td></tr>
<tr>

<td><strong>Website:</strong> <a href="www.ju.edu.et">www.ju.edu.et</td></tr>
<tr>
<td><p>E-mail: <a href="mailto:abaynewhu@yahoo.com"><span style="font-family: arial, helvetica, sans-serif;">
<strong><span style="font-size: 10pt;">JU-Distance-Education-ero@ju.edu.et</span></strong></span></a></p></td></tr>
<tr>
<td>&nbsp;</td></tr>

<tr><td></td></tr>
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
		<?php require("footer.php"); ?>
	</body>
</html>
