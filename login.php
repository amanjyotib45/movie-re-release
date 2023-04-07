<?php
session_start();
include('./utilityfunction.php');
$conn = mysqli_connect('localhost', 'root', '', 'tfn');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = sha1(md5($_POST['password']));;

    $sql = "select * from user where pass_email = '$username' and pass_pwd = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num > 0){
        $_SESSION['username'] = $row['pass_email'];
        redirect('./index.php');
    }
    else{
        error_reporting( E_ALL );
    }
}
?>


<!DOCTYPE html>
<html lang="en">
  
<head> 

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <title>THE FILM NOSTALGIA</title>
    <link rel="stylesheet" type="text/css" href="assets/lib/perfect-scrollbar/css/perfect-scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/lib/material-design-icons/css/material-design-iconic-font.min.css"/>
    <link rel="stylesheet" href="assets/css/app.css" type="text/css"/>
    
  </head>
  
  <body background="image/login1.png" class="be-splash-screen">
    

    <div class="be-wrapper be-login">
      <div class="be-content">
        <div class="main-content container-fluid">
          <div class="splash-container">
            <div class="card card-border-color card-border-color-success">
              <div class="card-header"><img class="logo-img" src="image/logopng.png" alt="logo" width="{conf.logoWidth}" height="40"><span class="splash-description">Please enter your user information.</span></div>
              <div class="card-body">

              <!--Login Form-->
                <form method ="POST">
                  <div class="login-form ">

                    <div class="form-group">
                      <input class="form-control" name="username" type="text" placeholder="Email" autocomplete="off">
                    </div>

                    <div class="form-group">
                      <input class="form-control" name="password" type="password" placeholder="Password">
                    </div>

                    <div class="form-group row login-submit">
                      <div class="col-6"><a class="btn btn-danger btn-xl" href="pass-signup.php">Register</a></div>
                      <div class="col-6"><input type = "submit" name ="login" class="btn btn-success btn-xl" value ="Log In"  ></div>
                    </div>
                    
                  </div>
                </form>
                <!--End Login-->
              </div>
            </div>
            <!-- <div class="splash-footer"><a href = "index.php">Home</a></div> -->

            <div class="splash-footer">&copy; 2023 - <?php echo date ('Y');?> <h4><b>THE FILM NOSTALGIA</b></h4></div>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/lib/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="assets/lib/perfect-scrollbar/js/perfect-scrollbar.min.js" type="text/javascript"></script>
    <script src="assets/lib/bootstrap/dist/js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <script src="assets/js/app.js" type="text/javascript"></script>
    <script src="assets/js/swal.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
      	//-initialize the javascript
      	App.init();
      });
      
    </script>
  </body>

</html>