<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
    
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

    $sql=mysqli_query($conn,"INSERT INTO orientationdocumentation VALUES ('','$ResidentName','$Date',
    '$GrievanceItemdate',
    '$GrievanceComment',
    '$GrievancePersonalinitial',
    '$GrievanceResidentinitial',
    '$ResidentrightItemdate',
    '$ResidentrightComment',
    '$ResidentrightPersonalinitial',
    '$ResidentrightResidentinitial',
    '$HomeprogramItemdate',
    '$HomeprogramComment',
    '$HomeprogramPersonalinitial',
    '$HomeprogramResidentinitial',
    '$BehaviorExpectationsItemdate',
    '$BehaviorExpectationsComment',
    '$BehaviorExpectationsPersonalinitial',
    '$BehaviorExpectationsResidentinitial',
    '$ConsentPhotographedItemdate',
    '$ConsentPhotographedComment',
    '$ConsentPhotographedPersonalinitial',
    '$ConsentPhotographedResidentinitial',
    '$HealthServicesItemdate',
    '$HealthServicesComment',
    '$HealthServicesPersonalinitial',
    '$HealthServicesResidentinitial',
    '$OrientationNeighborhoodItemdate',
    '$OrientationNeighborhoodComment',
    '$OrientationNeighborhoodPersonalinitial',
    '$OrientationNeighborhoodResidentinitial',
    '$ResidentPreferencesItemdate',
    '$ResidentPreferencesComment',
    '$ResidentPreferencesPersonalinitial',
    '$ResidentPreferencesResidentinitial',
    '$HouseGroupsItemdate',
    '$HouseGroupsComment',
    '$HouseGroupsPersonalinitial',
    '$HouseGroupsResidentinitial',
    '$FireSafetyItemdate',
    '$FireSafetyComment',
    '$FireSafetyPersonalinitial',
    '$FireSafetyResidentinitial',
    '$SelfAdministrationItemdate',
    '$SelfAdministrationComment',
    '$SelfAdministrationPersonalinitial',
    '$SelfAdministrationResidentinitial',
    '$HouseRoutineItemdate',
    '$HouseRoutineComment',
    '$HouseRoutinePersonalinitial',
    '$HouseRoutineResidentinitial',
    '$PersonnelResidentItemdate',
    '$PersonnelResidentComment',
    '$PersonnelResidentPersonalinitial',
    '$PersonnelResidentResidentinitial',
    '$TourAgencyItemdate',
    '$TourAgencyComment',
    '$TourAgencyPersonalinitial',
    '$TourAgencyResidentinitial',
    '$TreatmentPlanItemdate',
    '$TreatmentPlanComment',
    '$TreatmentPlanPersonalinitial',
    '$TreatmentPlanResidentinitial',
    '$DischargeCriteriaItemdate',
    '$DischargeCriteriaComment',
    '$DischargeCriteriaPersonalinitial','$DischargeCriteriaResidentinitial',
    '$user_id')");
    if ($sql) {
        $successmessage .='Add Orientation Documentation Successefully';    
    }
    else {
        $errormessage .=mysqli_error($conn);        
    }      

}
if (isset($_POST['uploadfile'])){
       
    $target="../../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='noticationfees';
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
                                    <h5>Orientation Documentation   </h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Orientation Documentation     </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Orientation Documentation    </a>
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
                                       <form action="" method="POST" enctype="multipart/form-data">
                                               <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Name</label>
                                                            <input type="text" name="ResidentName" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="Date" class="form-control form-control-normal"
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
                                                            <input type="date" name="GrievanceItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="GrievanceComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="GrievancePersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="GrievanceResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="ResidentrightItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="ResidentrightComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="ResidentrightPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="ResidentrightResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="HomeprogramItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="HomeprogramComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="HomeprogramPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="HomeprogramResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="BehaviorExpectationsItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="BehaviorExpectationsComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="BehaviorExpectationsPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="BehaviorExpectationsResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="ConsentPhotographedItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="ConsentPhotographedComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="ConsentPhotographedPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="ConsentPhotographedResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="HealthServicesItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="HealthServicesComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="HealthServicesPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="HealthServicesResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="OrientationNeighborhoodItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="OrientationNeighborhoodComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="OrientationNeighborhoodPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="OrientationNeighborhoodResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="ResidentPreferencesItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="ResidentPreferencesComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="ResidentPreferencesPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="ResidentPreferencesResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="HouseGroupsItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="HouseGroupsComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="HouseGroupsPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="HouseGroupsResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="FireSafetyItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="FireSafetyComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="FireSafetyPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="FireSafetyResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="SelfAdministrationItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="SelfAdministrationComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="SelfAdministrationPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="SelfAdministrationResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="HouseRoutineItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="HouseRoutineComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="HouseRoutinePersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="HouseRoutineResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="PersonnelResidentItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="PersonnelResidentComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="PersonnelResidentPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="PersonnelResidentResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="TourAgencyItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="TourAgencyComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="TourAgencyPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="TourAgencyResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="TreatmentPlanItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="TreatmentPlanComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="TreatmentPlanPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="TreatmentPlanResidentinitial" class="form-control form-control-normal"
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
                                                            <input type="date" name="DischargeCriteriaItemdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments </label>
                                                            <textarea name="DischargeCriteriaComment" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Personal Initials</label>
                                                            <input type="text" name="DischargeCriteriaPersonalinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Personal inittials">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Resident Initials</label>
                                                            <input type="text" name="DischargeCriteriaResidentinitial" class="form-control form-control-normal"
                                                            placeholder="Enter Resident inittials">
                                                        </div>
                                                    </div>
                                                    


                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="Add new"
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
                                                 <table id="zero_config" class="table table-striped table-bordered no-wrap table-hover" >
                                                    <thead>
                                                        <tr>
                                                        <th>#</th>
                                                      
                                                        <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Print</th>
                                                            
                                                            <th>Resident</th>
                                                            <th>Date</th>
                                                            <th>Grievance Item date</th>
                                                            <th>Grievance Comment</th>
                                                            <th>Grievance Personal initial</th>
                                                            <th>Grievance Resident initial</th>
                                                            <th>Resident right Item date</th>
                                                            <th>Resident right Comment</th>
                                                            <th>Resident right Personal initial</th>
                                                            <th>Grievance Resident initial</th>
                                                            <th>Home Program Item date</th>
                                                            <th>Home Program Comment</th>
                                                            <th>Home Program Personal Initial</th>
                                                            <th>Home Program Resident initial</th>
                                                            <th>Behavior Expectations Item date</th>
                                                            <th>Behavior Expectations Comment</th>
                                                            <th>Behavior Expectations Personal initial</th>
                                                            <th>Behavior Expectations Resident initial</th>
                                                            <th>Consent Photographed Item date</th>
                                                            <th>Consent Photographed Comment</th>
                                                            <th>Consent Photographed Personal initial</th>
                                                            <th>Consent Photographed Resident initial</th>
                                                            <th>Health Services Item date</th>
                                                            <th>Health Services Comment</th>
                                                            <th>Health Services Personal initial</th>
                                                            <th>Health Services Resident initial</th>
                                                            <th>Orientation Neighborhood Itemdate</th>
                                                            <th>Orientation Neighborhood Comment</th>
                                                            <th>Orientation Neighborhood Personal initial</th>
                                                            <th>Orientation Neighborhood Resident initial</th>
                                                            <th>Resident Preferences Item date</th>
                                                            <th>Resident Preferences Comment</th>
                                                            <th>Resident Preferences Personal initial</th>
                                                            <th>Resident Preferences Resident initial</th>
                                                            <th>TourAgency Item date</th>
                                                            <th>TourAgency Comment</th>
                                                            <th>TourAgency Personal initial</th>
                                                            <th>TourAgency Resident initial</th>
                                                            <th>TreatmentPlan Item date</th>
                                                            <th>TreatmentPlan Comment</th>
                                                            <th>TreatmentPlan Personal initial</th>
                                                            <th>TreatmentPlan Resident initial</th>
                                                            <th>DischargeCriteria Item date</th>
                                                            <th>DischargeCriteria Comment</th>
                                                            <th>DischargeCriteriaPersonal initial</th>
                                                            <th>DischargeCriteriaResidentinitial</th>
                                                          
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM orientationdocumentation");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>
                                                        <tr>
                                                        <td><?php echo $row['id'] ; ?></td>
                                                       
                                                        <td><a class="btn btn-danger"  href="delete.php?delorientation=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this document.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="orientationupdate.php?updateorientation=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-success"  href="printorientation.php?printorientation=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                            
                                                            <td><?php echo $row['ResidentName']; ?></td>
                                                            <td><?php echo $row['Date']; ?></td>
                                                            <td><?php echo $row['GrievanceItemdate']; ?></td>
                                                            <td><?php echo $row['GrievanceComment']; ?></td>
                                                            <td><?php echo $row['GrievancePersonalinitial']; ?></td>
                                                            <td><?php echo $row['GrievanceResidentinitial']; ?></td>
                                                            <td><?php echo $row['ResidentrightItemdate']; ?></td>
                                                            <td><?php echo $row['ResidentrightComment']; ?></td>
                                                            <td><?php echo $row['ResidentrightPersonalinitial']; ?></td>
                                                            <td><?php echo $row['ResidentrightResidentinitial']; ?></td>
                                                            <td><?php echo $row['HomeprogramItemdate']; ?></td>
                                                            <td><?php echo $row['HomeprogramComment']; ?></td>
                                                            <td><?php echo $row['HomeprogramPersonalinitial']; ?></td>
                                                            <td><?php echo $row['HomeprogramResidentinitial']; ?></td>
                                                            <td><?php echo $row['BehaviorExpectationsItemdate']; ?></td>
                                                            <td><?php echo $row['BehaviorExpectationsComment']; ?></td>
                                                            <td><?php echo $row['BehaviorExpectationsPersonalinitial']; ?></td>
                                                            <td><?php echo $row['BehaviorExpectationsResidentinitial']; ?></td>
                                                            <td><?php echo $row['ConsentPhotographedItemdate'] ; ?></td>
                                                            <td><?php echo $row['ConsentPhotographedComment'] ; ?></td>
                                                            <td><?php echo $row['ConsentPhotographedPersonalinitial'] ; ?></td>
                                                            <td><?php echo $row['ConsentPhotographedResidentinitial'] ; ?></td>
                                                            <td><?php echo $row['HealthServicesItemdate'] ; ?></td>
                                                            <td><?php echo $row['HealthServicesComment'] ; ?></td>
                                                            <td><?php echo $row['HealthServicesPersonalinitial'] ; ?></td>
                                                            <td><?php echo $row['HealthServicesResidentinitial'] ; ?></td>
                                                            <td><?php echo $row['OrientationNeighborhoodItemdate'] ; ?></td>
                                                            <td><?php echo $row['OrientationNeighborhoodComment'] ; ?></td>
                                                            <td><?php echo $row['OrientationNeighborhoodPersonalinitial'] ; ?></td>
                                                            <td><?php echo $row['OrientationNeighborhoodResidentinitial'] ; ?></td>
                                                            <td><?php echo $row['ResidentPreferencesItemdate']; ?></td>
                                                            <td><?php echo $row['ResidentPreferencesComment']; ?></td>
                                                            <td><?php echo $row['ResidentPreferencesPersonalinitial']; ?></td>
                                                            <td><?php echo $row['PersonnelResidentResidentinitial'] ; ?></td>
                                                            <td><?php echo $row['TourAgencyItemdate'] ; ?></td>
                                                            <td><?php echo $row['TourAgencyComment'] ; ?></td>
                                                            <td><?php echo $row['TourAgencyPersonalinitial'] ; ?></td>
                                                            <td><?php echo $row['TourAgencyResidentinitial'] ; ?></td>
                                                            <td><?php echo $row['TreatmentPlanItemdate'] ; ?></td>
                                                            <td><?php echo $row['TreatmentPlanComment'] ; ?></td>
                                                            <td><?php echo $row['TreatmentPlanPersonalinitial'] ; ?></td>
                                                            <td><?php echo $row['TreatmentPlanResidentinitial'] ; ?></td>
                                                            <td><?php echo $row['DischargeCriteriaItemdate'] ; ?></td>
                                                            <td><?php echo $row['DischargeCriteriaComment'] ; ?></td>
                                                            <td><?php echo $row['DischargeCriteriaPersonalinitial'] ; ?></td>
                                                            <td><?php echo $row['DischargeCriteriaResidentinitial'] ; ?></td>
                                                           
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='orientationdocumentation' AND user_id=$user_id");
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