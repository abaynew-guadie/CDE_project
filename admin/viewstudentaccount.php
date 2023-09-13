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

	<!--<p align="right"><a  href="encriptpassword.php"><font size="5"color="#3d80c2">Encriypt Password</font></a></p>-->
	  <script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width:600px;border:-10px solid red;margin-left:400px; font-size:16px; font-family:TimesNewRoman;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>

				<form action=" " method="post">   
                Select Department to print student account<br>    
                    
					<select name="dpt"  class="login-form2"  style="height:30px; width:180px;" required>
                      <option value="">--select department--</option>
					   <option value="">information technology</option>
                        <?php
						mysqli_connect("localhost","root","");
						mysqli_select_db("cde");

					$d_program = mysqli_query($con,"SELECT * FROM department");
					while($getDprog = mysqli_fetch_array($d_program)){
						$name = $getDprog['DName'];
				 ?>
					<option value="<?php echo $name;  ?>"><?php echo $name; ?></option>
				<?php } ?>
                    </select>
					<input type="submit" value="Search"  name="search"/>
                 </form>
                 <?php
                 if(isset($_POST['search']))
                 {
				 	$d=$_POST['dpt'];
				 	$d_program = mysqli_query($con,"SELECT * FROM department where DName='$d'");
					if($getDprog = mysqli_fetch_array($d_program)){
						 $name = $getDprog['Dcode'];    
                 ?>
<div id="print_content">
<table style="width: 516.8pt;margin-left:-15px; border-collapse: collapse;" border="1" width="689" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td style="width: 118pt; border-style: solid solid solid none; border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;">Student ID</span></p>
            </td>
           <td style="width: 118pt; border-style: solid solid solid none; border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;">Department</span></p>
            </td>
            
            <td style="width: 109.8pt; border-style: solid solid solid none; border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;">User Name will be</span></p>
            </td>
            <td style="width: 101.8pt; border-style: solid solid solid none; border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;">Temporary password</span></p>
            </td>
            <td style="width: 82.55pt; border-style: solid solid solid none; border-top-width: 1pt; border-top-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; border-bottom-width: 1pt; border-bottom-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;">Remark</span></p>
            </td>
        </tr>
        <?php
/*function decryptIt( $q )
{
$cryptKey= 'qJB0rGtIn5UB1xG03efyCp';
$qDecoded= rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
return( $qDecoded );
}*/
        $sql=mysqli_query($con,"select * from account where Role='student' and status='yes' ORDER BY UID ASC");
        while($row=mysqli_fetch_array($sql))
        {
        $idd=$row['UID'];
       	 $sql1=mysqli_query($con,"select * from user where  d_code='$name' and UID='$idd'");
       	if($row11=mysqli_fetch_array($sql1))
       	{
       		
				$p=$row['Password'];
        	//$decrypted = decryptIt($p);
        ?>
        <tr>
    <td style="width: 118pt; border-style: none solid solid none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;"><?php echo $row['UID'];?></span></p>
            </td>
            <?php
            ?>
            <td style="width: 118pt; border-style: none solid solid none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;"><?php echo $d;?></span></p>
            </td>
            <td style="width: 109.8pt; border-style: none solid solid none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;" valign="top">
<p style="margin-left: -12.45pt; text-indent: 12.45pt;"><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;"><?php echo $row['UserName'];?></span></p>
            </td>
            <td style="width: 101.8pt; border-style: none solid solid none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;"><?php echo $p;?></span></p>
            </td>
<?php
}
}
?>
            <td rowspan="5" style="width: 82.55pt; border-style: none solid solid none; border-bottom-width: 1pt; border-bottom-color: windowtext; border-right-width: 1pt; border-right-color: windowtext; padding: 0in 5.4pt;" valign="top">
            <p><span style="font-size: 12pt; font-family: &quot;times new roman&quot;, serif;">password are  forget by student.</span></p>
            </td>
        </tr>


    </tbody>
</table>
	<center><a href="javascript:Clickheretoprint()"><font size="5"color="#aabcd">Print it Now!</font></a>
		</center>
				</div>
			<?php
			}
			}
			?>	

</div>
					</div class="bb">
				</main>
				
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
