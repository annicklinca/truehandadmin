<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addverification'])){
    $PersonnelName=$_POST['PersonnelName'];
    $DateOfHire=$_POST['DateOfHire'];
    $FirstDate=$_POST['FirstDate'];
    $ProtectResident=$_POST['ProtectResident'];
    $ProvideTreatment=$_POST['ProvideTreatment'];
    $RecognizeObviousSymptoms=$_POST['RecognizeObviousSymptoms'];
    $ProvideBehavioral=$_POST['ProvideBehavioral'];
    $MeetUnique=$_POST['MeetUnique'];
    $RecognizeRespect=$_POST['RecognizeRespect'];
    $ProtectMaintain=$_POST['ProtectMaintain'];
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
    $sql=mysqli_query($conn,"INSERT INTO verificationknowledgeskills(PersonnelName,
    DateOfHire,
    FirstDate,
    ProtectResident,
    ProvideTreatment,
    RecognizeObviousSymptoms,
    ProvideBehavioral,
    MeetUnique,
    RecognizeRespect,
    ProtectMaintain,
    MayDanger,
    BehavesAggressive,
    CrisisSituation,
    MedicalEmergency,
    ReadImplement,
    AssistResident,
    RecordDocument,
    DemonstrateEthical,
    IdentifyTypes,
    RecognizeRespond,
    ProvideActivities,
    ExaminationCopy,
    TelephoneFax,
    ReviewApplication,
    TelephoneLetter,
    PersonnelInterview,
    WrittenExamination,
    RolePlaying,
    DirectorClinicalSupervisor,
    resident_id,
    user_id) VALUES ('$PersonnelName',
    '$DateOfHire',
    '$FirstDate',
    '$ProtectResident',
    '$ProvideTreatment',
    '$RecognizeObviousSymptoms',
    '$ProvideBehavioral',
    '$MeetUnique',
    '$RecognizeRespect',
    '$ProtectMaintain',
    '$MayDanger',
    '$BehavesAggressive',
    '$CrisisSituation',
    '$MedicalEmergency',
    '$ReadImplement',
    '$AssistResident',
    '$RecordDocument',
    '$DemonstrateEthical',
    '$IdentifyTypes',
    '$RecognizeRespond',
    '$ProvideActivities',
    '$ExaminationCopy',
    '$TelephoneFax',
    '$ReviewApplication',
    '$TelephoneLetter',
    '$PersonnelInterview',
    '$WrittenExamination',
    '$RolePlaying',
    '$DirectorClinicalSupervisor',
    '$residentid',
    '$user_id')");
    if ($sql) {
        $successmessage .='Add verification knowledge skills Successefully';	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
    }    
}
if (isset($_POST['uploadfile'])){
       
    $target="../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='verificationknowledgeskills';
    $fileCategory='employee';

    if (move_uploaded_file($_FILES['filename']['tmp_name'],$target)){
        $sql=mysqli_query($conn,"INSERT INTO fileuploaded VALUES ('','$fileName','$fileCategory','$file','$user_id')");
        if ($sql) {
            $successmessage .='Upload file Successefully';	
        }
        else {
            $errormessage .='Upload file failed!';	    
        }    
    }
    else{
        $errormessage .='Upload file failed! Try Again';
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
                                    <h5>Behavioral Health Technician Required Knowledge and Skills</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add verification Knowledge and Skills</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All verification Knowledge and Skills</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="file-tab" data-toggle="tab" href="#file" role="tab" aria-controls="file" aria-selected="false">All file uploaded</a>
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
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Personnel Name</label>
                                                            <input type="text" name="PersonnelName" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Date of Hire</label>
                                                            <input type="date" name="DateOfHire" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">First Date Providing Behavioral Services</label>
                                                            <input type="date" name="FirstDate" class="form-control form-control-normal"
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
                                                            <input type="text" name="ProtectResident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Provide treatment that promotes resident dignity, independence, individuality, strengths, privacy and choice;</label>
                                                            <input type="text" name="ProvideTreatment" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Recognize obvious symptoms of a mental disorder, personality disorder, or substance abuse;</label>
                                                            <input type="text" name="RecognizeObviousSymptoms" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Provide the behavioral health services that TRUE HAND BEHAVIORAL AGENCY is authorized to provide and that the staff member is qualified to provide;</label>
                                                            <input type="text" name="ProvideBehavioral" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Meet the unique needs of the population served; </label>
                                                            <input type="text" name="MeetUnique" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Recognize and Respect Cultural Differences; </label>
                                                            <input type="text" name="RecognizeRespect" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Protect and maintain the confidentiality of resident records and information;</label>
                                                            <input type="text" name="ProtectMaintain" class="form-control form-control-normal"
                                                            placeholder="">
                                                        <br>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h5>o	Recognize, prevent, and respond to a situation in which a resident:</h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">i)May be a danger to self or a danger to others, </label>
                                                            <input type="text" name="MayDanger" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">ii)Behaves in an aggressive or destructive manner, </label>
                                                            <input type="text" name="BehavesAggressive" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">iii)May be experiencing a crisis situation, or</label>
                                                            <input type="text" name="CrisisSituation" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">iv)May be experiencing a medical emergency; 	 </label>
                                                            <input type="text" name="MedicalEmergency" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Read and implement a resident’s treatment plan;</label>
                                                            <input type="text" name="ReadImplement" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Assist a resident in accessing community resources; </label>
                                                            <input type="text" name="AssistResident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Record and document resident information; </label>
                                                            <input type="text" name="RecordDocument" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Demonstrate ethical behavior, such as by respecting staff member and resident boundaries and recognizing the inappropriateness of receiving gratuities from a resident</label>
                                                            <input type="text" name="DemonstrateEthical" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Identify types of medications commonly prescribed for mental disorders, personality disorders, and substance abuse and the common side effects and adverse reactions of the medications;</label>
                                                            <input type="text" name="IdentifyTypes" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Recognize and respond to a fire, disaster, hazard, and medical emergency; 	</label>
                                                            <input type="text" name="RecognizeRespond" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Provide the activities or behavioral health services identified in the staff member’s job description or TRUE HAND BEHAVIORAL AGENCY Policy and Procedure. </label>
                                                            <input type="text" name="ProvideActivities" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h5>Verification of Education</h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Examination and copy of diplomas/certificates</label>
                                                            <input type="text" name="ExaminationCopy" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Telephone/Fax/Letter communication with institution(s)</label>
                                                            <input type="text" name="TelephoneFax" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h5>Verification of Experience</h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Review of application information</label>
                                                            <input type="text" name="ReviewApplication" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Telephone/Fax/Letter communication with previous employer(s) </label>
                                                            <input type="text" name="TelephoneLetter" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Personnel Interview	</label>
                                                            <input type="text" name="PersonnelInterview" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Written Examination	</label>
                                                            <input type="text" name="WrittenExamination" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">o	Role Playing Exercises	</label>
                                                            <input type="text" name="RolePlaying" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Director/ Clinical Supervisor </label>
                                                            <input type="text" name="DirectorClinicalSupervisor" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addverification" value="Add verification"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                
                                                <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <input type="file" name="filename"
                                                            class="form-control form-control-capitalize"><br>
                                                            <input type="submit" name="uploadfile" value="upload file"
                                                            class="btn btn-success btn-md btn-block waves-effect text-center m-b-20">
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
                                                                    <th>PersonnelName</th>
                                                                    <th>DateOfHire</th>
                                                                    <th>FirstDate</th>
                                                                    <th>ProtectResident</th>
                                                                    <th>ProvideTreatment</th>
                                                                    <th>RecognizeObviousSymptoms</th>
                                                                    <th>ProvideBehavioral</th>
                                                                    <th>MeetUnique</th>
                                                                    <th>RecognizeRespect</th>
                                                                    <th>ProtectMaintain</th>
                                                                    <th>MayDanger</th>
                                                                    <th>BehavesAggressive</th>
                                                                    <th>CrisisSituation</th>
                                                                    <th>MedicalEmergency</th>
                                                                    <th>ReadImplement</th>
                                                                    <th>AssistResident</th>
                                                                    <th>RecordDocument</th>
                                                                    <th>DemonstrateEthical</th>
                                                                    <th>IdentifyTypes</th>
                                                                    <th>RecognizeRespond</th>
                                                                    <th>ProvideActivities</th>
                                                                    <th>ExaminationCopy</th>
                                                                    <th>TelephoneFax</th>
                                                                    <th>ReviewApplication</th>
                                                                    <th>TelephoneLetter</th>
                                                                    <th>PersonnelInterview</th>
                                                                    <th>WrittenExamination</th>
                                                                    <th>RolePlaying</th>
                                                                    <th>DirectorClinicalSupervisor</th>
                                                                    <th>sign</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM verificationknowledgeskills WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['PersonnelName'] ; ?></td>
                                                                    <td><?php echo $row['DateOfHire'] ; ?></td>
                                                                    <td><?php echo $row['FirstDate'] ; ?></td>
                                                                    <td><?php echo $row['ProtectResident'] ; ?></td>
                                                                    <td><?php echo $row['ProvideTreatment'] ; ?></td>
                                                                    <td><?php echo $row['RecognizeObviousSymptoms'] ; ?></td>
                                                                    <td><?php echo $row['ProvideBehavioral'] ; ?></td>
                                                                    <td><?php echo $row['MeetUnique'] ; ?></td>
                                                                    <td><?php echo $row['RecognizeRespect'] ; ?></td>
                                                                    <td><?php echo $row['ProtectMaintain'] ; ?></td>
                                                                    <td><?php echo $row['MayDanger'] ; ?></td>
                                                                    <td><?php echo $row['BehavesAggressive'] ; ?></td>
                                                                    <td><?php echo $row['CrisisSituation'] ; ?></td>
                                                                    <td><?php echo $row['MedicalEmergency'] ; ?></td>
                                                                    <td><?php echo $row['ReadImplement'] ; ?></td>
                                                                    <td><?php echo $row['AssistResident'] ; ?></td>
                                                                    <td><?php echo $row['RecordDocument'] ; ?></td>
                                                                    <td><?php echo $row['DemonstrateEthical'] ; ?></td>
                                                                    <td><?php echo $row['IdentifyTypes'] ; ?></td>
                                                                    <td><?php echo $row['RecognizeRespond'] ; ?></td>
                                                                    <td><?php echo $row['ProvideActivities'] ; ?></td>
                                                                    <td><?php echo $row['ExaminationCopy'] ; ?></td>
                                                                    <td><?php echo $row['TelephoneFax'] ; ?></td>
                                                                    <td><?php echo $row['ReviewApplication'] ; ?></td>
                                                                    <td><?php echo $row['TelephoneLetter'] ; ?></td>
                                                                    <td><?php echo $row['PersonnelInterview'] ; ?></td>
                                                                    <td><?php echo $row['WrittenExamination'] ; ?></td>
                                                                    <td><?php echo $row['RolePlaying'] ; ?></td>
                                                                    <td><?php echo $row['DirectorClinicalSupervisor'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="verificationknowledgeskillssign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="printverificationknowledgeskills.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delverificationknowledgeskills=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this verification knowledge & skills.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="verificationknowledgeskillsupdate.php?updateverificationknowledgeskills=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                                </tr>
                                                                <?php
                                                                }
                                                                ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="tab-pane fade" id="file" role="tabpanel" aria-labelledby="file-tab">
                                        <div class=" table-border-style">
                                                   <div class="table-responsive">
                                                        <table id="zero_config" class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>File Name</th>
                                                                    <th>FIle Category</th>
                                                                    <th>File</th>
                                                                    <th>Delete</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='verificationknowledgeskills' AND user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                    <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['fileName'] ; ?></td>
                                                                    <td><?php echo $row['fileCategory'] ; ?></td>
                                                                    <td><a href="../fileuploaded/<?php echo $row['file'] ; ?>"><?php echo $row['file'] ; ?></a></td>
                                                                    <td><a class="btn btn-danger" href="deletefile.php?deldischargesummary=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this file.')" id="red">Delete</a></td>
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