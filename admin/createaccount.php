
<?php
	//Include the PS_Pagination id
		include('../ps_pagination.php');
	
	//Connect to mysql db
	$conn = mysqli_connect('localhost','root','','cde');
	if(!$conn) die("Failed to connect to database!");
	$status = mysqli_select_db($conn,'cde');
	if(!$status) die("Failed to select database!");
?>                                         
<form method="post" action="" name="form1" id="form1">   
<p style="font-size:18px; margin-left:5px;">Search user  
<input type="text" autofocus="autofocus" name="search_file" id="search_file" style="width:230px; font-size:18px;" id="textboxid"placeholder="userid or user name" /> 
<input type="submit"  id="btn btn-primary" name="submit" style="height: 30px;width: 100px;background-color: #4b80b4;" value="Filter"> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a rel="facebox" href="addnewaccount.php">Create Account</a></p>
</form>
<p align="center" style="color: #aab21;font-family: time new romans;font-size: 17;">Number of users:<?php include '../connection.php'; $count_item=mysqli_query($conn,"select * from account " ) or die(mysqli_error());
$count=mysqli_num_rows($count_item);
//$a=count($sql2);
echo"<font color='red'>".($count)."</font>"; ?></p>
<?php 
if (isset($_POST['submit']) and isset($_POST['search_file'])) {
	$search_file = $_POST['search_file'];
	
$sql="select * from account where  UID like '%$search_file%' or Role like '%$search_file%'   Order by UID ASC";
$try=mysqli_query($conn,$sql);


if(mysqli_num_rows($try)>=1){

	 
	//Create a PS_Pagination object
	$pager = new PS_Pagination($conn, $sql, 10, 1);
  	//The paginate() function returns a mysql result set for the current page
	$rs = $pager->paginate();
	 ?>

<form name="frmUser" method="post" action="" id="frm1">
<table cellpadding="1" cellspacing="1" id="resultTable">
	
		        <tr>			        
					
                    <th>UID</th>
					<th>UserName</th>
					
			        <th>Role</th>
					<th>Status</th>
					
</tr>
<?php
$sql="select * from account where  UID like '%$search_file%' or Role like '%$search_file%'   Order by UID ASC";
$rs=mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($rs)) {
$user_id = $row['UID'];
		?>							
		<tr>
		    <td> <?php echo $row['UID']; ?></td>
			<td><?php echo $row['UserName']; ?></td>
			
			<td><?php echo $row['Role']; ?></td>
			<td><?php echo $row['status']; ?></td>
</tr>
<?php

}

?>

</table>
</form>
<?php
}
else{
	
echo "no result found!!";

 }
 }
 else
 {
 	$sql = "SELECT * FROM account ";
	//Create a PS_Pagination object
	$pager = new PS_Pagination($conn, $sql, 10, 1);
 	//The paginate() function returns a mysql result set for the current page
	$rs = $pager->paginate();
 	

?>
<form name="frmUser" method="post" action="" id="frm1">
<table cellpadding="1" cellspacing="1" id="resultTable" style="margin-left:-17px;">
	
		        <tr>			        
					
                    <th>UID</th>
					<th>UserName</th>
					
			        <th>Role</th>
					<th>Status</th>
					
</tr>

<?php
$i=0;
$sql = "SELECT * FROM account ";
$rs=mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($rs)) {
?>
<tr>
		    <td> <?php echo $row['UID']; ?></td>
			<td><?php echo $row['UserName']; ?></td>
		
			<td><?php echo $row['Role']; ?></td>
			<td><?php echo $row['status']; ?></td>
 
</tr>
<?php
}
?>
</table>
</form>
<?php

	//Display the navigation
	//echo $pager->renderFullNav();
	echo '<div style="text-align:center">'.$pager->renderFullNav().'</div>';
	}
	
?>
