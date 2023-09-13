<?php
$rpath = "";
$paths = explode("/", __DIR__);
for($ind = 0; $ind < count($paths); $ind++){
	if(!isset($GLOBALS["PATHS"][$ind])){
	  $rpath = $rpath.'../';
	}
}
$query = mysqli_query($con,"select * from student where unread='no' ORDER BY Department ASC")or die(mysqli_error($con));
$coun = mysqli_num_rows($query);

$query1 = mysqli_query($con,"select * from feed_back" ) or die(mysqli_error($con));
$coun1 = mysqli_num_rows($query1);
?>
<header>
<div class="main-bar">	
	
	<div class="uv-icon"><img src="<?php echo $rpath; ?>/images\jimma_uv.png" /></div>
	<nav class="uv-menu">
		<div class="title">Web based distance education management system for <br />Jimma&nbsp;University</div>
		<?php 
		if (isset($_SESSION['srole']) && $_SESSION['srole'] == "administrator") { ?>
			<ul class="uv-items-menu">
				<li class="uv-item dropdown">
				  <a class="dropdown-btn" href="#">Manage Account ▼</a>
				  <ul class="dropdown-content">
				    <li class="dropdown-item"><a href="<?php echo $rpath; ?>/admin/adduser.php">Register User</a></li>
				    <li class="dropdown-item"><a href="addaccount.php">Create Account</a></li>
				    <li class="dropdown-item"><a href="addaccountb.php">Block Account</a></li>
				  </ul>
				</li>
				<li class="uv-item"><a href="studentlist.php">Request for account (<?php echo $coun; ?>)</a></li>
				<li class="uv-item"><a href="viewfeedback.php">View feedback (<?php echo $coun1; ?>)</a></li>
				<li class="uv-item"><a href="logout.php">Logout</a></li>
			</ul>
		<?php } else {?>
		<ul class="uv-items-menu">
			<li class="uv-item"><a href="index.php">Home</a></li>
			<li class="uv-item dropdown">
			  <a class="dropdown-btn" href="#">About</a>
			  <ul class="dropdown-content">
			    <li class="dropdown-item"><a href="#">Mission</a></li>
			    <li class="dropdown-item"><a href="#">Vision</a></li>
			    <li class="dropdown-item"><a href="contact.php">Contact Us</a></li>
			    <li class="dropdown-item"><a href="gallery.php">Photo Gallery</a></li>
			  </ul>
			</li>
			<li class="uv-item dropdown">
			  <a class="dropdown-btn" href="#">Rule</a>
			  <ul class="dropdown-content">
			    <li class="dropdown-item"><a href="newstudents.php">New Applicant</a></li>
			    <li class="dropdown-item"><a href="seniorstudents.php">Senior Student</a></li>
			  </ul>
			</li>
			<li class="uv-item dropdown">
			  <a class="dropdown-btn" href="#">Academics</a>
			  <ul class="dropdown-content">
			    <li class="dropdown-item"><a href="colleges.php">Colleges</a></li>
			    <li class="dropdown-item"><a href="#">Instituts</a></li>
			    <li class="dropdown-item"><a href="fields.php">Currently ongoing programs</a></li>
			  </ul>
			</li>
			<li class="uv-item"><a href="new.php">Notice</a></li>
			<li class="uv-item"><a href="appl_accept.php">Application</a></li>
			<li class="uv-item"><a href="servicefees.php">Service fee</a></li>
			<li class="uv-item"><a href="feedback.php">Feedback</a></li>
			<li class="uv-item"><a href="help.php">Help</a></li>
		</ul>
		<?php } ?>
	</nav>
	<div class="uv-icon"><img src="<?php echo $rpath; ?>/images\jimma_uv.png" /></div>
</div>
</header>
