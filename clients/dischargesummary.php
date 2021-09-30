<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['adddischargesummary'])){
    $ClientName=$_POST['ClientName'];
    $Dob=$_POST['Dob'];
    $DatePlacement=$_POST['DatePlacement'];
    $DateDischarge=$_POST['DateDischarge'];
    $ClientPresentingIssue=$_POST['ClientPresentingIssue'];
    $SummaryTreatment=$_POST['SummaryTreatment'];
    $ClientProgress=$_POST['ClientProgress'];
    $DosageFrequency=$_POST['DosageFrequency'];
    $DescriptionDisposition=$_POST['DescriptionDisposition'];
    $DischargePlanExplained=$_POST['DischargePlanExplained'];
    $InvoluntaryDischarge=$_POST['InvoluntaryDischarge'];
    $ReferralCommunications=$_POST['ReferralCommunications'];
    $Staff=$_POST['Staff'];
    $StaffDate=$_POST['StaffDate'];
    $BHP=$_POST['BHP'];
    $BHPDate=$_POST['BHPDate'];
    $sql=mysqli_query($conn,"INSERT INTO dischargesummary(
    ClientName,
    Dob,
    DatePlacement,
    DateDischarge,
    ClientPresentingIssue,
    SummaryTreatment,
    ClientProgress,
    DosageFrequency,
    DescriptionDisposition,
    DischargePlanExplained,
    InvoluntaryDischarge,
    ReferralCommunications,
    Staff,
    StaffDate,
    BHP,
    BHPDate,
    resident_id,
    user_id) VALUES (
    '$ClientName',
    '$Dob',
    '$DatePlacement',
    '$DateDischarge',
    '$ClientPresentingIssue',
    '$SummaryTreatment',
    '$ClientProgress',
    '$DosageFrequency',
    '$DescriptionDisposition',
    '$DischargePlanExplained',
    '$InvoluntaryDischarge',
    '$ReferralCommunications',
    '$Staff',
    '$StaffDate',
    '$BHP',
    '$BHPDate',
    '$residentid',
    '$user_id')");
    if ($sql) {
        $successmessage .='Add discharge summary Successefully';	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
    }    
}

if (isset($_POST['uploadfile'])){
       
    $target="../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='dischargesummary';
    $fileCategory='resident';

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
                                    <h5>discharge summary</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add discharge summary</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All discharge summary</a>
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
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Discharge Summary</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Client Name:</label>
                                                            <input type="text" name="ClientName" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" name="Dob" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Placement:</label>
                                                            <input type="date" name="DatePlacement" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Discharge:</label>
                                                            <input type="date" name="DateDischarge" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">1.The client’s presenting issue and other behavioral health issues identified in the client’s treatment plan:</label>
                                                            <textarea name="ClientPresentingIssue" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">2.Summary of the treatment provided to the client:</label>
                                                            <textarea name="SummaryTreatment" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">3.The client’s progress in meeting treatment goals, including treatment goals that were and were not achieved:</label>
                                                            <textarea name="ClientProgress" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">4.The name, dosage and frequency of each medication for the client ordered at the time of the client’s discharge by a Medical Practitioner at the Agency:</label>
                                                            <textarea name="DosageFrequency" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">5.A description of the disposition of the client’s possessions, fund or medications:</label>
                                                            <textarea name="DescriptionDisposition" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">6.Discharge plan explained to the client and to person removing client:</label>
                                                            <textarea name="DischargePlanExplained" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">7.Involuntary discharge; review and provide grievance Policy and Procedure:</label>
                                                            <textarea name="InvoluntaryDischarge" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">8.Referral and communications made to new placement, and aftercare plan and follow-up:</label>
                                                            <textarea name="ReferralCommunications" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Staff</label>
                                                            <input type="text" name="Staff" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="StaffDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">BHP Name</label>
                                                            <input type="text" name="BHP" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="BHPDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="adddischargesummary" value="Add discharge summary"
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
                                                                    <th>ClientName</th>
                                                                    <th>Dob</th>
                                                                    <th>DatePlacement</th>
                                                                    <th>DateDischarge</th>
                                                                    <th>ClientPresentingIssue</th>
                                                                    <th>SummaryTreatment</th>
                                                                    <th>ClientProgress</th>
                                                                    <th>DosageFrequency</th>
                                                                    <th>DescriptionDisposition</th>
                                                                    <th>DischargePlanExplained</th>
                                                                    <th>InvoluntaryDischarge</th>
                                                                    <th>ReferralCommunications</th>
                                                                    <th>Staff</th>
                                                                    <th>StaffDate</th>
                                                                    <th>BHP</th>
                                                                    <th>BHPDate</th>
                                                                    <th>Sign</th>
                                                                    <th>Print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM dischargesummary WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['ClientName'] ; ?></td>
                                                                    <td><?php echo $row['Dob'] ; ?></td>
                                                                    <td><?php echo $row['DatePlacement'] ; ?></td>
                                                                    <td><?php echo $row['DateDischarge'] ; ?></td>
                                                                    <td><?php echo $row['ClientPresentingIssue'] ; ?></td>
                                                                    <td><?php echo $row['SummaryTreatment'] ; ?></td>
                                                                    <td><?php echo $row['ClientProgress'] ; ?></td>
                                                                    <td><?php echo $row['DosageFrequency'] ; ?></td>
                                                                    <td><?php echo $row['DescriptionDisposition'] ; ?></td>
                                                                    <td><?php echo $row['DischargePlanExplained'] ; ?></td>
                                                                    <td><?php echo $row['InvoluntaryDischarge'] ; ?></td>
                                                                    <td><?php echo $row['ReferralCommunications'] ; ?></td>
                                                                    <td><?php echo $row['Staff'] ; ?></td>
                                                                    <td><?php echo $row['StaffDate'] ; ?></td>
                                                                    <td><?php echo $row['BHP'] ; ?></td>
                                                                    <td><?php echo $row['BHPDate'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="dischargesummarysign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="printdischargesummary.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?deldischargesummary=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this Discharge summary.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="dischargesummaryupdate.php?updatedischargesummary=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='dischargesummary' AND user_id=$user_id");
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