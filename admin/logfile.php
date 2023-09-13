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
		<header><?php require("../header.php"); ?></header>
		<div class="container-main row">
			<section>
				<aside class="col-25">
					<?php require("sidemenu.php"); ?>
					<?php include "../left.php"; ?>
				</aside>
				<main class="main col-65">
					<div id="contentindex5">
						<?php
	//Include the PS_Pagination id
		include('../ps_pagination.php');
	
	//Connect to mysql db
	$conn = mysqli_connect('localhost','root','');
	if(!$conn) die("Failed to connect to database!");
	$status = mysqli_select_db($conn,'cde');
	if(!$status) die("Failed to select database!");
?>                                            
                                
<form method="post" action="" name="form1" id="form1">   
<p style="font-size:18px; margin-left:100px;">Search log user  <input type="text" autofocus="autofocus" name="search_file" id="search_file" style="width:230px; font-size:18px;" id="textboxid" placeholder="username/usertype"/> 
				<input type="submit"  id="btn btn-primary" name="submit" style="height: 30px;width: 100px;background-color: #2773d8;" value="Filter"></p> 
</form>
<?php 
if (isset($_POST['submit']) and isset($_POST['search_file'])) {
	$search_file = $_POST['search_file'];
	
$sql="SELECT * FROM logfile where logid like '%$search_file%' or role like '%$search_file%'  Order by start_time desc";
$try=mysqli_query( $conn,$sql);


if(mysqli_num_rows($try)>=1){
	$pager = new PS_Pagination($conn, $sql, 4, 1);
	$rs = $pager->paginate();
		
	 ?>
<form name="frmUser" method="post" action="" id="frm1">
<table  width="600" cellpadding="1"  id="resultTable">
<tr >
<th colspan=7 align="center" style="background-color: #767889;color: blue"  ><font style="margin-left: 200px;font-size: 20px"> Log users in the site</font></th></tr>
<tr>
<th>UserName</th>
<th>UserType</th>
<th>Login time</th>
<th>activity type</th>
<th>activity performed</th>
<th>ip address</th>
<th>Logout time</th>

</tr>
<?php
while($myrow = mysqli_fetch_array($try)) {
echo "<tr  style=height: 400px;>";
echo "<td>" . $myrow[1]. "</td>";
echo "<td>" . $myrow[2]. "</td>";
echo "<td>" . $myrow[4]. "</td>";
echo "<td>" . $myrow[5]. "</td>";
echo "<td>" . $myrow[6]. "</td>";
echo "<td>" . $myrow[8]. "</td>";
echo "<td>" . $myrow[9]. "</td>";
echo "</tr>";
}
?>
</table>
</form>
<?php
echo '<div style="text-align:center">'.$pager->renderFullNav().'</div>';
}
else{
	
echo "no result found!!";

 }
 
 }
 else
 {
 	$sql = "SELECT * FROM logfile ORDER BY logid desc ";
	$pager = new PS_Pagination($conn, $sql, 4, 1);
	$rs = $pager->paginate();
?>
<form name="frmUser" method="post" action="" id="frm1">
<table  width="600px" cellpadding="1" id="resultTable">
<tr>
<th colspan=7 align="center" style="background-color: #767889;color: blue"  ><font style="margin-left: 200px;font-size: 20px"> Log users in the site</font></th></tr>
<tr>
<th>UserName</th>
<th>UserType</th>
<th>Login time</th>
<th>activity type</th>
<th>activity performed</th>
<th>ip address</th>
<th>Logout time</th>

</tr>

<?php
if (isset($_POST['submit']) and isset($_POST['search_file'])) {
	$search_file = $_POST['search_file'];
$sql="SELECT * FROM logfile where logid like '%$search_file%' or role like '%$search_file%'  Order by start_time desc";
$try=mysqli_query( $conn,$sql);
while($myrow = mysqli_fetch_array($try)) {
echo "<tr  style=height: 400px;>";
echo "<td>" . $myrow[1]. "</td>";
echo "<td>" . $myrow[2]. "</td>";
echo "<td>" . $myrow[4]. "</td>";
echo "<td>" . $myrow[5]. "</td>";
echo "<td>" . $myrow[6]. "</td>";
echo "<td>" . $myrow[8]. "</td>";
echo "<td>" . $myrow[9]. "</td>";
echo "</tr>";

}
}
?>
</table>
</form>
<?php
	echo '<div style="text-align:center">'.$pager->renderFullNav().'</div>';
	}
?>
</div>
					</div>
				</main>
				
			</section>
		</div>
		<?php require("../footer.php"); ?>
	</body>
	<?php
}
else
	header("location:../index.php");
?>
</html>



	