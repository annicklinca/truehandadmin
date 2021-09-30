
<?php
 
 include '../connection.php';
   
 session_start();
   
 $user_id=$_SESSION['adminid'];
 $user_username=$_SESSION['adminusername'];
 $user_email=$_SESSION['adminemail'];
 $user_phone=$_SESSION['adminphone'];
 $user_password=$_SESSION['adminpassword'];
 $user_role=$_SESSION['adminrole'];

 $sel=$conn->query("SELECT * FROM admin where email='$user_email' and role='admin' ");
 while($rows=mysqli_fetch_array($sel)){
   $us=$rows['email']; $role=$rows['role'];
 }

  if ($user_email=='' or $role !='admin') {
  echo "<script>window.location.replace('signout.php')</script>";
  }

 ?>