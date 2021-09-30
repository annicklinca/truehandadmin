<?php

include '../connection.php';

if (isset($_POST['login'])) {
   
    session_start();

	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$email=stripcslashes($email);
	$password=stripcslashes($password);
	$email=mysqli_real_escape_string($conn,$email);
	$password=mysqli_real_escape_string($conn,$password);
    
	if (empty($email) || empty($password)) {
		header("location:index.php?empty=Email and Password are requied");
	}
	else {
		$select=mysqli_query($conn,"SELECT * FROM admin WHERE email='$email' AND password='$password' ") or die(mysqli_error($conn)) ;
		
        if (mysqli_num_rows($select)>0) {

	        session_regenerate_id();
	        $verfied=mysqli_fetch_assoc($select); 

	        $_SESSION['adminid']=$verfied['id'] ;
	        $_SESSION['adminusername']=$verfied['username'] ;
	        $_SESSION['adminemail']=$verfied['email'] ;
	        $_SESSION['adminphone']=$verfied['phone'] ;
	        $_SESSION['adminpassword']=$verfied['password'] ;
	        $_SESSION['adminrole']=$verfied['role'] ;
	        session_write_close();
            
            if ($verfied['role']=='admin') {
                $_SESSION['adminid']=$verfied['id'] ;
	        $_SESSION['adminusername']=$verfied['username'] ;
	        $_SESSION['adminemail']=$verfied['email'] ;
	        $_SESSION['adminphone']=$verfied['phone'] ;
	        $_SESSION['adminpassword']=$verfied['password'] ;
	        $_SESSION['adminrole']=$verfied['role'] ;
	        session_write_close();
                header("location:index.php");
            }
            elseif ($verfied['role']=='resident') {
                $_SESSION['adminid']=$verfied['id'] ;
	        $_SESSION['adminusername']=$verfied['username'] ;
	        $_SESSION['adminemail']=$verfied['email'] ;
	        $_SESSION['adminphone']=$verfied['phone'] ;
	        $_SESSION['adminpassword']=$verfied['password'] ;
	        $_SESSION['adminrole']=$verfied['role'] ;
	        session_write_close();
                
                header("location:resident/index.php");
            }
            else {
                $errormessage .='You do not have account';	
            }

		}
		else {
            $errormessage .='You do not have account';			
		}
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>True Hand Behavioral</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div>
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-unlock auth-icon"></i>
                    </div>
                    <h3 class="mb-4">Login</h3>
                                
                                <?php
                                      if ( isset($errormessage)) {
                                        echo '
                                            <div class="card borderless-card bg-danger">
                                                <div class="card-block danger-breadcrumb">
                                                    <div class="breadcrumb-header">
                                                        <span style="color: white;">'.$errormessage.'</span>
                                                    </div>
                                                </div>
                                            </div>
                                        ';
                                      }
                                    ?>
                    <form action="" method="POST">
                    <div class="input-group mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="input-group mb-4">
                        <input type="password" name="password" class="form-control" placeholder="password">
                    </div>
                    <div class="form-group text-left">
                        <div class="checkbox checkbox-fill d-inline">
                            <input type="checkbox" name="checkbox-fill-1" id="checkbox-fill-a1" checked="">
                            <label for="checkbox-fill-a1" class="cr"> Save Details</label>
                        </div>
                    </div>
                    <input type="submit" value="Login now." name="login" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
