<?php
 include 'nav.php';
 $user_id=$user_id;
 $rec_id=$_GET['updatedischargesummary']; 
 if (isset($_POST['updatdischargesummary'])){
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

    $sql=mysqli_query($conn,"UPDATE dischargesummary SET 
    ClientName='$ClientName',
    Dob='$Dob',
    DatePlacement='$DatePlacement',
    DateDischarge='$DateDischarge',
    ClientPresentingIssue='$ClientPresentingIssue',
    SummaryTreatment='$SummaryTreatment',
    ClientProgress='$ClientProgress',
    DosageFrequency='$DosageFrequency',
    DescriptionDisposition='$DescriptionDisposition',
    DischargePlanExplained='$DischargePlanExplained',
    InvoluntaryDischarge='$InvoluntaryDischarge',
    ReferralCommunications='$ReferralCommunications',
    Staff='$Staff',
    StaffDate='$StaffDate',
    BHP='$BHP',
    BHPDate='$BHPDate'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update Confidentiality Statement Successefully';     
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
                                    <h5>Discharge Summary</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update discharge summary</a>
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
                                                                    <a href="dischargesummary.php"><button class="btn btn-success">Go to discharge summary page</button></a>
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
                                                                  <a href="dischargesummary.php"><button class="btn btn-success">Go to discharge summary page</button></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updatedischargesummary'])) {
                                                    $ser_id=$_GET['updatedischargesummary'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM dischargesummary WHERE dischargesummary.id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <form action="" method="POST" >
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Discharge Summary</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Client Name:</label>
                                                            <input type="text" name="ClientName" value="<?php echo $row['ClientName']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" name="Dob" value="<?php echo $row['Dob']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Placement:</label>
                                                            <input type="date" name="DatePlacement" value="<?php echo $row['DatePlacement']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Discharge:</label>
                                                            <input type="date" name="DateDischarge" value="<?php echo $row['DateDischarge']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">1.The client’s presenting issue and other behavioral health issues identified in the client’s treatment plan:</label>
                                                            <textarea name="ClientPresentingIssue" class="form-control form-control-normal"><?php echo $row['ClientPresentingIssue']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">2.Summary of the treatment provided to the client:</label>
                                                            <textarea name="SummaryTreatment" class="form-control form-control-normal"><?php echo $row['SummaryTreatment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">3.The client’s progress in meeting treatment goals, including treatment goals that were and were not achieved:</label>
                                                            <textarea name="ClientProgress" class="form-control form-control-normal"><?php echo $row['ClientProgress']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">4.The name, dosage and frequency of each medication for the client ordered at the time of the client’s discharge by a Medical Practitioner at the Agency:</label>
                                                            <textarea name="DosageFrequency" class="form-control form-control-normal"><?php echo $row['DosageFrequency']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">5.A description of the disposition of the client’s possessions, fund or medications:</label>
                                                            <textarea name="DescriptionDisposition" class="form-control form-control-normal"><?php echo $row['DescriptionDisposition']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">6.Discharge plan explained to the client and to person removing client:</label>
                                                            <textarea name="DischargePlanExplained" class="form-control form-control-normal"><?php echo $row['DischargePlanExplained']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">7.Involuntary discharge; review and provide grievance Policy and Procedure:</label>
                                                            <textarea name="InvoluntaryDischarge" class="form-control form-control-normal"><?php echo $row['InvoluntaryDischarge']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">8.Referral and communications made to new placement, and aftercare plan and follow-up:</label>
                                                            <textarea name="ReferralCommunications" class="form-control form-control-normal"><?php echo $row['ReferralCommunications']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Staff</label>
                                                            <input type="text" name="Staff" value="<?php echo $row['Staff']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="StaffDate" value="<?php echo $row['StaffDate']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">BHP Name</label>
                                                            <input type="text" name="BHP" value="<?php echo $row['BHP']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="BHPDate" value="<?php echo $row['BHPDate']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updatdischargesummary" value="Update discharge summary"
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