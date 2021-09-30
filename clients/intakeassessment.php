<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addintakeassessment'])){
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
    $sql=mysqli_query($conn,"INSERT INTO intakeassessment(
    ResidentName,
    Dob,
    AHCCCS,
    Diagnosis,
    AdmissionDate,
    SocialSecurity,
    Language,
    DateBirth,
    Ethnicity,
    Sex,
    Religion,
    InsuranceInformation,
    DNR,
    DNRComment,
    ADVANCEDDIRECTIVES,
    ADVANCEDDIRECTIVESComment,
    WILL,
    WILLComment,
    POALEGAL,
    POALEGALComment,
    ResidentExpected,
    ClinicalTeam,
    Strengths,
    Limitations,
    FamilyOthers,
    Allergies,
    Axis,
    Code,
    DiagnosisMedical,
    MedicationName,
    MedicationDose,
    MedicationFrequency,
    HistoryNonCompliance,
    PresentStatus,
    MedicalPresentationPersonal,
    MedicalPresentationFamilyHX,
    MedicalPresentationUrgentEmergent,
    PsychiatricPresentationPersonal,
    PsychiatricPresentationFamilyHX,
    PsychiatricPresentationCOT,
    HistorySwicide,
    HistoryIdeation,
    CurrentIdeation,
    HistoryHarming,
    HistorySelfHarming,
    Hospitalizations,
    PresentsNeat,
    Presentsfree,
    WearingAppropriate,
    DressedAppropriate,
    SkillsComment,
    TakeMedications,
    TakeMedicationsComment,
    YourDx,
    YourDxComment,
    RecognizeSymptoms,
    RecognizeSymptomsComment,
    PublicTransportation,
    PublicTransportationComment,
    YourSpending,
    YourSpendingComment,
    ResidentWants,
    AnyAssets,
    IncomeType,
    CriminalHistory,
    SubstanceDrug,
    NicotineUse,
    LegalHistory,
    HistoryAbuse,
    ADLs,
    PreferredActivities,
    SignificantOthers,
    HealthNutritional,
    SpiritualCultural,
    Education,
    VocationalWork,
    DischargePlanning,
    PreferreddActivities,
    Objectives,
    Client,
    ClientDate,
    ClinicalOversight,
    ClinicalOversightDate,
    resident_id,
    user_id) VALUES (
    '$ResidentName',
    '$Dob',
    '$AHCCCS',
    '$Diagnosis',
    '$AdmissionDate',
    '$SocialSecurity',
    '$Language',
    '$DateBirth',
    '$Ethnicity',
    '$Sex',
    '$Religion',
    '$InsuranceInformation',
    '$DNR',
    '$DNRComment',
    '$ADVANCEDDIRECTIVES',
    '$ADVANCEDDIRECTIVESComment',
    '$WILL',
    '$WILLComment',
    '$POALEGAL',
    '$POALEGALComment',
    '$ResidentExpected',
    '$ClinicalTeam',
    '$Strengths',
    '$Limitations',
    '$FamilyOthers',
    '$Allergies',
    '$Axis',
    '$Code',
    '$DiagnosisMedical',
    '$MedicationName',
    '$MedicationDose',
    '$MedicationFrequency',
    '$HistoryNonCompliance',
    '$PresentStatus',
    '$MedicalPresentationPersonal',
    '$MedicalPresentationFamilyHX',
    '$MedicalPresentationUrgentEmergent',
    '$PsychiatricPresentationPersonal',
    '$PsychiatricPresentationFamilyHX',
    '$PsychiatricPresentationCOT',
    '$HistorySwicide',
    '$HistoryIdeation',
    '$CurrentIdeation',
    '$HistoryHarming',
    '$HistorySelfHarming',
    '$Hospitalizations',
    '$PresentsNeat',
    '$Presentsfree',
    '$WearingAppropriate',
    '$DressedAppropriate',
    '$SkillsComment',
    '$TakeMedications',
    '$TakeMedicationsComment',
    '$YourDx',
    '$YourDxComment',
    '$RecognizeSymptoms',
    '$RecognizeSymptomsComment',
    '$PublicTransportation',
    '$PublicTransportationComment',
    '$YourSpending',
    '$YourSpendingComment',
    '$ResidentWants',
    '$AnyAssets',
    '$IncomeType',
    '$CriminalHistory',
    '$SubstanceDrug',
    '$NicotineUse',
    '$LegalHistory',
    '$HistoryAbuse',
    '$ADLs',
    '$PreferredActivities',
    '$SignificantOthers',
    '$HealthNutritional',
    '$SpiritualCultural',
    '$Education',
    '$VocationalWork',
    '$DischargePlanning',
    '$PreferreddActivities',
    '$Objectives',
    '$Client',
    '$ClientDate',
    '$ClinicalOversight',
    '$ClinicalOversightDate',
    '$residentid',
    '$user_id')");
    if ($sql) {
        $successmessage .='Add intake assessment Successefully';	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
    }    
}

if (isset($_POST['uploadfile'])){
       
    $target="../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='intakeassessment';
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
                                    <h5>Intake Assessment</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Intake assessment</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All intake assessment</a>
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
                                                        <h3>Intake Assessment</h3></label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident Name</label>
                                                            <input type="text" name="ResidentName" class="form-control form-control-normal"
                                                            placeholder="" disable>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">DOB</label>
                                                            <input type="date" name="Dob" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">AHCCCS</label>
                                                            <input type="text" name="AHCCCS" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Diagnosis</label>
                                                            <input type="text" name="Diagnosis" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Admission Date</label>
                                                            <input type="date" name="AdmissionDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Social Security </label>
                                                            <input type="text" name="SocialSecurity" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Language</label>
                                                            <input type="text" name="Language" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date of Birth</label>
                                                            <input type="date" name="DateBirth" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Ethnicity</label>
                                                            <input type="text" name="Ethnicity" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Sex</label>
                                                            <select name="Sex" class="form-control form-control-normal" id="">
                                                                <option>Male</option>
                                                                <option>Female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Religion</label>
                                                            <input type="text" name="Religion" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Insurance Information</label>
                                                            <textarea name="InsuranceInformation" class="form-control form-control-normal"></textarea>
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
                                                            <textarea name="DNRComment" class="form-control form-control-normal"></textarea>
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
                                                            <textarea name="ADVANCEDDIRECTIVESComment" class="form-control form-control-normal"></textarea>
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
                                                            <textarea name="WILLComment" class="form-control form-control-normal"></textarea>
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
                                                            <textarea name="POALEGALComment" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <h5>REASONS FOR REFERRAL/RESIDENT NEEDS:</h5>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">1).Resident’s Expected Length of Stay:</label>
                                                            <textarea name="ResidentExpected" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">2).Clinical Team’s Expected Length of Stay:</label>
                                                            <textarea name="ClinicalTeam" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12 row">
                                                            <div class="col-sm-12">
                                                                <label class="col-form-label">3). Strengths and Limitations:</label>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label">Strengths</label>
                                                                <textarea name="Strengths" class="form-control form-control-normal"></textarea>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <label class="col-form-label">Limitations</label>
                                                                <textarea name="Limitations" class="form-control form-control-normal"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">4).Family/Others Involved in Treatment:</label>
                                                            <textarea name="FamilyOthers" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">5).Allergies:</label>
                                                            <textarea name="Allergies" class="form-control form-control-normal"></textarea>
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
                                                            <input type="text" name="Axis[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">CODE</label>
                                                            <input type="text" name="Code[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">DIAGNOSIS</label>
                                                            <input type="text" name="DiagnosisMedical[]" class="form-control form-control-normal">
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
                                                            <input type="text" name="MedicationName[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">DOSE</label>
                                                            <input type="text" name="MedicationDose[]" class="form-control form-control-normal">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">FREQUENCY</label>
                                                            <input type="text" name="MedicationFrequency[]" class="form-control form-control-normal">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_medication" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">2). History of Non-Compliance with Medication/Treatment:</label>
                                                            <textarea name="HistoryNonCompliance" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">3). Present Status of Potential for violent Behaviors:</label>
                                                            <textarea name="PresentStatus" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">4). Medical Presentation, Symptoms, pending Medical:		Urgent or Emergent: </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Personal</label>
                                                            <input type="text" name="MedicalPresentationPersonal" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Family HX:</label>
                                                            <input type="text" name="MedicalPresentationFamilyHX" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Urgent or Emergent:</label>
                                                            <input type="text" name="MedicalPresentationUrgentEmergent" class="form-control form-control-normal">
                                                       </div>
                                                       <div class="col-sm-12">
                                                            <label class="col-form-label">5). Psychiatric Presentation and Symptoms:			COT: </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Personal</label>
                                                            <input type="text" name="PsychiatricPresentationPersonal" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Family HX:</label>
                                                            <input type="text" name="PsychiatricPresentationFamilyHX" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">COT</label>
                                                            <input type="text" name="PsychiatricPresentationCOT" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">6). Risk Assessment:</label>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">History of suicide, plan or intent</label>
                                                            <textarea name="HistorySwicide" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">History of ideation</label>
                                                            <textarea name="HistoryIdeation" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Current ideation</label>
                                                            <textarea name="CurrentIdeation" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">History of harming others</label>
                                                            <textarea name="HistoryHarming" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">History of self-harming behaviors</label>
                                                            <textarea name="HistorySelfHarming" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Hospitalizations (When, Where, why)</label>
                                                            <textarea name="Hospitalizations" class="form-control form-control-normal"></textarea>
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
                                                            <input type="text" name="SkillsComment" class="form-control form-control-normal">
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
                                                            <input type="text" name="TakeMedicationsComment" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Are you aware of your Dx?</label><br>
                                                            <input type="radio" name="YourDx" value="yes"> Yes
                                                            <input type="radio" name="YourDx" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Describe</label><br>
                                                            <input type="text" name="YourDxComment" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Are you able to recognize symptoms?</label><br>
                                                            <input type="radio" name="RecognizeSymptoms" value="yes"> Yes
                                                            <input type="radio" name="RecognizeSymptoms" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">What are they?</label><br>
                                                            <input type="text" name="RecognizeSymptomsComment" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Do you use public transportation</label><br>
                                                            <input type="radio" name="PublicTransportation" value="yes"> Yes
                                                            <input type="radio" name="PublicTransportation" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Explain:</label><br>
                                                            <input type="text" name="PublicTransportationComment" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Do you know how to budget your spending?</label><br>
                                                            <input type="radio" name="YourSpending" value="yes"> Yes
                                                            <input type="radio" name="YourSpending" value="no"> No
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Explain:</label><br>
                                                            <input type="text" name="YourSpendingComment" class="form-control form-control-normal">
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">SUPPORT SYSTEM/COMMUNITY RESOURCES:</label>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">1).Resident’s Wants and Needs:</label>
                                                            <input type="text" name="ResidentWants" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">2).Are There any Assets: </label>
                                                            <input type="text" name="AnyAssets" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">3).Income type, Amount, and payee Status (if known):</label>
                                                            <input type="text" name="IncomeType" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">4).Criminal History:</label>
                                                            <input type="text" name="CriminalHistory" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">5).Substance and Drug History:</label>
                                                            <input type="text" name="SubstanceDrug" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">6).Nicotine Use:</label>
                                                            <input type="text" name="NicotineUse" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">7).Legal History:  (Guardianship, Pending Litigation, etc) </label>
                                                            <input type="text" name="LegalHistory" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">8).History of Abuse (victim/Perpetrator):  </label>
                                                            <input type="text" name="HistoryAbuse" class="form-control form-control-normal">
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
                                                            <input type="checkbox" name="ADLs[]" value="bladder"> Incontinent of bladder
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="grooming"> Self-bathing/grooming
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
                                                            <input type="checkbox" name="ADLs[]" value="NonResponsive"> Non-Responsive
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="PreparesFood"> Prepares food with assistance
                                                       </div>
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" name="ADLs[]" value="Independentchores"> Independent chores
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">10).Preferred activities, community groups/support services/How do you spend your time:</label>>
                                                            <textarea name="PreferredActivities" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">11).Significant Others, Friends, Level of Support:</label>
                                                            <textarea name="SignificantOthers" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">12).Health/Nutritional needs/Food or Snack Preference/Restrictions:</label>
                                                            <textarea name="HealthNutritional" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">13).Spiritual/Cultural Needs Addressed:</label>
                                                            <textarea name="SpiritualCultural" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">14).Education:</label>
                                                            <textarea name="Education" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">15).Vocational/Work History:</label>
                                                            <textarea name="VocationalWork" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">16).Discharge Planning:</label>
                                                            <textarea name="DischargePlanning" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">TREATMENT/DISCHARGE PLANNING</label>
                                                            <textarea name="PreferreddActivities" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">1). OBJECTIVES:</label>
                                                            <textarea name="Objectives" class="form-control form-control-normal"></textarea>
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Client</label>
                                                            <input type="text" name="Client" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="ClientDate" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Clinical Oversight/BHP</label>
                                                            <input type="text" name="ClinicalOversight" class="form-control form-control-normal">
                                                       </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="ClinicalOversightDate" class="form-control form-control-normal">
                                                       </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addintakeassessment" value="Add Assessment"
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
                                                                    <th>ResidentName</th>
                                                                    <th>Dob</th>
                                                                    <th>AHCCCS</th>
                                                                    <th>Diagnosis</th>
                                                                    <th>AdmissionDate</th>
                                                                    <th>SocialSecurity</th>
                                                                    <th>Language</th>
                                                                    <th>DateBirth</th>
                                                                    <th>Ethnicity</th>
                                                                    <th>Sex</th>
                                                                    <th>Religion</th>
                                                                    <th>InsuranceInformation</th>
                                                                    <th>DNR</th>
                                                                    <th>DNRComment</th>
                                                                    <th>ADVANCEDDIRECTIVES</th>
                                                                    <th>ADVANCEDDIRECTIVESComment</th>
                                                                    <th>WILL</th>
                                                                    <th>WILLComment</th>
                                                                    <th>POALEGAL</th>
                                                                    <th>POALEGALComment</th>
                                                                    <th>ResidentExpected</th>
                                                                    <th>ClinicalTeam</th>
                                                                    <th>Strengths</th>
                                                                    <th>Limitations</th>
                                                                    <th>FamilyOthers</th>
                                                                    <th>Allergies</th>
                                                                    <th>Axis</th>
                                                                    <th>Code</th>
                                                                    <th>DiagnosisMedical</th>
                                                                    <th>MedicationName</th>
                                                                    <th>MedicationDose</th>
                                                                    <th>MedicationFrequency</th>
                                                                    <th>HistoryNonCompliance</th>
                                                                    <th>PresentStatus</th>
                                                                    <th>MedicalPresentationPersonal</th>
                                                                    <th>MedicalPresentationFamilyHX</th>
                                                                    <th>MedicalPresentationUrgentEmergent</th>
                                                                    <th>PsychiatricPresentationPersonal</th>
                                                                    <th>PsychiatricPresentationFamilyHX</th>
                                                                    <th>PsychiatricPresentationCOT</th>
                                                                    <th>HistorySwicide</th>
                                                                    <th>HistoryIdeation</th>
                                                                    <th>CurrentIdeation</th>
                                                                    <th>HistoryHarming</th>
                                                                    <th>HistorySelfHarming</th>
                                                                    <th>Hospitalizations</th>
                                                                    <th>PresentsNeat</th>
                                                                    <th>Presentsfree</th>
                                                                    <th>WearingAppropriate</th>
                                                                    <th>DressedAppropriate</th>
                                                                    <th>SkillsComment</th>
                                                                    <th>TakeMedications</th>
                                                                    <th>TakeMedicationsComment</th>
                                                                    <th>YourDx</th>
                                                                    <th>YourDxComment</th>
                                                                    <th>RecognizeSymptoms</th>
                                                                    <th>RecognizeSymptomsComment</th>
                                                                    <th>PublicTransportation</th>
                                                                    <th>PublicTransportationComment</th>
                                                                    <th>YourSpending</th>
                                                                    <th>YourSpendingComment</th>
                                                                    <th>ResidentWants</th>
                                                                    <th>AnyAssets</th>
                                                                    <th>IncomeType</th>
                                                                    <th>CriminalHistory</th>
                                                                    <th>SubstanceDrug</th>
                                                                    <th>NicotineUse</th>
                                                                    <th>LegalHistory</th>
                                                                    <th>HistoryAbuse</th>
                                                                    <th>ADLs</th>
                                                                    <th>PreferredActivities</th>
                                                                    <th>SignificantOthers</th>
                                                                    <th>HealthNutritional</th>
                                                                    <th>SpiritualCultural</th>
                                                                    <th>Education</th>
                                                                    <th>VocationalWork</th>
                                                                    <th>DischargePlanning</th>
                                                                    <th>PreferreddActivities</th>
                                                                    <th>Objectives</th>
                                                                    <th>Client</th>
                                                                    <th>ClientDate</th>
                                                                    <th>ClinicalOversight</th>
                                                                    <th>ClinicalOversightDate</th>
                                                                    <th>Sign</th>
                                                                    <th>Print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM intakeassessment WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['ResidentName'] ; ?></td>
                                                                    <td><?php echo $row['Dob'] ; ?></td>
                                                                    <td><?php echo $row['AHCCCS'] ; ?></td>
                                                                    <td><?php echo $row['Diagnosis'] ; ?></td>
                                                                    <td><?php echo $row['AdmissionDate'] ; ?></td>
                                                                    <td><?php echo $row['SocialSecurity'] ; ?></td>
                                                                    <td><?php echo $row['Language'] ; ?></td>
                                                                    <td><?php echo $row['DateBirth'] ; ?></td>
                                                                    <td><?php echo $row['Ethnicity'] ; ?></td>
                                                                    <td><?php echo $row['Sex'] ; ?></td>
                                                                    <td><?php echo $row['Religion'] ; ?></td>
                                                                    <td><?php echo $row['InsuranceInformation'] ; ?></td>
                                                                    <td><?php echo $row['DNR'] ; ?></td>
                                                                    <td><?php echo $row['DNRComment'] ; ?></td>
                                                                    <td><?php echo $row['ADVANCEDDIRECTIVES'] ; ?></td>
                                                                    <td><?php echo $row['ADVANCEDDIRECTIVESComment'] ; ?></td>
                                                                    <td><?php echo $row['WILL'] ; ?></td>
                                                                    <td><?php echo $row['WILLComment'] ; ?></td>
                                                                    <td><?php echo $row['POALEGAL'] ; ?></td>
                                                                    <td><?php echo $row['POALEGALComment'] ; ?></td>
                                                                    <td><?php echo $row['ResidentExpected'] ; ?></td>
                                                                    <td><?php echo $row['ClinicalTeam'] ; ?></td>
                                                                    <td><?php echo $row['Strengths'] ; ?></td>
                                                                    <td><?php echo $row['Limitations'] ; ?></td>
                                                                    <td><?php echo $row['FamilyOthers'] ; ?></td>
                                                                    <td><?php echo $row['Allergies'] ; ?></td>
                                                                    <td><?php echo $row['Axis'] ; ?></td>
                                                                    <td><?php echo $row['Code'] ; ?></td>
                                                                    <td><?php echo $row['DiagnosisMedical'] ; ?></td>
                                                                    <td><?php echo $row['MedicationName'] ; ?></td>
                                                                    <td><?php echo $row['MedicationDose'] ; ?></td>
                                                                    <td><?php echo $row['MedicationFrequency'] ; ?></td>
                                                                    <td><?php echo $row['HistoryNonCompliance'] ; ?></td>
                                                                    <td><?php echo $row['PresentStatus'] ; ?></td>
                                                                    <td><?php echo $row['MedicalPresentationPersonal'] ; ?></td>
                                                                    <td><?php echo $row['MedicalPresentationFamilyHX'] ; ?></td>
                                                                    <td><?php echo $row['MedicalPresentationUrgentEmergent'] ; ?></td>
                                                                    <td><?php echo $row['PsychiatricPresentationPersonal'] ; ?></td>
                                                                    <td><?php echo $row['PsychiatricPresentationFamilyHX'] ; ?></td>
                                                                    <td><?php echo $row['PsychiatricPresentationCOT'] ; ?></td>
                                                                    <td><?php echo $row['HistorySwicide'] ; ?></td>
                                                                    <td><?php echo $row['HistoryIdeation'] ; ?></td>
                                                                    <td><?php echo $row['CurrentIdeation'] ; ?></td>
                                                                    <td><?php echo $row['HistoryHarming'] ; ?></td>
                                                                    <td><?php echo $row['HistorySelfHarming'] ; ?></td>
                                                                    <td><?php echo $row['Hospitalizations'] ; ?></td>
                                                                    <td><?php echo $row['PresentsNeat'] ; ?></td>
                                                                    <td><?php echo $row['Presentsfree'] ; ?></td>
                                                                    <td><?php echo $row['WearingAppropriate'] ; ?></td>
                                                                    <td><?php echo $row['DressedAppropriate'] ; ?></td>
                                                                    <td><?php echo $row['SkillsComment'] ; ?></td>
                                                                    <td><?php echo $row['TakeMedications'] ; ?></td>
                                                                    <td><?php echo $row['TakeMedicationsComment'] ; ?></td>
                                                                    <td><?php echo $row['YourDx'] ; ?></td>
                                                                    <td><?php echo $row['YourDxComment'] ; ?></td>
                                                                    <td><?php echo $row['RecognizeSymptoms'] ; ?></td>
                                                                    <td><?php echo $row['RecognizeSymptomsComment'] ; ?></td>
                                                                    <td><?php echo $row['PublicTransportation'] ; ?></td>
                                                                    <td><?php echo $row['PublicTransportationComment'] ; ?></td>
                                                                    <td><?php echo $row['YourSpending'] ; ?></td>
                                                                    <td><?php echo $row['YourSpendingComment'] ; ?></td>
                                                                    <td><?php echo $row['ResidentWants'] ; ?></td>
                                                                    <td><?php echo $row['AnyAssets'] ; ?></td>
                                                                    <td><?php echo $row['IncomeType'] ; ?></td>
                                                                    <td><?php echo $row['CriminalHistory'] ; ?></td>
                                                                    <td><?php echo $row['SubstanceDrug'] ; ?></td>
                                                                    <td><?php echo $row['NicotineUse'] ; ?></td>
                                                                    <td><?php echo $row['LegalHistory'] ; ?></td>
                                                                    <td><?php echo $row['HistoryAbuse'] ; ?></td>
                                                                    <td><?php echo $row['ADLs'] ; ?></td>
                                                                    <td><?php echo $row['PreferredActivities'] ; ?></td>
                                                                    <td><?php echo $row['SignificantOthers'] ; ?></td>
                                                                    <td><?php echo $row['HealthNutritional'] ; ?></td>
                                                                    <td><?php echo $row['SpiritualCultural'] ; ?></td>
                                                                    <td><?php echo $row['Education'] ; ?></td>
                                                                    <td><?php echo $row['VocationalWork'] ; ?></td>
                                                                    <td><?php echo $row['DischargePlanning'] ; ?></td>
                                                                    <td><?php echo $row['PreferreddActivities'] ; ?></td>
                                                                    <td><?php echo $row['Objectives'] ; ?></td>
                                                                    <td><?php echo $row['Client'] ; ?></td>
                                                                    <td><?php echo $row['ClientDate'] ; ?></td>
                                                                    <td><?php echo $row['ClinicalOversight'] ; ?></td>
                                                                    <td><?php echo $row['ClinicalOversightDate'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="intakeassessmentsign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="printintakeassessment.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delintakeassessment=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this intake assessment.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="intakeassessmentupdate.php?updateintakeassessment=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='intakeassessment' AND user_id=$user_id");
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