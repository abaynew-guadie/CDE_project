<?php 
error_reporting(E_ALL);
  if (!isset($_SESSION['srole'])){ ?>
<style>
.login-container {
  display: inline-block;
  background-color: #004d99;
  padding: .5em;
  outline: none;
  border: .1em #fff double;
  border-radius: .25em;
  width: 100%;
}
.login-container .title {
  font-size: 1.25em;
  font-family: sans-serif;
  font-weight: bolder;
  text-align: center;
  margin: .5em;
  color: #8ff;
}
.login-err {
  color: #800000;
  font-weight: bolder;
  text-align: center;
  border-radius: .25em;
  word-wrap: break-word;
  font-family: serif;
  margin: .25em 0;
}
.login-container .form .form-group {
    display: block;
    width: 100%;
    margin: 1em 0;
  }
.login-container .form .form-group .form-label {
  margin-left: .25em;
  color: #fff;
  font-size: 1em;
  font-weight: bold;
  font-family: serif;
}
.login-container .form .form-group input {
  border-width: 0;
  outline: none;
  width: 100%;
  height: 3em;
  margin: 0 .5em;
  width: 95%;
  padding-left: .5em;
}
.login-container .form input::placeholder {
  font-size: 1em;
  padding: 2em 0;
  font-family: serif; 
}
.login-container .form .form-btn-group {
  display: flex;
  align-items: center;
  justify-content: center;
}
.login-container .form .form-btn-group .btn {
  outline: none;
  background-color: #0059b3;
  border-width: 0;
  padding: .5em 1.5em;
  font-family: serif;
  font-size: 1em;
  font-weight: bold;
  color: #8ff;
}
.login-container .extra {
  text-align: center;
  margin: 2em 0em;
}
.login-container .extra a {
  text-decoration: none;
  font-weight: bolder;
  font-family: monospace;
  color: #8ff;
}
</style>
<div class="login-container col-10">
  <div class="title">User Login</div>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="form">
    <div class="form-group">
      <!-- <label class="form-label" for="username">Username</label> -->
      <input type="text" id="username" name="username" placeholder="Username" required />
    </div>
    <div class="form-group">
      <!-- <label for="password" class="form-label">Password</label> -->
      <input type="password" id="password" name="password" placeholder="Password" required />
    </div>
    <div class="form-btn-group">
      <input type="submit" id="submit" class="btn" name="login" value="Login" />
    </div>
  </form>
  <?php 
    $login_err = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["login"])) {
      // Using mysqli for better performance and error handling
      $username = $_POST["username"];
      $password = $_POST["password"];
      $sql_account = "SELECT uid, password, role FROM account WHERE username=? AND status='yes'";
      $stmt_account = mysqli_prepare($link , $sql_account);
      mysqli_stmt_bind_param($stmt_account, "s", $username);
      if (mysqli_stmt_execute($stmt_account)) {
        if(mysqli_field_count($link) > 0){
          mysqli_stmt_bind_result($stmt_account, $uid, $pwd_hashed, $role);
          mysqli_stmt_fetch($stmt_account);
          mysqli_stmt_close($stmt_account);
          if (password_verify($password, $pwd_hashed)) {
            $sql_user = "SELECT fname, lname, photo, d_code, c_code from user WHERE uid=?";
            $stmt_user = mysqli_prepare($link, $sql_user);
            mysqli_stmt_bind_param($stmt_user, "s", $uid);
            if (mysqli_stmt_execute($stmt_user)) {
              mysqli_stmt_bind_result($stmt_user, $_SESSION["sfn"], $_SESSION["sln"],
                                      $_SESSION["sphoto"], $d_code, $_SESSION["scc"]);
              mysqli_stmt_fetch($stmt_user);
              mysqli_stmt_close($stmt_user);
              $_SESSION["sdc"] = $d_code;
              $has_department = ["department_head", "instructor", "student"];
              if (in_array($role, $has_department)) {
                $sql_department = "SELECT dname FROM department WHERE dcode=?";
                $stmt_department = mysqli_prepare($link, $sql_department);
                mysqli_stmt_bind_param($stmt_department, "s", $d_code);
                if (mysqli_stmt_execute($stmt_department)) {
                    mysqli_stmt_bind_result($stmt_department, $_SESSION["sdpt"]);
                    mysqli_stmt_fetch($stmt_department);
                    mysqli_stmt_close($stmt_department);
                    $_SESSION["sdcode"] = $_SESSION["sdpt"];
                } else {
                  $login_err = "Something went wrong. Try again!"; 
                  exit();
                }
              }
                $has_department = ["student"];
             if ($role=="student" ) {
                  $sql_student = "SELECT year,section,semister FROM student WHERE S_id=?";
               $link=mysqli_connect("localhost","root","");
                  //$stmt_student = mysqli_query($link, $sql_student);
                    $status = mysqli_select_db($link,'cde') or die(mysqli_error($link));
                  $stmt=mysqli_prepare($link,$sql_student)or die(mysqli_error($link));
              mysqli_stmt_bind_param( $stmt,"s",$uid);
                 if ( mysqli_stmt_execute($stmt)){
                    mysqli_stmt_bind_result($stmt, $_SESSION["syear"],
                                             $_SESSION["ssection"], $_SESSION["ssemister"]);
                      mysqli_stmt_fetch($stmt);
                      mysqli_stmt_close($stmt);
                  } else {
                    $login_err = $login_err = "Something went wrong. Try again!"; 
                   exit();
                  }
              }
            } else {
              $login_err = $login_err = "Something went wrong. Try again!"; 
              exit();
            }

          
            $_SESSION["suid"] = $uid;
            $_SESSION["sun"] = $username;
            $_SESSION["spw"] = $password;
            $_SESSION["srole"] = $role;
            $login_time = date("h:i:s");
            $_SESSION["login_time"] = $login_time;
            unset($_SESSION["tries"]);
            ?>
            <script type="text/javascript">window.location.href = "<?php 
            if ($role == "registrar") {echo "registrar/registrarpage.php";}
            elseif ($role == "administrator") {echo "admin/adminhomepage.php";}
            elseif ($role == "department_head") {echo "department/deptheadpage.php";}
            elseif ($role == "instructor") {echo "instructor/instructorpage.php";}
            elseif ($role == "student") {echo "student/studentpage.php";}
            elseif ($role == "cdeofficer") {echo "cdeofficer/cdeofficerpage.php";}
            elseif ($role == "financestaff") {echo "finance/financestafpage.php";}
            elseif ($role == "collage_dean") {echo "collage/financestafpage.php";}
            elseif ($role == "directorat") {echo "directorat/directorpage.php";} ?>"
            </script><?php
          } else {
            $login_err = "Invalid username and/or password. Please enter correct data and try again"; 
          } 
        } else {
            $login_err = "Invalid username and/or password. Please enter correct data and try again"; 
        }
      } else {
        echo mysqli_error($link);
        $login_err = "Sorry, something went wrong! Try again"; 
        mysqli_stmt_close($stmt_account);
      }
      $_SESSION["tries"] = isset($_SESSION["tries"]) ? $_SESSION["tries"] + 1 : 1;
      if ($_SESSION["tries"] >= 3) {
        $login_err = "Too many tries. Please try again after 10 seconds.";
        ?><script>
          let login_btn = document.querySelector('#submit');
          login_btn.hidden = true;
          setTimeout(()=>{
            <?php unset($_SESSION['tries']); ?>
            login_btn.hidden = false;
            document.querySelector('#login-err').innerHTML = '';
          }, 10000);
        </script><?php
      }
    }
    ?>
  <div class="login-err" id="login-err"><?php echo $login_err; ?></div>
  <div class="extra">
    <a href="forgot.php">Forgot your password?</a>
  </div>
</div>
<?php
  }
?>