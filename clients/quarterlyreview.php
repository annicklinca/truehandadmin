<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addquarterlyreview'])){
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
    $sql=mysqli_query($conn,"INSERT INTO quarterlyreview(DriverLicense,
    CPR,
    FirstAid,
    CrisisPrevention,
    ClientRights,
    Physical,
    AnnualTuberculosis,
    MedicationTraining,
    PerformanceEvaluation,
    PolicyProcedure,
    FireDrill,
    EmergencyProcedures,
    RecordsConfidentiality,
    EducationReports,
    PersonnelInformation,
    resident_id,
    user_id) VALUES ('$DriverLicense',
    '$CPR',
    '$FirstAid',
    '$CrisisPrevention',
    '$ClientRights',
    '$Physical',
    '$AnnualTuberculosis',
    '$MedicationTraining',
    '$PerformanceEvaluation',
    '$PolicyProcedure',
    '$FireDrill',
    '$EmergencyProcedures',
    '$RecordsConfidentiality',
    '$EducationReports',
    '$PersonnelInformation',
    '$residentid',
    '$user_id')");
    if ($sql) {
        $successmessage .='Add Personnel Records Quarterly Review Successefully';	
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
                                    <h5>Personnel Records Quarterly Review</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Personnel Records Quarterly Review</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Personnel Records Quarterly Review</a>
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
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Personnel Records Quarterly Review</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">1.Driver’s License	Current</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="DriverLicense" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">2.CPR Certification Card current	</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="CPR" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">3.First Aid Certification Current </label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="FirstAid" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">4.Crisis Prevention & Intervention (CPI)</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="CrisisPrevention" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">5.Client Rights Title 9 Certification</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="ClientRights" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">6.Physical</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="Physical" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">7.Annual Tuberculosis Test</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="AnnualTuberculosis" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">8.Medication Training Checklist Completed Quarterly</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="MedicationTraining" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">9.Performance Evaluation</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="PerformanceEvaluation" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">10.Policy and Procedure Review	</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="PolicyProcedure" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">11.Fire Drill Participation	</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="FireDrill" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">12.Emergency Procedures Knowledge</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="EmergencyProcedures" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">13.Records & Confidentiality Training</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="RecordsConfidentiality" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">14.Education Reports	</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="EducationReports" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">15.Personnel Information (update)</label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <input type="date" name="PersonnelInformation" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addquarterlyreview" value="Add Quarterly Review"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class=" table-border-style">
                                                   <div class="table-responsive">
                                                        <table id="zero_config" class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>DriverLicense</th>
                                                                    <th>CPR</th>
                                                                    <th>FirstAid</th>
                                                                    <th>CrisisPrevention</th>
                                                                    <th>ClientRights</th>
                                                                    <th>Physical</th>
                                                                    <th>AnnualTuberculosis</th>
                                                                    <th>MedicationTraining</th>
                                                                    <th>PerformanceEvaluation</th>
                                                                    <th>PolicyProcedure</th>
                                                                    <th>FireDrill</th>
                                                                    <th>EmergencyProcedures</th>
                                                                    <th>RecordsConfidentiality</th>
                                                                    <th>EducationReports</th>
                                                                    <th>PersonnelInformation</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM quarterlyreview WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['DriverLicense'] ; ?></td>
                                                                    <td><?php echo $row['CPR'] ; ?></td>
                                                                    <td><?php echo $row['FirstAid'] ; ?></td>
                                                                    <td><?php echo $row['CrisisPrevention'] ; ?></td>
                                                                    <td><?php echo $row['ClientRights'] ; ?></td>
                                                                    <td><?php echo $row['Physical'] ; ?></td>
                                                                    <td><?php echo $row['AnnualTuberculosis'] ; ?></td>
                                                                    <td><?php echo $row['MedicationTraining'] ; ?></td>
                                                                    <td><?php echo $row['PerformanceEvaluation'] ; ?></td>
                                                                    <td><?php echo $row['PolicyProcedure'] ; ?></td>
                                                                    <td><?php echo $row['FireDrill'] ; ?></td>
                                                                    <td><?php echo $row['EmergencyProcedures'] ; ?></td>
                                                                    <td><?php echo $row['RecordsConfidentiality'] ; ?></td>
                                                                    <td><?php echo $row['EducationReports'] ; ?></td>
                                                                    <td><?php echo $row['PersonnelInformation'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="printquarterlyreview.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delquarterlyreview=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this confidentiality statement.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="quarterlyreviewupdate.php?updatequarterlyreview=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                                </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
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