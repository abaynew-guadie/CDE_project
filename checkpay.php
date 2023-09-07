 <?php
$con=mysqli_connect("localhost","root","","cde");
if(isset($_POST["submit"]))
{
if($_FILES['file']['name'])
	{
		 $ptmploc=$_FILES["photo"]["tmp_name"];
	$pname=$_FILES["photo"]["name"];
	$psize=$_FILES["photo"]["size"];
	$ptype=$_FILES["photo"]["type"];
		if($psize<=2000000&&$ptype=="image/jpeg")
						{
if(!file_exists("userphoto"))
			mkdir("userphoto");
		$photopath="userphoto/$pname";
		if(copy($ptmploc,$photopath))
							{
$sql="INSERT INTO pay(`file`) VALUES ('$photopath')";
		$result=mysqli_query($con,$sql);
			}
			if($result)
          	print "Successfully pay";
          	else
          	print"Not pay";
		}
		else
		print "<font color=red>not pay</font>";
	}
}
?>