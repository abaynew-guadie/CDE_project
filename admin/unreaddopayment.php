<?php
session_start();
include("../connection.php");
?>
<html>
<head>
<title>
CDE Officer page
</title>
<link rel="stylesheet" type="text/css" href="../setting.css">
<script type="text/javascript" src="../javascript\date_time.js"></script>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
</head>
<body>
<?php
if(isset($_SESSION['sun'])&& isset($_SESSION['spw'])&& isset($_SESSION['sfn'])&& isset($_SESSION['sln'])&& isset($_SESSION['srole']))
{
?>
<div id="container">
<table><tr><td>
<?php
    require("header.php");
?>
</td></tr><tr><td colspan="3">
<?php
    require("menucdeo.php");
?>
</td></tr>
<tr><td>
<?php
	 require("sidemenucdeo.php");
?>
	
</td><td>
	<div id="contentindex5">
	<?php
	//Include the PS_Pagination id
		include('ps_pagination.php');
	
	//Connect to mysql db
	$conn = mysqli_connect('localhost','root','','cde');
	if(!$conn) die("Failed to connect to database!");
	$status = mysqli_select_db($conn,'cde');
	if(!$status) die("Failed to select database!");
?>

<form action="" method="post">									
<?php
$query = mysqli_query($conn,"select * from payment where type='student'");
$coun = mysqli_num_rows($query);
$r=mysqli_fetch_array($query);
$ty=$r['type'];
?>		
										
<a href="unreaddopayment.php"><i class="icon-check"></i><font size="4px"> Unseen Request [&nbsp;<?php echo $coun?>&nbsp;]</font></a>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										
<a href="messageddpay.php"><i class="icon-envelope-alt"></i><font size="4px"> Seen Request</font></a>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<?php
$query = mysqli_query($conn,"select * from payment where  type='student'");
$coun = mysqli_num_rows($query);
$r=mysqli_fetch_array($query);
$ty=$r['type'];
?>	
<?php echo '<a href="sendall1.php?id='.$r['type'].'">Send To Finance</a>';?>	
<!--<a href="sendall.php?id=">Send To Finance</a>-->									
									<font size="3px">
<?php
$sql = "select * from payment where type='student'";
	 
	//Create a PS_Pagination object
	$pager = new PS_Pagination($conn, $sql, 10, 1);
 	//The paginate() function returns a mysql result set for the current page
	$rs = $pager->paginate();									
$query1 = mysqli_query($conn,"select * from payment where type='student'");
$count = mysqli_num_rows($query1);	
if ($count != '0'){?>
<table cellpadding="1" cellspacing="1" id="resultTable" >

<tr bgcolor="#CAE8EA">
<th >type</th>
<th>name</th>
<th>email</th>
<th>recit</th>
<th>downlode</th>
</tr>


        <?php
		$sql = "select * from payment where type='student'";
		$rs=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($rs)){	
$id=$row["type"];
$file=$row['file'];
 							 
	?>
<tr>
<div class="post"  id="del<?php echo $id; ?>">
<td><?php echo $row["type"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><img src="payim/<?php echo $row['file'];?>" style="width:150px; height:100px;"></td>
<td><div align='center'><a href="payim/$file"><img width='30' height='30' src='images/d1.jpg' /></a> </div></td>
</div>
											
											
	<?php }
	?>
	</tr></table> 							 
	<?php
		echo '<div style="text-align:center">'.$pager->renderFullNav().'</div>';
	}						
	else{ ?>
<div class="alert alert-info"><i class="icon-info-sign"></i> <font size="3px">No New Request found!</div>
								<?php } ?>
										
								</form>		
                               
                        <!-- /block -->
                   
 </div>
  </td>
	 	 <td>
	 <div id="siderightindexphoto">
	 <div id="siderightindexphoto1">
	 User Profile
</div>
	 
		

<div id="sidebarr">
	<img src="userphoto/im1.png" width="200px">
<ul>
	<li><a href="changepass.php">Change password</a></li>
	 </ul>
</div>
	 </div>
	 <div id="siderightindexadational">
	 <div id="siderightindexadational1">
	 Social link 
	 </div>
	 <div id="siderightindexadational12">
	 <table>
	 <tr><td><div id="facebook"></div></td><td>
	<p><a href="https://www.facebook.com/" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;Facebook</a><p></td></tr>
	<tr><td><div id="twitter"></div></td><td><p><a href="https://www.twitter.com/" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;Twitter</a></p></td></tr>
	<tr><td><div id="you"></div></td><td><p><a href="https://www.youtube.com/" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;Youtube</a></p></td></tr>
	<tr><td><div id="googleplus"></div></td><td><p><a href="https://plus.google.com/" style="text-decoration: none;">&nbsp;&nbsp;&nbsp;Google++</a></p></td></tr></table>
	</div>
	 </div>
	  </td>
	 </tr>
	 <tr><td>
<?php
include("../footer.php");
?>
</td></tr>

</div>
</table>
<?php
}
else
header("location:../index.php");
?>
</body>
</html>