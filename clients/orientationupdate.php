<?php
include 'nav.php';
$user_id=$user_id;
$or_id=$_GET['updateorientation'];
if (isset($_POST['update'])){
    
    $ResidentName=$_POST['ResidentName'];
    $Date=$_POST['Date'];

    $GrievanceItemdate=$_POST['GrievanceItemdate'];
    $GrievanceComment=addslashes($_POST['GrievanceComment']);
    $GrievancePersonalinitial=addslashes($_POST['GrievancePersonalinitial']);
    $GrievanceResidentinitial=addslashes($_POST['GrievanceResidentinitial']);

    $ResidentrightItemdate=$_POST['ResidentrightItemdate'];
    $ResidentrightComment=addslashes($_POST['ResidentrightComment']);
    $ResidentrightPersonalinitial=$_POST['ResidentrightPersonalinitial'];
    $ResidentrightResidentinitial=$_POST['ResidentrightResidentinitial'];

    $HomeprogramItemdate=$_POST['HomeprogramItemdate'];
    $HomeprogramComment=$_POST['HomeprogramComment'];
    $HomeprogramPersonalinitial=$_POST['HomeprogramPersonalinitial'];
    $HomeprogramResidentinitial=$_POST['HomeprogramResidentinitial'];

    $BehaviorExpectationsItemdate=$_POST['BehaviorExpectationsItemdate'];    
    $BehaviorExpectationsComment=$_POST['BehaviorExpectationsComment'];
    $BehaviorExpectationsPersonalinitial=$_POST['BehaviorExpectationsPersonalinitial'];
    $BehaviorExpectationsResidentinitial=$_POST['BehaviorExpectationsResidentinitial'];
    
    $ConsentPhotographedItemdate=$_POST['ConsentPhotographedItemdate'];
    $ConsentPhotographedComment=$_POST['ConsentPhotographedComment'];
    $ConsentPhotographedPersonalinitial=$_POST['ConsentPhotographedPersonalinitial'];
    $ConsentPhotographedResidentinitial=$_POST['ConsentPhotographedResidentinitial'];
    
    $HealthServicesItemdate=$_POST['HealthServicesItemdate'];
    $HealthServicesComment=$_POST['HealthServicesComment'];
    $HealthServicesPersonalinitial=$_POST['HealthServicesPersonalinitial'];
    $HealthServicesResidentinitial=$_POST['HealthServicesResidentinitial'];
    
    $OrientationNeighborhoodItemdate=$_POST['OrientationNeighborhoodItemdate'];
    $OrientationNeighborhoodComment=$_POST['OrientationNeighborhoodComment'];
    $OrientationNeighborhoodPersonalinitial=$_POST['OrientationNeighborhoodPersonalinitial'];
    $OrientationNeighborhoodResidentinitial=$_POST['OrientationNeighborhoodResidentinitial'];
    
    $ResidentPreferencesItemdate=$_POST['ResidentPreferencesItemdate'];
    $ResidentPreferencesComment=addslashes($_POST['ResidentPreferencesComment']);
    $ResidentPreferencesPersonalinitial=addslashes($_POST['ResidentPreferencesPersonalinitial']);
    $ResidentPreferencesResidentinitial=$_POST['ResidentPreferencesResidentinitial'];

    
    $HouseGroupsItemdate=$_POST['HouseGroupsItemdate'];
    $HouseGroupsComment=$_POST['HouseGroupsComment'];
    $HouseGroupsPersonalinitial=$_POST['HouseGroupsPersonalinitial'];
    $HouseGroupsResidentinitial=$_POST['HouseGroupsResidentinitial'];

    
    $FireSafetyItemdate=$_POST['FireSafetyItemdate'];
    $FireSafetyComment=$_POST['FireSafetyComment'];
    $FireSafetyPersonalinitial=$_POST['FireSafetyPersonalinitial'];
    $FireSafetyResidentinitial=$_POST['FireSafetyResidentinitial'];

    
    $SelfAdministrationItemdate=$_POST['SelfAdministrationItemdate'];
    $SelfAdministrationComment=$_POST['SelfAdministrationComment'];
    $SelfAdministrationPersonalinitial=$_POST['SelfAdministrationPersonalinitial'];
    $SelfAdministrationResidentinitial=$_POST['SelfAdministrationResidentinitial'];

    
    $HouseRoutineItemdate=$_POST['HouseRoutineItemdate'];
    $HouseRoutineComment=$_POST['HouseRoutineComment'];
    $HouseRoutinePersonalinitial=$_POST['HouseRoutinePersonalinitial'];
    $HouseRoutineResidentinitial=$_POST['HouseRoutineResidentinitial'];

    
    $PersonnelResidentItemdate=$_POST['PersonnelResidentItemdate'];
    $PersonnelResidentComment=$_POST['PersonnelResidentComment'];
    $PersonnelResidentPersonalinitial=$_POST['PersonnelResidentPersonalinitial'];
    $PersonnelResidentResidentinitial=$_POST['PersonnelResidentResidentinitial'];

    
    $TourAgencyItemdate=$_POST['TourAgencyItemdate'];
    $TourAgencyComment=$_POST['TourAgencyComment'];
    $TourAgencyPersonalinitial=$_POST['TourAgencyPersonalinitial'];
    $TourAgencyResidentinitial=$_POST['TourAgencyResidentinitial'];

    
    $TreatmentPlanItemdate=$_POST['TreatmentPlanItemdate'];
    $TreatmentPlanComment=$_POST['TreatmentPlanComment'];
    $TreatmentPlanPersonalinitial=$_POST['TreatmentPlanPersonalinitial'];
    $TreatmentPlanResidentinitial=$_POST['TreatmentPlanResidentinitial'];

    
    $DischargeCriteriaItemdate=$_POST['DischargeCriteriaItemdate'];
    $DischargeCriteriaComment=$_POST['DischargeCriteriaComment'];
    $DischargeCriteriaPersonalinitial=$_POST['DischargeCriteriaPersonalinitial'];
    $DischargeCriteriaResidentinitial=$_POST['DischargeCriteriaResidentinitial'];

   $sql=mysqli_query($conn,"UPDATE orientationdocumentation SET 
    
    ResidentName='$ResidentName',
    Date='$Date',
    GrievanceItemdate='$GrievanceItemdate',
    GrievanceComment='$GrievanceComment',
    GrievancePersonalinitial='$GrievancePersonalinitial',
    GrievanceResidentinitial='$GrievanceResidentinitial',
    ResidentrightItemdate='$ResidentrightItemdate',
    ResidentrightComment='$ResidentrightComment',
    ResidentrightPersonalinitial='$ResidentrightPersonalinitial',
    ResidentrightResidentinitial='$ResidentrightResidentinitial',
    HomeprogramItemdate='$HomeprogramItemdate',
    HomeprogramComment='$HomeprogramComment',
    HomeprogramPersonalinitial='$HomeprogramPersonalinitial',
    HomeprogramResidentinitial='$HomeprogramResidentinitial',
    BehaviorExpectationsItemdate='$BehaviorExpectationsItemdate',
    BehaviorExpectationsComment='$BehaviorExpectationsComment',
    BehaviorExpectationsPersonalinitial='$BehaviorExpectationsPersonalinitial',
    BehaviorExpectationsResidentinitial='$BehaviorExpectationsResidentinitial',
    ConsentPhotographedItemdate='$ConsentPhotographedItemdate',
    ConsentPhotographedComment='$ConsentPhotographedComment',
    ConsentPhotographedPersonalinitial='$ConsentPhotographedPersonalinitial',
    ConsentPhotographedResidentinitial='$ConsentPhotographedResidentinitial',
    HealthServicesItemdate='$HealthServicesItemdate',
    HealthServicesComment='$HealthServicesComment',
    HealthServicesPersonalinitial='$HealthServicesPersonalinitial',
    HealthServicesResidentinitial='$HealthServicesResidentinitial',
    OrientationNeighborhoodItemdate='$OrientationNeighborhoodItemdate',
    OrientationNeighborhoodComment='$OrientationNeighborhoodComment',
    OrientationNeighborhoodPersonalinitial='$OrientationNeighborhoodPersonalinitial',
    OrientationNeighborhoodResidentinitial='$OrientationNeighborhoodResidentinitial',
    ResidentPreferencesItemdate='$ResidentPreferencesItemdate',
    ResidentPreferencesComment='$ResidentPreferencesComment',
    ResidentPreferencesPersonalinitial='$ResidentPreferencesPersonalinitial',
    ResidentPreferencesResidentinitial='$ResidentPreferencesResidentinitial',
    HouseGroupsItemdate='$HouseGroupsItemdate',
    HouseGroupsComment='$HouseGroupsComment',
    HouseGroupsPersonalinitial='$HouseGroupsPersonalinitial',
    HouseGroupsResidentinitial='$HouseGroupsResidentinitial',
    FireSafetyItemdate='$FireSafetyItemdate',
    FireSafetyComment='$FireSafetyComment',
    FireSafetyPersonalinitial='$FireSafetyPersonalinitial',
    FireSafetyResidentinitial='$FireSafetyResidentinitial',
    SelfAdministrationItemdate='$SelfAdministrationItemdate',
    SelfAdministrationComment='$SelfAdministrationComment',
    SelfAdministrationPersonalinitial='$SelfAdministrationPersonalinitial',
    SelfAdministrationResidentinitial='$SelfAdministrationResidentinitial',
    HouseRoutineItemdate='$HouseRoutineItemdate',
    HouseRoutineComment='$HouseRoutineComment',
    HouseRoutinePersonalinitial='$HouseRoutinePersonalinitial',
    HouseRoutineResidentinitial='$HouseRoutineResidentinitial',
    PersonnelResidentItemdate='$PersonnelResidentItemdate',
    PersonnelResidentComment='$PersonnelResidentComment',
    PersonnelResidentPersonalinitial='$PersonnelResidentPersonalinitial',
    PersonnelResidentResidentinitial='$PersonnelResidentResidentinitial',
    TourAgencyItemdate='$TourAgencyItemdate',
    TourAgencyComment='$TourAgencyComment',
    TourAgencyPersonalinitial='$TourAgencyPersonalinitial',
    TourAgencyResidentinitial='$TourAgencyResidentinitial',
    TreatmentPlanItemdate='$TreatmentPlanItemdate',
    TreatmentPlanComment='$TreatmentPlanComment',
    TreatmentPlanPersonalinitial='$TreatmentPlanPersonalinitial',
    TreatmentPlanResidentinitial='$TreatmentPlanResidentinitial',
    DischargeCriteriaItemdate='$DischargeCriteriaItemdate',
    DischargeCriteriaComment='$DischargeCriteriaComment',
    DischargeCriteriaPersonalinitial='$DischargeCriteriaPersonalinitial',
    DischargeCriteriaResidentinitial='$DischargeCriteriaResidentinitial'    

 WHERE id=$or_id;");
    if ($sql) {
        $successmessage .='Update Orientation Documentation Successefully';
            
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
                                    <h5>Orientation Documentation   </h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Orientation Documentation     </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Orientation Documentation    </a>
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
                                       <form action="" method="POST" enctype="multipart/form-data">
                                           <?php
                                                if (isset($_GET['updateorientation'])) {
                                                    $orient_id=$_GET['updateorientation'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM orientationdocumentation WHERE orientationdocumentation.id=$orient_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                               <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Name</label>
                                                            <input type="text" value="<?php echo $row['ResidentName']; ?>" name="ResidentName" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['Date']; ?>" name="Date" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Grievance Form</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['GrievanceItemdate']; ?>" name="GrievanceItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="GrievanceComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['GrievanceComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['GrievancePersonalinitial']; ?>" name="GrievancePersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['GrievanceResidentinitial']; ?>" name="GrievanceResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Rights</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['ResidentrightItemdate']; ?>" name="ResidentrightItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="ResidentrightComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['ResidentrightComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['ResidentrightPersonalinitial']; ?>" name="ResidentrightPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['ResidentrightResidentinitial']; ?>" name="ResidentrightResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>House & Program Rules</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['HomeprogramItemdate']; ?>" name="HomeprogramItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="HomeprogramComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['HomeprogramComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['HomeprogramPersonalinitial']; ?>" name="HomeprogramPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['HomeprogramResidentinitial']; ?>" name="HomeprogramResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Behavior Expectations</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['BehaviorExpectationsItemdate']; ?>" name="BehaviorExpectationsItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="BehaviorExpectationsComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['BehaviorExpectationsComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['BehaviorExpectationsPersonalinitial']; ?>" name="BehaviorExpectationsPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['BehaviorExpectationsResidentinitial']; ?>" name="BehaviorExpectationsResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Consent to be Photographed </h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['ConsentPhotographedItemdate']; ?>" name="ConsentPhotographedItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="ConsentPhotographedComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['ConsentPhotographedComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['ConsentPhotographedPersonalinitial']; ?>" name="ConsentPhotographedPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['ConsentPhotographedResidentinitial']; ?>" name="ConsentPhotographedResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Health Services</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['HealthServicesItemdate']; ?>" name="HealthServicesItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="HealthServicesComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['HealthServicesComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['HealthServicesPersonalinitial']; ?>" name="HealthServicesPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['HealthServicesResidentinitial']; ?>" name="HealthServicesResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Orientation to the Neighborhood if not contraindicated</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['OrientationNeighborhoodItemdate']; ?>"  name="OrientationNeighborhoodItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="OrientationNeighborhoodComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['OrientationNeighborhoodComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['OrientationNeighborhoodPersonalinitial']; ?>"  name="OrientationNeighborhoodPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['OrientationNeighborhoodResidentinitial']; ?>"  name="OrientationNeighborhoodResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Preferences</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['ResidentPreferencesItemdate']; ?>" name="ResidentPreferencesItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="ResidentPreferencesComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['ResidentPreferencesComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['ResidentPreferencesPersonalinitial']; ?>" name="ResidentPreferencesPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['ResidentPreferencesResidentinitial']; ?>" name="ResidentPreferencesResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>House Groups</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['HouseGroupsItemdate']; ?>" name="HouseGroupsItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="HouseGroupsComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['HouseGroupsComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['HouseGroupsPersonalinitial']; ?>" name="HouseGroupsPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['HouseGroupsResidentinitial']; ?>" name="HouseGroupsResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Fire & Safety Evacuation Plan</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['FireSafetyItemdate']; ?>" name="FireSafetyItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="FireSafetyComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['FireSafetyComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['FireSafetyPersonalinitial']; ?>" name="FireSafetyPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text"value="<?php echo $row['FireSafetyResidentinitial']; ?>" name="FireSafetyResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Self-administration of Medication</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['SelfAdministrationItemdate']; ?>" name="SelfAdministrationItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="SelfAdministrationComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['SelfAdministrationComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['SelfAdministrationPersonalinitial']; ?>" name="SelfAdministrationPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['SelfAdministrationResidentinitial']; ?>" name="SelfAdministrationResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>House Routine & Activities</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['HouseRoutineItemdate']; ?>" name="HouseRoutineItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="HouseRoutineComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['HouseRoutineComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['HouseRoutinePersonalinitial']; ?>" name="HouseRoutinePersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['HouseRoutineResidentinitial']; ?>" name="HouseRoutineResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Personnel & Resident Introduction</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['PersonnelResidentItemdate']; ?>" name="PersonnelResidentItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="PersonnelResidentComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['PersonnelResidentComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['PersonnelResidentPersonalinitial']; ?>" name="PersonnelResidentPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['PersonnelResidentResidentinitial']; ?>" name="PersonnelResidentResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Tour of the Agency </h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['TourAgencyItemdate']; ?>" name="TourAgencyItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="TourAgencyComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['TourAgencyComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['TourAgencyPersonalinitial']; ?>" name="TourAgencyPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['TourAgencyResidentinitial']; ?>" name="TourAgencyResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Treatment Plan Process</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['TreatmentPlanItemdate']; ?>" name="TreatmentPlanItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="TreatmentPlanComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['TreatmentPlanComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['TreatmentPlanPersonalinitial']; ?>" name="TreatmentPlanPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['TreatmentPlanResidentinitial']; ?>" name="TreatmentPlanResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Discharge criteria & procedures</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['DischargeCriteriaItemdate']; ?>" name="DischargeCriteriaItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="DischargeCriteriaComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $row['DischargeCriteriaComment']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" value="<?php echo $row['DischargeCriteriaPersonalinitial']; ?>" name="DischargeCriteriaPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" value="<?php echo $row['DischargeCriteriaResidentinitial']; ?>" name="DischargeCriteriaResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Facesheet"
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