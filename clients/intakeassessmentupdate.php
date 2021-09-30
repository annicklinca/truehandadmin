<?php
 include 'nav.php';
 $user_id=$user_id;
 $rec_id=$_GET['updateintakeassessment']; 
 if (isset($_POST['updatintakeassessment'])){
    $ResidentName=$_POST['ResidentName'];
    $Dob=$_POST['Dob'];
    $AHCCCS=$_POST['AHCCCS'];
    $Diagnosis=$_POST['Diagnosis'];
    $AdmissionDate=$_POST['AdmissionDate'];
    $SocialSecurity=$_POST['SocialSecurity'];
    $Language=$_POST['Language'];
    $DateBirth=$_POST['DateBirth'];
    $Ethnicity=$_POST['Ethnicity'];
    $Sex=$_POST['Sex'];
    $Religion=$_POST['Religion'];
    $InsuranceInformation=$_POST['InsuranceInformation'];
    $DNR=$_POST['DNR'];
    $DNRComment=$_POST['DNRComment'];
    $ADVANCEDDIRECTIVES=$_POST['ADVANCEDDIRECTIVES'];
    $ADVANCEDDIRECTIVESComment=$_POST['ADVANCEDDIRECTIVESComment'];
    $WILL=$_POST['WILL'];
    $WILLComment=$_POST['WILLComment'];
    $POALEGAL=$_POST['POALEGAL'];
    $POALEGALComment=$_POST['POALEGALComment'];
    $ResidentExpected=$_POST['ResidentExpected'];
    $ClinicalTeam=$_POST['ClinicalTeam'];
    $Strengths=$_POST['Strengths'];
    $Limitations=$_POST['Limitations'];
    $FamilyOthers=$_POST['FamilyOthers'];
    $Allergies=$_POST['Allergies'];

    $Axis1=$_POST['Axis'];
    $Axis="";
     foreach($Axis1 as $Axis2)  
     {  
        $Axis .= $Axis2.",";  
     }

    $Code1=$_POST['Code'];
    $Code="";
    foreach($Code1 as $Code2)  
    {  
       $Code .= $Code2.",";  
    }
    
    $DiagnosisMedical1=$_POST['DiagnosisMedical'];
    $DiagnosisMedical="";
    foreach($DiagnosisMedical1 as $DiagnosisMedical2)  
    {  
       $DiagnosisMedical .= $DiagnosisMedical2.",";  
    }

    $MedicationName1=$_POST['MedicationName'];
    $MedicationName="";
    foreach($MedicationName1 as $MedicationName2)  
    {  
       $MedicationName .= $MedicationName2.",";  
    }

    $MedicationDose1=$_POST['MedicationDose'];
    $MedicationDose="";
    foreach($MedicationDose1 as $MedicationDose2)  
    {  
       $MedicationDose .= $MedicationDose2.",";  
    }

    $MedicationFrequency1=$_POST['MedicationFrequency'];
    $MedicationFrequency="";
    foreach($MedicationFrequency1 as $MedicationFrequency2)  
    {  
       $MedicationFrequency .= $MedicationFrequency2.",";  
    }

    $HistoryNonCompliance=$_POST['HistoryNonCompliance'];
    $PresentStatus=$_POST['PresentStatus'];
    $MedicalPresentationPersonal=$_POST['MedicalPresentationPersonal'];
    $MedicalPresentationFamilyHX=$_POST['MedicalPresentationFamilyHX'];
    $MedicalPresentationUrgentEmergent=$_POST['MedicalPresentationUrgentEmergent'];
    $PsychiatricPresentationPersonal=$_POST['PsychiatricPresentationPersonal'];
    $PsychiatricPresentationFamilyHX=$_POST['PsychiatricPresentationFamilyHX'];
    $PsychiatricPresentationCOT=$_POST['PsychiatricPresentationCOT'];
    $HistorySwicide=$_POST['HistorySwicide'];
    $HistoryIdeation=$_POST['HistoryIdeation'];
    $CurrentIdeation=$_POST['CurrentIdeation'];
    $HistoryHarming=$_POST['HistoryHarming'];
    $HistorySelfHarming=$_POST['HistorySelfHarming'];
    $Hospitalizations=$_POST['Hospitalizations'];
    $PresentsNeat=$_POST['PresentsNeat'];
    $Presentsfree=$_POST['Presentsfree'];
    $WearingAppropriate=$_POST['WearingAppropriate'];
    $DressedAppropriate=$_POST['DressedAppropriate'];
    $SkillsComment=$_POST['SkillsComment'];
    $TakeMedications=$_POST['TakeMedications'];
    $TakeMedicationsComment=$_POST['TakeMedicationsComment'];
    $YourDx=$_POST['YourDx'];
    $YourDxComment=$_POST['YourDxComment'];
    $RecognizeSymptoms=$_POST['RecognizeSymptoms'];
    $RecognizeSymptomsComment=$_POST['RecognizeSymptomsComment'];
    $PublicTransportation=$_POST['PublicTransportation'];
    $PublicTransportationComment=$_POST['PublicTransportationComment'];
    $YourSpending=$_POST['YourSpending'];
    $YourSpendingComment=$_POST['YourSpendingComment'];
    $ResidentWants=$_POST['ResidentWants'];
    $AnyAssets=$_POST['AnyAssets'];
    $IncomeType=$_POST['IncomeType'];
    $CriminalHistory=$_POST['CriminalHistory'];
    $SubstanceDrug=$_POST['SubstanceDrug'];
    $NicotineUse=$_POST['NicotineUse'];
    $LegalHistory=$_POST['LegalHistory'];
    $HistoryAbuse=$_POST['HistoryAbuse'];

    $ADLs1=$_POST['ADLs'];
    $ADLs="";
    foreach($ADLs1 as $ADLs2)  
    {  
       $ADLs .= $ADLs2.",";  
    }

    $PreferredActivities=$_POST['PreferredActivities'];
    $SignificantOthers=$_POST['SignificantOthers'];
    $HealthNutritional=$_POST['HealthNutritional'];
    $SpiritualCultural=$_POST['SpiritualCultural'];
    $Education=$_POST['Education'];
    $VocationalWork=$_POST['VocationalWork'];
    $DischargePlanning=$_POST['DischargePlanning'];
    $PreferreddActivities=$_POST['PreferreddActivities'];
    $Objectives=$_POST['Objectives'];
    $Client=$_POST['Client'];
    $ClientDate=$_POST['ClientDate'];
    $ClinicalOversight=$_POST['ClinicalOversight'];
    $ClinicalOversightDate=$_POST['ClinicalOversightDate'];
    $sql=mysqli_query($conn,"UPDATE intakeassessment SET 
    ResidentName='$ResidentName',
    Dob='$Dob',
    AHCCCS='$AHCCCS',
    Diagnosis='$Diagnosis',
    AdmissionDate='$AdmissionDate',
    SocialSecurity='$SocialSecurity',
    Language='$Language',
    DateBirth='$DateBirth',
    Ethnicity='$Ethnicity',
    Sex='$Sex',
    Religion='$Religion',
    InsuranceInformation='$InsuranceInformation',
    DNR='$DNR',
    DNRComment='$DNRComment',
    ADVANCEDDIRECTIVES='$ADVANCEDDIRECTIVES',
    ADVANCEDDIRECTIVESComment='$ADVANCEDDIRECTIVESComment',
    WILL='$WILL',
    WILLComment='$WILLComment',
    POALEGAL='$POALEGAL',
    POALEGALComment='$POALEGALComment',
    ResidentExpected='$ResidentExpected',
    ClinicalTeam='$ClinicalTeam',
    Strengths='$Strengths',
    Limitations='$Limitations',
    FamilyOthers='$FamilyOthers',
    Allergies='$Allergies',
    Axis='$Axis',
    Code='$Code',
    DiagnosisMedical='$DiagnosisMedical',
    MedicationName='$MedicationName',
    MedicationDose='$MedicationDose',
    MedicationFrequency='$MedicationFrequency',
    HistoryNonCompliance='$HistoryNonCompliance',
    PresentStatus='$PresentStatus',
    MedicalPresentationPersonal='$MedicalPresentationPersonal',
    MedicalPresentationFamilyHX='$MedicalPresentationFamilyHX',
    MedicalPresentationUrgentEmergent='$MedicalPresentationUrgentEmergent',
    PsychiatricPresentationPersonal='$PsychiatricPresentationPersonal',
    PsychiatricPresentationFamilyHX='$PsychiatricPresentationFamilyHX',
    PsychiatricPresentationCOT='$PsychiatricPresentationCOT',
    HistorySwicide='$HistorySwicide',
    HistoryIdeation='$HistoryIdeation',
    CurrentIdeation='$CurrentIdeation',
    HistoryHarming='$HistoryHarming',
    HistorySelfHarming='$HistorySelfHarming',
    Hospitalizations='$Hospitalizations',
    PresentsNeat='$PresentsNeat',
    Presentsfree='$Presentsfree',
    WearingAppropriate='$WearingAppropriate',
    DressedAppropriate='$DressedAppropriate',
    SkillsComment='$SkillsComment',
    TakeMedications='$TakeMedications',
    TakeMedicationsComment='$TakeMedicationsComment',
    YourDx='$YourDx',
    YourDxComment='$YourDxComment',
    RecognizeSymptoms='$RecognizeSymptoms',
    RecognizeSymptomsComment='$RecognizeSymptomsComment',
    PublicTransportation='$PublicTransportation',
    PublicTransportationComment='$PublicTransportationComment',
    YourSpending='$YourSpending',
    YourSpendingComment='$YourSpendingComment',
    ResidentWants='$ResidentWants',
    AnyAssets='$AnyAssets',
    IncomeType='$IncomeType',
    CriminalHistory='$CriminalHistory',
    SubstanceDrug='$SubstanceDrug',
    NicotineUse='$NicotineUse',
    LegalHistory='$LegalHistory',
    HistoryAbuse='$HistoryAbuse',
    ADLs='$ADLs',
    PreferredActivities='$PreferredActivities',
    SignificantOthers='$SignificantOthers',
    HealthNutritional='$HealthNutritional',
    SpiritualCultural='$SpiritualCultural',
    Education='$Education',
    VocationalWork='$VocationalWork',
    DischargePlanning='$DischargePlanning',
    PreferreddActivities='$PreferreddActivities',
    Objectives='$Objectives',
    Client='$Client',
    ClientDate='$ClientDate',
    ClinicalOversight='$ClinicalOversight',
    ClinicalOversightDate='$ClinicalOversightDate'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update intake assessment Successefully';     
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
                                                                    <a href="intakeassessment.php"><button class="btn btn-success">Go to intake assessment page</button></a>
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
                                                                  <a href="intakeassessment.php"><button class="btn btn-success">Go to intake assessment page</button></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updateintakeassessment'])) {
                                                    $ser_id=$_GET['updateintakeassessment'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM intakeassessment WHERE intakeassessment.id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <form action="" method="POST" >
                                                    <div class="form-group row">
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Intake Assessment</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident Name</label>
                                                            <input type="text" name="ResidentName" value="<?php echo $row['ResidentName']; ?>" class="form-control form-control-normal"
                                                            placeholder="" disable>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">DOB</label>
                                                            <input type="date" name="Dob" value="<?php echo $row['Dob']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">AHCCCS</label>
                                                            <input type="text" name="AHCCCS" value="<?php echo $row['AHCCCS']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Diagnosis</label>
                                                            <input type="text" name="Diagnosis" value="<?php echo $row['Diagnosis']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Admission Date</label>
                                                            <input type="date" name="AdmissionDate" value="<?php echo $row['AdmissionDate']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Social Security </label>
                                                            <input type="text" name="SocialSecurity" value="<?php echo $row['SocialSecurity']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Language</label>
                                                            <input type="text" name="Language" value="<?php echo $row['Language']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" name="DateBirth" value="<?php echo $row['DateBirth']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Ethnicity</label>
                                                            <input type="text" name="Ethnicity" value="<?php echo $row['Ethnicity']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Sex</label>
                                                            <select name="Sex" class="form-control form-control-normal" id="">
                                                                <option><?php echo $row['Sex']; ?></option>
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Religion</label>
                                                            <input type="text" name="Religion" value="<?php echo $row['Religion']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Insurance Information</label>
                                                            <textarea name="InsuranceInformation" class="form-control form-control-normal"><?php echo $row['InsuranceInformation']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <h5>Are there any PREARRANGED DIRECTIVES</h5>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">DNR</label> <br>
                                                            <input type="radio" name="DNR" value="yes"
                                                           placeholder=""> Yes
                                                            <input type="radio" name="DNR" value="no"
                                                           placeholder=""> Nes
                                                            <input type="radio" name="DNR" value="unkown"
                                                           placeholder=""> Unkown
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Comment</label>
                                                            <textarea name="DNRComment" class="form-control form-control-normal"><?php echo $row['DNRComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">ADVANCED DIRECTIVES</label> <br>
                                                            <input type="radio" name="ADVANCEDDIRECTIVES" value="yes"
                                                           placeholder=""> Yes
                                                            <input type="radio" name="ADVANCEDDIRECTIVES" value="no"
                                                           placeholder=""> Nes
                                                            <input type="radio" name="ADVANCEDDIRECTIVES" value="unkown"
                                                           placeholder=""> Unkown
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Comment</label>
                                                            <textarea name="ADVANCEDDIRECTIVESComment" class="form-control form-control-normal"><?php echo $row['ADVANCEDDIRECTIVESComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">WILL</label> <br>
                                                            <input type="radio" name="WILL" value="yes"
                                                           placeholder=""> Yes
                                                            <input type="radio" name="WILL" value="no"
                                                           placeholder=""> Nes
                                                            <input type="radio" name="WILL" value="unkown"
                                                           placeholder=""> Unkown
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Comment</label>
                                                            <textarea name="WILLComment" class="form-control form-control-normal"><?php echo $row['WILLComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">POA/LEGAL GUARDIAN</label> <br>
                                                            <input type="radio" name="POALEGAL" value="yes"
                                                           placeholder=""> Yes
                                                            <input type="radio" name="POALEGAL" value="no"
                                                           placeholder=""> Nes
                                                            <input type="radio" name="POALEGAL" value="unkown"
                                                           placeholder=""> Unkown
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Comment</label>
                                                            <textarea name="POALEGALComment" class="form-control form-control-normal"><?php echo $row['POALEGALComment']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <h5>REASONS FOR REFERRAL/RESIDENT NEEDS:</h5>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">1).Resident’s Expected Length of Stay:</label>
                                                            <textarea name="ResidentExpected" class="form-control form-control-normal"><?php echo $row['ResidentExpected']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">2).Clinical Team’s Expected Length of Stay:</label>
                                                            <textarea name="ClinicalTeam" class="form-control form-control-normal"><?php echo $row['ClinicalTeam']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12 row">
                                                            <div class="col-sm-12">
                                                                <label class="col-form-label">3). Strengths and Limitations:</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label">Strengths</label>
                                                                <textarea name="Strengths" class="form-control form-control-normal"><?php echo $row['Strengths']; ?></textarea>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label">Limitations</label>
                                                                <textarea name="Limitations" class="form-control form-control-normal"><?php echo $row['Limitations']; ?></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">4).Family/Others Involved in Treatment:</label>
                                                            <textarea name="FamilyOthers" class="form-control form-control-normal"><?php echo $row['FamilyOthers']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">5).Allergies:</label>
                                                            <textarea name="Allergies" class="form-control form-control-normal"><?php echo $row['Allergies']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <h5>REASONS FOR REFERRAL/RESIDENT NEEDS:</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row Refferral">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">AXIS</label>
                                                            <input type="text" name="Axis[]" value="<?php echo $row['Axis']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">CODE</label>
                                                            <input type="text" name="Code[]" value="<?php echo $row['Code']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">DIAGNOSIS</label>
                                                            <input type="text" name="DiagnosisMedical[]" value="<?php echo $row['DiagnosisMedical']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_refferral" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <h5>1).Medications:</h5>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row Medication">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">NAME</label>
                                                            <input type="text" name="MedicationName[]" value="<?php echo $row['MedicationName']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">DOSE</label>
                                                            <input type="text" name="MedicationDose[]" value="<?php echo $row['MedicationDose']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">FREQUENCY</label>
                                                            <input type="text" name="MedicationFrequency[]" value="<?php echo $row['MedicationFrequency']; ?>" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_medication" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">2). History of Non-Compliance with Medication/Treatment:</label>
                                                            <textarea name="HistoryNonCompliance" class="form-control form-control-normal"><?php echo $row['HistoryNonCompliance']; ?></textarea>
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">3). Present Status of Potential for violent Behaviors:</label>
                                                            <textarea name="PresentStatus" class="form-control form-control-normal"><?php echo $row['PresentStatus']; ?></textarea>
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">4). Medical Presentation, Symptoms, pending Medical:		Urgent or Emergent: </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Personal</label>
                                                            <input type="text" name="MedicalPresentationPersonal" value="<?php echo $row['MedicalPresentationPersonal']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Family HX:</label>
                                                            <input type="text" name="MedicalPresentationFamilyHX" value="<?php echo $row['MedicalPresentationFamilyHX']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Urgent or Emergent:</label>
                                                            <input type="text" name="MedicalPresentationUrgentEmergent" value="<?php echo $row['MedicalPresentationUrgentEmergent']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                       <div class="col-sm-12">
                                                            <label class="col-form-label">5). Psychiatric Presentation and Symptoms:			COT: </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Personal</label>
                                                            <input type="text" name="PsychiatricPresentationPersonal" value="<?php echo $row['PsychiatricPresentationPersonal']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Family HX:</label>
                                                            <input type="text" name="PsychiatricPresentationFamilyHX" value="<?php echo $row['PsychiatricPresentationFamilyHX']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">COT</label>
                                                            <input type="text" name="PsychiatricPresentationCOT" value="<?php echo $row['PsychiatricPresentationCOT']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">6). Risk Assessment:</label>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">History of suicide, plan or intent</label>
                                                            <textarea name="HistorySwicide" class="form-control form-control-normal"><?php echo $row['HistorySwicide']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">History of ideation</label>
                                                            <textarea name="HistoryIdeation" class="form-control form-control-normal"><?php echo $row['HistoryIdeation']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Current ideation</label>
                                                            <textarea name="CurrentIdeation" class="form-control form-control-normal"><?php echo $row['CurrentIdeation']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">History of harming others</label>
                                                            <textarea name="HistoryHarming" class="form-control form-control-normal"><?php echo $row['HistoryHarming']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">History of self-harming behaviors</label>
                                                            <textarea name="HistorySelfHarming" class="form-control form-control-normal"><?php echo $row['HistorySelfHarming']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Hospitalizations (When, Where, why)</label>
                                                            <textarea name="Hospitalizations" class="form-control form-control-normal"><?php echo $row['Hospitalizations']; ?></textarea>
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">INTAKE ASSESSMENT OF SKILLS: (Check what applies):</label>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Presents neat and Clean</label><br>
                                                            <input type="radio" name="PresentsNeat" value="yes"> Yes
                                                            <input type="radio" name="PresentsNeat" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Presents free from body odor</label><br>
                                                            <input type="radio" name="Presentsfree" value="yes"> Yes
                                                            <input type="radio" name="Presentsfree" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Wearing appropriate size</label><br>
                                                            <input type="radio" name="WearingAppropriate" value="yes"> Yes
                                                            <input type="radio" name="WearingAppropriate" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Dressed appropriate for occasion</label><br>
                                                            <input type="radio" name="DressedAppropriate" value="yes"> Yes
                                                            <input type="radio" name="DressedAppropriate" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Comments:  </label>
                                                            <input type="text" name="SkillsComment" value="<?php echo $row['SkillsComment']; ?>"  class="form-control form-control-normal">
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">INTAKE ASSESSMENT OF SKILLS CONTINUATION: (Check what applies):</label>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Do you believe it is important to take medications?</label><br>
                                                            <input type="radio" name="TakeMedications" value="yes"> Yes
                                                            <input type="radio" name="TakeMedications" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">What are they?</label><br>
                                                            <input type="text" name="TakeMedicationsComment" value="<?php echo $row['TakeMedicationsComment']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Are you aware of your Dx?</label><br>
                                                            <input type="radio" name="YourDx" value="yes"> Yes
                                                            <input type="radio" name="YourDx" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Describe</label><br>
                                                            <input type="text" name="YourDxComment" value="<?php echo $row['YourDxComment']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Are you able to recognize symptoms?</label><br>
                                                            <input type="radio" name="RecognizeSymptoms" value="yes"> Yes
                                                            <input type="radio" name="RecognizeSymptoms" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">What are they?</label><br>
                                                            <input type="text" name="RecognizeSymptomsComment" value="<?php echo $row['RecognizeSymptomsComment']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Do you use public transportation</label><br>
                                                            <input type="radio" name="PublicTransportation" value="yes"> Yes
                                                            <input type="radio" name="PublicTransportation" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Explain:</label><br>
                                                            <input type="text" name="PublicTransportationComment" value="<?php echo $row['PublicTransportationComment']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Do you know how to budget your spending?</label><br>
                                                            <input type="radio" name="YourSpending" value="yes"> Yes
                                                            <input type="radio" name="YourSpending" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Explain:</label><br>
                                                            <input type="text" name="YourSpendingComment" value="<?php echo $row['YourSpendingComment']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">SUPPORT SYSTEM/COMMUNITY RESOURCES:</label>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">1).Resident’s Wants and Needs:</label>
                                                            <textarea name="ResidentWants" class="form-control form-control-normal"><?php echo $row['ResidentWants']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">2).Are There any Assets: </label>
                                                            <textarea name="AnyAssets" class="form-control form-control-normal"><?php echo $row['AnyAssets']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">3).Income type, Amount, and payee Status (if known):</label>
                                                            <textarea name="IncomeType" class="form-control form-control-normal"><?php echo $row['IncomeType']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">4).Criminal History:</label>
                                                            <textarea name="CriminalHistory" class="form-control form-control-normal"><?php echo $row['CriminalHistory']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">5).Substance and Drug History:</label>
                                                            <textarea name="SubstanceDrug" class="form-control form-control-normal"><?php echo $row['SubstanceDrug']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">6).Nicotine Use:</label>
                                                            <textarea name="NicotineUse" class="form-control form-control-normal"><?php echo $row['NicotineUse']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">7).Legal History:  (Guardianship, Pending Litigation, etc) </label>
                                                            <textarea name="LegalHistory" class="form-control form-control-normal"><?php echo $row['LegalHistory']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">8).History of Abuse (victim/Perpetrator):  </label>
                                                            <textarea name="HistoryAbuse" class="form-control form-control-normal"><?php echo $row['HistoryAbuse']; ?></textarea>
                                                       </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">9). ADLs</label>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Alert"> Alert
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Inappropriate"> Inappropriate social norms
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Independent"> Independent all
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Responsive"> Responsive
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Disheveled"> Disheveled appearance
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Moderate"> Moderate assistance
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Confused"> Confused
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Ambulatory"> Non-Ambulatory
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Requires"> Requires prompting
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Verbal"> Non-Verbal
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Ambulatory"> Ambulatory w/ assistance
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Supervision"> Supervision
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Oriented"> Oriented x#
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Incontinent"> Incontinent of bowel
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Self"> Self-Dress
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Delusional"> Delusional
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Incontinent"> Incontinent of bladder
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Self"> Self-bathing/grooming
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Cooperative"> Cooperative
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Feeds"> Feeds self
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="toileting"> Self-toileting
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Wanders"> Wanders
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Prepares"> Prepares food independently
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Total"> Total Care
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Responsive"> Non-Responsive
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Prepares"> Prepares food with assistance
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Independent"> Independent chores
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">10).Preferred activities, community groups/support services/How do you spend your time:</label>>
                                                            <textarea name="PreferredActivities" class="form-control form-control-normal"><?php echo $row['PreferredActivities']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">11).Significant Others, Friends, Level of Support:</label>
                                                            <textarea name="SignificantOthers" class="form-control form-control-normal"><?php echo $row['SignificantOthers']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">12).Health/Nutritional needs/Food or Snack Preference/Restrictions:</label>
                                                            <textarea name="HealthNutritional" class="form-control form-control-normal"><?php echo $row['HealthNutritional']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">13).Spiritual/Cultural Needs Addressed:</label>
                                                            <textarea name="SpiritualCultural" class="form-control form-control-normal"><?php echo $row['SpiritualCultural']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">14).Education:</label>
                                                            <textarea name="Education" class="form-control form-control-normal"><?php echo $row['Education']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">15).Vocational/Work History:</label>
                                                            <textarea name="VocationalWork" class="form-control form-control-normal"><?php echo $row['VocationalWork']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">16).Discharge Planning:</label>
                                                            <textarea name="DischargePlanning" class="form-control form-control-normal"><?php echo $row['DischargePlanning']; ?></textarea>
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">TREATMENT/DISCHARGE PLANNING</label>
                                                            <textarea name="PreferreddActivities" class="form-control form-control-normal"><?php echo $row['PreferreddActivities']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">1). OBJECTIVES:</label>
                                                            <textarea name="Objectives" class="form-control form-control-normal"><?php echo $row['Objectives']; ?></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Client</label>
                                                            <input type="text" name="Client" value="<?php echo $row['Client']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="ClientDate" value="<?php echo $row['ClientDate']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Clinical Oversight/BHP</label>
                                                            <input type="text" name="ClinicalOversight" value="<?php echo $row['ClinicalOversight']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="ClinicalOversightDate" value="<?php echo $row['ClinicalOversightDate']; ?>" class="form-control form-control-normal">
                                                       </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updatintakeassessment" value="Add intake assessment"
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

<script>

$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_refferral'); //Add button selector
    var wrapper = $('.Refferral'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Axis</label><input type='text' name='Axis[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Code</label><input type='text' name='Code[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Diagnosis</label><input type='text' name='DiagnosisMedical[]' placeholder='Frequency of Treatment'  class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});

$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_medication'); //Add button selector
    var wrapper = $('.Medication'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Medication Name</label><input type='text' name='MedicationName[]' class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Medication Dose</label><input type='text' name='MedicationDose[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-4'><div class='form-group'><label class='control-label' for='title'>Medication Frequency</label><input type='text' name='MedicationFrequency[]' placeholder='Frequency of Treatment'  class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
    
</script>