<?php
session_start();
include "../connection.php";
$uid = $_SESSION["suid"];
if (isset($_POST["submit"])) {
  $old_pwd = $_POST["opass"];
  $new_pwd = $_POST["npass"];
  $re_new_pwd = $_POST["rnpass"];
  if ($new_pwd == $re_new_pwd) {
    $sql_cng_pwd = "SELECT password FROM account WHERE uid=?";
    $stmt_cng_pwd = mysqli_prepare($link, $sql_cng_pwd);
		mysqli_stmt_bind_param($stmt_cng_pwd, "s", $uid);
		if (mysqli_stmt_execute($stmt_cng_pwd)) {
			mysqli_stmt_bind_result($stmt_cng_pwd, $pwd_hashed);
			mysqli_stmt_fetch($stmt_cng_pwd);
			mysqli_stmt_close($stmt_cng_pwd);
			if (password_verify($old_pwd, $pwd_hashed)) {
				if (password_verify($new_pwd, $pwd_hashed)) {
					?><script>alert("New password must be different from old password!");</script><?php 
				} else {
					$sql_pwd = "UPDATE account SET password=? WHERE uid=?";
					$stmt_pwd = mysqli_prepare($link, $sql_pwd);
					$new_pwd_hashed = password_hash($new_pwd, PASSWORD_DEFAULT);
					mysqli_stmt_bind_param($stmt_pwd, "ss", $new_pwd_hashed, $uid);
					if (mysqli_stmt_execute($stmt_pwd)) {
						mysqli_stmt_fetch($stmt_pwd);
						mysqli_stmt_close($stmt_pwd);
						?><script>alert("Password changed successfully!");</script><?php
					} else {
						?><script>alert("Sorry, something went wrong. Try again!");</script><?php
					}
				}
			} else {
				?><script>alert("Incorrect old password!");</script><?php
			}
        } else {
        	?><div><?php echo mysqli_error(); ?></div><?php
        	mysqli_stmt_close($stmt_cng_pwd);
        	exit();
        }
    } else {
    	?><script>alert("Password mismatched!");</script><?php
    }
  ?><script>window.location='changepass.php';</script><?php
}
?>
