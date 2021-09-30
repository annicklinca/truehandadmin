<?php
include 'nav.php';
$user_id=$user_id;
$rec_id=$_GET['updatemedicalorders']; 

if (isset($_POST['update'])){
    $lastname=$_POST['lastname'];
    $firstname=$_POST['firstname'];
    $mi1=$_POST['mi1'];
    $dob=$_POST['dob'];
    $medication_date=$_POST['medication_date'];
    $physician_name=$_POST['physician_name'];
    $location=$_POST['location'];
    $medication=$_POST['medication'];
    $dosage=$_POST['dosage'];
    $frequency=$_POST['frequency'];
    $sideeffects=$_POST['sideeffects'];
    $instructions=$_POST['instructions'];
    $physician=$_POST['physician'];
    $datesign=$_POST['datesign'];
    $phonenumber=$_POST['phonenumber'];
    $procedure1=$_POST['procedure1'];

    $sql=mysqli_query($conn,"UPDATE medicalorders SET 
    
    lastname='$lastname',
    firstname='$firstname',
    mi1='$mi1',
    dob='$dob',
    medication_date='$medication_date',
    physician_name='$physician_name',
    location='$location',
    medication='$medication',
    dosage='$dosage',
    frequency='$frequency',
    sideeffects='$sideeffects',
    instructions='$instructions',
    physician='$physician',
     datesign='$datesign',
    phonenumber='$phonenumber',
    procedure1='$procedure1'
    
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update Warning Successfully';
            
    }
    else {
        $errormessage .= mysqli_error($conn);       
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
                                    <h5>Resident Medical Orders</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update Medical Orders</a>
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
                                       <form action="" method="POST" >
                                        <?php
                                                if (isset($_GET['updatemedicalorders'])) {
                                                    $orient_id=$_GET['updatemedicalorders'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM medicalorders WHERE medicalorders.id=$orient_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Resident Medical Orders (completed each time medication is prescribed by a doctor)</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Last Name</label>
                                                            <input type="text" name="lastname" value="<?php echo $row['lastname'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">First Name</label>
                                                            <input type="text" name="firstname" value="<?php echo $row['firstname'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class="col-form-label">MI</label>
                                                            <input type="text" name="mi1" value="<?php echo $row['mi1'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" name="dob" value="<?php echo $row['dob'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Date </label>
                                                            <input type="date" name="medication_date" value="<?php echo $row['medication_date'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-3">
                                                            <label class="col-form-label">Physician’s Name </label>
                                                            <input type="text" name="physician_name" value="<?php echo $row['physician_name'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                         <div class="col-sm-3">
                                                            <label class="col-form-label">Location </label>
                                                            <input type="text" name="location" value="<?php echo $row['location'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Medication Prescribed:</label>
                                                              <input type="text" name="medication" value="<?php echo $row['medication'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Dosage</label>
                                                            <input type="text" name="dosage"  value="<?php echo $row['dosage'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Frequency</label>
                                                           <input type="text" name="frequency" value="<?php echo $row['frequency'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Potential side effects or adverse reactions</label>
                                                            <textarea name="sideeffects" class="form-control form-control-normal"><?php echo $row['sideeffects'];?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Additional instructions for staff and/or resident</label>
                                                            <textarea name="instructions" class="form-control form-control-normal">v<?php echo $row['instructions'];?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">I have reviewed the self-administration procedure and authorize the above patient to self-administer this medication.</label>
                                                            
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Physician Signature</label>
                                                             <input type="text" name="physician" value="<?php echo $row['physician'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                           <input type="date" name="datesign" value="<?php echo $row['datesign'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Telephone Number</label>
                                                            <input type="text" name="phonenumber" value="<?php echo $row['phonenumber'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Emergency Contact Number/Procedure</label>
                                                            <input type="text" name="procedure1" value="<?php echo $row['procedure1'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Medical Orders"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                                    ?>
                                                    
                                                </form>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class=" table-border-style">
                                                   
                                                </div>
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