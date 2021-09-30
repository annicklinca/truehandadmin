<?php
 include 'nav.php';
 $user_id=$user_id;
 $rec_id=$_GET['updatequarterlyreview']; 
 if (isset($_POST['updatquarterlyreview'])){
    
    $DriverLicense=$_POST['DriverLicense'];
    $CPR=$_POST['CPR'];
    $FirstAid=$_POST['FirstAid'];
    $CrisisPrevention=$_POST['CrisisPrevention'];
    $ClientRights=$_POST['ClientRights'];
    $Physical=$_POST['Physical'];
    $AnnualTuberculosis=$_POST['AnnualTuberculosis'];
    $MedicationTraining=$_POST['MedicationTraining'];
    $PerformanceEvaluation=$_POST['PerformanceEvaluation'];
    $PolicyProcedure=$_POST['PolicyProcedure'];
    $FireDrill=$_POST['FireDrill'];
    $EmergencyProcedures=$_POST['EmergencyProcedures'];
    $RecordsConfidentiality=$_POST['RecordsConfidentiality'];
    $EducationReports=$_POST['EducationReports'];
    $PersonnelInformation=$_POST['PersonnelInformation'];

    $sql=mysqli_query($conn,"UPDATE quarterlyreview SET 
    DriverLicense='$DriverLicense',
    CPR='$CPR',
    FirstAid='$FirstAid',
    CrisisPrevention='$CrisisPrevention',
    ClientRights='$ClientRights',
    Physical='$Physical',
    AnnualTuberculosis='$AnnualTuberculosis',
    MedicationTraining='$MedicationTraining',
    PerformanceEvaluation='$PerformanceEvaluation',
    PolicyProcedure='$PolicyProcedure',
    FireDrill='$FireDrill',
    EmergencyProcedures='$EmergencyProcedures',
    RecordsConfidentiality='$RecordsConfidentiality',
    EducationReports='$EducationReports',
    PersonnelInformation='$PersonnelInformation'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update quarterly review Successefully';     
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
                                    <h5>Confidentiality Statement</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update confidentiality statement</a>
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
                                                                    <span style="color:white;">'.$successmessage.'</span> <br>
                                                                    <a href="quarterlyreview.php"><button class="btn btn-success">Go to quarterlyreview page</button></a>
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
                                                                  <a href="quarterlyreview.php"><button class="btn btn-success">Go to quarterly review page</button></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updatequarterlyreview'])) {
                                                    $ser_id=$_GET['updatequarterlyreview'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM quarterlyreview WHERE quarterlyreview.id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <form action="" method="POST" >
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Personnel Records Quarterly Review</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">1.Driver’s License	Current</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="DriverLicense" value="<?php echo $row['DriverLicense']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">2.CPR Certification Card current	</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="CPR" value="<?php echo $row['CPR']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">3.First Aid Certification Current </label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="FirstAid" value="<?php echo $row['FirstAid']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">4.Crisis Prevention & Intervention (CPI)</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="CrisisPrevention" value="<?php echo $row['CrisisPrevention']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">5.Client Rights Title 9 Certification</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="ClientRights" value="<?php echo $row['ClientRights']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">6.Physical</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="Physical" value="<?php echo $row['Physical']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">7.Annual Tuberculosis Test</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="AnnualTuberculosis" value="<?php echo $row['AnnualTuberculosis']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">8.Medication Training Checklist Completed Quarterly</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="MedicationTraining" value="<?php echo $row['MedicationTraining']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">9.Performance Evaluation</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="PerformanceEvaluation" value="<?php echo $row['PerformanceEvaluation']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">10.Policy and Procedure Review	</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="PolicyProcedure" value="<?php echo $row['PolicyProcedure']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">11.Fire Drill Participation	</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="FireDrill" value="<?php echo $row['FireDrill']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">12.Emergency Procedures Knowledge</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="EmergencyProcedures" value="<?php echo $row['EmergencyProcedures']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">13.Records & Confidentiality Training</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="RecordsConfidentiality" value="<?php echo $row['RecordsConfidentiality']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">14.Education Reports	</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="EducationReports"  value="<?php echo $row['EducationReports']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">15.Personnel Information (update)</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="PersonnelInformation"  value="<?php echo $row['PersonnelInformation']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updatquarterlyreview" value="Update quarterly review"
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