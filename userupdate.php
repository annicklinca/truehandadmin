<?php
 include 'navbar.php';
 include '../connection.php'; 
 include 'admin_session.php';
 $seri_id=$_GET['updateuser'];

 if (isset($_POST['updatuser'])){
   
    $username=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $role=$_POST['role'];
    $confirmpassword=md5($_POST['confirmpassword']);
    $password=md5($_POST['password']);
    if($_POST['password']==''){
        $sql=mysqli_query($conn,"UPDATE admin SET username='$username', email='$email', phone='$phone', role='$role' WHERE id=$seri_id;");
        if ($sql) {
            $successmessage .='Update user Successefully';	
        }
        else {
            $errormessage .='Update user failed!';	    
        }
    }else {

    if ($confirmpassword==$password) {
        $sql=mysqli_query($conn,"UPDATE admin SET username='$username', email='$email', phone='$phone', role='$role', password='$password' WHERE id=$seri_id;");
        if ($sql) {
            $successmessage .='Update user Successefully';	
        }
        else {
            $errormessage .='Update user failed!';	    
        }
    }
    else {
        $errormessage .='two password not match failed!';	
    }
 } 
   
}

?>
   <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <!-- <div class="page-header-title">
                                        <h5 class="m-b-10">Home</h5>
                                    </div>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Basic Componants</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:">Navs & tabs</a></li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row">
                                <!--[content section] start-->
                                <div class="col-sm-12">
                                    <h5>User</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update User</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <?php
                                                if ( isset($successmessage)) {
                                                    echo '
                                                        <div class="card borderless-card bg-success">
                                                            <div class="card-block success-breadcrumb">
                                                                <div class="breadcrumb-header">
                                                                    <span style="color:white;">'.$successmessage.'</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ';
                                                }
                                                ?>
                                                <?php
                                                if ( isset($errormessage)) {
                                                  echo '
                                                      <div class="card borderless-card  bg-danger">
                                                          <div class="card-block danger-breadcrumb">
                                                              <div class="breadcrumb-header">
                                                                  <span style="color:white;">'.$errormessage.'</span>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updateuser'])) {
                                                    $ser_id=$_GET['updateuser'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM admin WHERE admin.id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">User Name</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="name" value="<?php echo $row['username']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="email" value="<?php echo $row['email']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Phone</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" name="phone" value="<?php echo $row['phone']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Role</label>
                                                        <div class="col-sm-10">
                                                            <select name="role"  class="form-control form-control-normal">
                                                            <optio value="<?php echo $row['role']; ?>"><?php echo $row['role']; ?></option>
                                                            <option value="admin">admin</option>
                                                            <option value="resident">resident</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="password" placeholder="***********" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-2 col-form-label">Confirm password</label>
                                                        <div class="col-sm-10">
                                                            <input type="password" name="confirmpassword" placeholder="***********" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updatuser" value="Update user"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                        <?php
                                                    } 
                                                }
                                                ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <?php
include 'footer.php'
?>