<?php
 include 'nav.php';
 $user_id=$user_id;
 $rec_id=$_GET['updateverificationknowledgeskills']; 
 if (isset($_POST['updatverification'])){
    
    $PersonnelName=$_POST['PersonnelName'];
    $DateOfHire=$_POST['DateOfHire'];
    
    $FirstDate=$_POST['FirstDate'];
    $ProtectResident=$_POST['ProtectResident'];
    
    $ProvideTreatment=$_POST['ProvideTreatment'];
    $RecognizeObviousSymptoms=$_POST['RecognizeObviousSymptoms'];
    
    $ProvideBehavioral=$_POST['ProvideBehavioral'];
    $MeetUnique=$_POST['MeetUnique'];
    
    $RecognizeRespect=$_POST['RecognizeRespect'];
    $MayDanger=$_POST['MayDanger'];
    
    $BehavesAggressive=$_POST['BehavesAggressive'];
    $CrisisSituation=$_POST['CrisisSituation'];
    
    $MedicalEmergency=$_POST['MedicalEmergency'];
    $ReadImplement=$_POST['ReadImplement'];
    
    $AssistResident=$_POST['AssistResident'];
    $RecordDocument=$_POST['RecordDocument'];
    
    $DemonstrateEthical=$_POST['DemonstrateEthical'];
    $IdentifyTypes=$_POST['IdentifyTypes'];
    
    $RecognizeRespond=$_POST['RecognizeRespond'];
    $ProvideActivities=$_POST['ProvideActivities'];
    
    $ExaminationCopy=$_POST['ExaminationCopy'];
    $TelephoneFax=$_POST['TelephoneFax'];
    
    $ReviewApplication=$_POST['ReviewApplication'];
    $TelephoneLetter=$_POST['TelephoneLetter'];
    
    $PersonnelInterview=$_POST['PersonnelInterview'];
    $WrittenExamination=$_POST['WrittenExamination'];
    
    $RolePlaying=$_POST['RolePlaying'];
    $DirectorClinicalSupervisor=$_POST['DirectorClinicalSupervisor'];
    
    $sql=mysqli_query($conn,"UPDATE verificationknowledgeskills SET 
    PersonnelName='$PersonnelName',
    DateOfHire='$DateOfHire', 
    FirstDate='$FirstDate',
    ProtectResident='$ProtectResident', 
    ProvideTreatment='$ProvideTreatment',
    RecognizeObviousSymptoms='$RecognizeObviousSymptoms', 
    ProvideBehavioral='$ProvideBehavioral',
    MeetUnique='$MeetUnique', 
    RecognizeRespect='$RecognizeRespect',
    MayDanger='$MayDanger', 
    BehavesAggressive='$BehavesAggressive',
    CrisisSituation='$CrisisSituation', 
    MedicalEmergency='$MedicalEmergency',
    ReadImplement='$ReadImplement', 
    AssistResident='$AssistResident',
    RecordDocument='$RecordDocument', 
    DemonstrateEthical='$DemonstrateEthical',
    IdentifyTypes='$IdentifyTypes', 
    RecognizeRespond='$RecognizeRespond',
    ProvideActivities='$ProvideActivities', 
    ExaminationCopy='$ExaminationCopy',
    TelephoneFax='$TelephoneFax', 
    ReviewApplication='$ReviewApplication',
    TelephoneLetter='$TelephoneLetter', 
    PersonnelInterview='$PersonnelInterview',
    WrittenExamination='$WrittenExamination', 
    RolePlaying='$RolePlaying',
    DirectorClinicalSupervisor='$DirectorClinicalSupervisor'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update verification knowledge skills Successefully';     
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
                                    <h5>verification knowledge skills</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update</a>
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
                                                                    <a href="verificationknowledgeskills.php"><button class="btn btn-success">Go to verificationknowledgeskills page</button></a>
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
                                                                  <a href="verificationknowledgeskills.php"><button class="btn btn-success">Go to verificationknowledgeskills page</button></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updateverificationknowledgeskills'])) {
                                                    $ser_id=$_GET['updateverificationknowledgeskills'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM verificationknowledgeskills WHERE verificationknowledgeskills.id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <form action="" method="POST" >
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Personnel Name</label>
                                                            <input type="text" name="PersonnelName" value="<?php echo $row['PersonnelName']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Date of Hire</label>
                                                            <input type="date" name="DateOfHire" value="<?php echo $row['DateOfHire']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">First Date Providing Behavioral Services</label>
                                                            <input type="date" name="FirstDate" value="<?php echo $row['FirstDate']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">
                                                            <h3>Behavioral Health Technician Required Knowledge and Skills</h3>
                                                        </label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Protect Resident Rights</label>
                                                            <input type="text" name="ProtectResident" value="<?php echo $row['ProtectResident']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Provide treatment that promotes resident dignity, independence, individuality, strengths, privacy and choice;</label>
                                                            <input type="text" name="ProvideTreatment" value="<?php echo $row['ProvideTreatment']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Recognize obvious symptoms of a mental disorder, personality disorder, or substance abuse;</label>
                                                            <input type="text" name="RecognizeObviousSymptoms" value="<?php echo $row['RecognizeObviousSymptoms']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Provide the behavioral health services that TRUE HAND BEHAVIORAL AGENCY is authorized to provide and that the staff member is qualified to provide;</label>
                                                            <input type="text" name="ProvideBehavioral" value="<?php echo $row['ProvideBehavioral']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Meet the unique needs of the population served; </label>
                                                            <input type="text" name="MeetUnique" value="<?php echo $row['MeetUnique']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Recognize and Respect Cultural Differences; </label>
                                                            <input type="text" name="RecognizeRespect" value="<?php echo $row['RecognizeRespect']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        <br>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h5>o	Recognize, prevent, and respond to a situation in which a resident:</h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">i)May be a danger to self or a danger to others, </label>
                                                            <input type="text" name="MayDanger" value="<?php echo $row['MayDanger']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">ii)Behaves in an aggressive or destructive manner, </label>
                                                            <input type="text" name="BehavesAggressive" value="<?php echo $row['BehavesAggressive']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">iii)May be experiencing a crisis situation, or</label>
                                                            <input type="text" name="CrisisSituation" value="<?php echo $row['CrisisSituation']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">iv)May be experiencing a medical emergency; 	 </label>
                                                            <input type="text" name="MedicalEmergency" value="<?php echo $row['MedicalEmergency']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Read and implement a resident’s treatment plan;</label>
                                                            <input type="text" name="ReadImplement" value="<?php echo $row['ReadImplement']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Assist a resident in accessing community resources; </label>
                                                            <input type="text" name="AssistResident" value="<?php echo $row['AssistResident']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Record and document resident information; </label>
                                                            <input type="text" name="RecordDocument" value="<?php echo $row['RecordDocument']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Demonstrate ethical behavior, such as by respecting staff member and resident boundaries and recognizing the inappropriateness of receiving gratuities from a resident</label>
                                                            <input type="text" name="DemonstrateEthical" value="<?php echo $row['DemonstrateEthical']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Identify types of medications commonly prescribed for mental disorders, personality disorders, and substance abuse and the common side effects and adverse reactions of the medications;</label>
                                                            <input type="text" name="IdentifyTypes" value="<?php echo $row['IdentifyTypes']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Recognize and respond to a fire, disaster, hazard, and medical emergency; 	</label>
                                                            <input type="text" name="RecognizeRespond" value="<?php echo $row['RecognizeRespond']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Provide the activities or behavioral health services identified in the staff member’s job description or TRUE HAND BEHAVIORAL AGENCY Policy and Procedure. </label>
                                                            <input type="text" name="ProvideActivities" value="<?php echo $row['ProvideActivities']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h5>Verification of Education</h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Examination and copy of diplomas/certificates</label>
                                                            <input type="text" name="ExaminationCopy" value="<?php echo $row['ExaminationCopy']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Telephone/Fax/Letter communication with institution(s)</label>
                                                            <input type="text" name="TelephoneFax" value="<?php echo $row['TelephoneFax']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h5>Verification of Experience</h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Review of application information</label>
                                                            <input type="text" name="ReviewApplication" value="<?php echo $row['ReviewApplication']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Telephone/Fax/Letter communication with previous employer(s) </label>
                                                            <input type="text" name="TelephoneLetter" value="<?php echo $row['TelephoneLetter']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Personnel Interview	</label>
                                                            <input type="text" name="PersonnelInterview" value="<?php echo $row['PersonnelInterview']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Written Examination	</label>
                                                            <input type="text" name="WrittenExamination" value="<?php echo $row['WrittenExamination']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Role Playing Exercises	</label>
                                                            <input type="text" name="RolePlaying" value="<?php echo $row['RolePlaying']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Director/ Clinical Supervisor </label>
                                                            <input type="text" name="DirectorClinicalSupervisor" value="<?php echo $row['DirectorClinicalSupervisor']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updatverification" value="Update verification"
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