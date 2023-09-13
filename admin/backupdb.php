<?php
	session_start();
	require_once "../connection.php";
	if(isset($_SESSION['sun'])&& isset($_SESSION['spw'])&& isset($_SESSION['sfn'])&& isset($_SESSION['sln'])&& isset($_SESSION['srole']))
{
?>
<html>
	<head>
		<title>Home page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<style type="text/css">
			ul.profile, ul.side-menu {
			  list-style-type: none; /* Remove bullets */
			  padding: 0; /* Remove padding */
			  margin: 0; /* Remove margins */
			  margin-bottom: .5em;
			}

			ul.profile li, ul.side-menu li {
			  border: 1px solid #ddd; /* Add a thin border to each list item */
			  margin-top: -1px; /* Prevent double borders */
			  background-color: #f6f6f6; /* Add a grey background color */
			  padding: 12px; /* Add some padding */
			}
			ul.side-menu li a, ul.profile li a {
				text-decoration: none;
				color: #000;
			}
			ul.side-menu li.active, ul.profile li.active {
				background-color: dodgerblue;
			}
			ul.side-menu li:hover, ul.profile li:hover {
				background-color: #ddd;
			}
			.profile-pic {
				width: 100%;
				height: 10em;
				margin-left: 0;
				margin-right: 0;
				border-radius: .5em;
				object-fit: cover;
			}
			.name  {
				text-align: center;
				font-family: sans-serif;
				font-size: 1em;
				color: #fff;
				margin: .5em;
			}
		</style>
	</head>
	<body>
		<header><?php require("header.php"); ?></header>
		<div class="container-main row">
			<section>
				<aside class="col-25">
					<?php require("sidemenu.php"); ?>
					<?php include "../left.php"; ?>
				</aside>
				<main class="main col-65">
					<div id="contentindex5">
						<?php
$con = mysqli_connect('localhost','root','');
	if(!$con) die("Failed to connect to database!");
	$status = mysqli_select_db($con,'cde');
	if(!$status) die("Failed to select database!");

$tables = array();
$query = mysqli_query($con,'SHOW TABLES');
while($row = mysqli_fetch_row($query))
{
     $tables[] = $row[0];
}

$result = "";
foreach($tables as $table)
{
$query = mysqli_query($con,'SELECT * FROM '.$table);
$num_fields = mysqli_num_fields($query);

$result .= 'DROP TABLE IF EXISTS '.$table.';';
$row2 = mysqli_fetch_row(mysqli_query($con,'SHOW CREATE TABLE '.$table));
$result .= "\n\n".$row2[1].";\n\n";

for ($i = 0; $i < $num_fields; $i++)
 {
while($row = mysqli_fetch_row($query))
{
   $result .= 'INSERT INTO '.$table.' VALUES(';
     for($j=0; $j<$num_fields; $j++)
     {
       $row[$j] = addslashes($row[$j]);
       $row[$j] = str_replace("\n","\\n",$row[$j]);
       if(isset($row[$j]))
       {
		   $result .= '"'.$row[$j].'"' ; 
		}
		else
		{ 
			$result .= '""';
		}
		if($j<($num_fields-1))
		{ 
			$result .= ',';
		}
    }
   	$result .= ");\n";
}
}
$result .="\n\n";
}

//Create Folder
$folder = 'C:/wamp/www/cde[1]/admin/db/';
if (!is_dir($folder))
mkdir($folder, 0777, true);
chmod($folder, 0777);

//$date = date('m-d-Y-h-m-s'); 
$filename = $folder."backup"; 

$handle = fopen($filename.'.sql','w+');
fwrite($handle,$result);
fclose($handle);
?>

	
	<?php
	
        echo "Database Backed Up Successfully!!!<br>";
        echo "Path:$filename";
    ?>

					</div>
				</main>
				<aside class="col-25">
					<img src="userphoto/a.jfif">
					<ul class="profile">
						
						<li><a href="changepass.php">Change password</a></li>
					</ul>
					<div class="social-link">
						<h3>Social Links</h3>
						<ul>
							<li>
								<a href="https://facebook.com" target="blank"><img class="logo" src="../images/logo/logo_facebook.png" /></a>
							</li>
							<li>
								<a href="https://t.me" target="blank"><img class="logo" src="../images/logo/logo_telegram.svg" /></a>
							</li>
							<li>
								<a href="https://mail.google.com" target="blank"><img class="logo" src="../images/logo/logo_gmail.svg" /></a>
							</li>
							<li>
								<a href="https://linkedin.com" target="blank"><img class="logo" src="../images/logo/logo_linkedin.png" /></a>
							</li>
						</ul>
					</div>
				</aside>
			</section>
		</div>
		<?php require("../footer.php"); ?>
	</body>
</html>
<?php
}
else
	header("location:../index.php");
?>
