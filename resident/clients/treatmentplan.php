<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addtreatmentplan'])){
    $Name=$_POST['Name'];
    $Dob=$_POST['Dob'];
    $Age=$_POST['Age'];
    $Sex=$_POST['Sex'];
    $PlacingAgency=$_POST['PlacingAgency'];
    $PlanType=$_POST['PlanType'];
    $AdmissionsDate=$_POST['AdmissionsDate'];
    $PlanDate=$_POST['PlanDate'];
    $ExpDate=$_POST['ExpDate'];
    $Diagnosis=$_POST['Diagnosis'];
    
    $PresentingIssues1=$_POST['PresentingIssues'];
    $PresentingIssues="";
     foreach($PresentingIssues1 as $PresentingIssues2)  
     {  
        $PresentingIssues .= $PresentingIssues2.",";  
     }

    $TreatmentGoals1=$_POST['TreatmentGoals'];
    $TreatmentGoals="";
     foreach($TreatmentGoals1 as $TreatmentGoals2)  
     {  
        $TreatmentGoals .= $TreatmentGoals2.",";  
     }

    $TreatmentMethods1=$_POST['TreatmentMethods'];
    $TreatmentMethods="";
     foreach($TreatmentMethods1 as $TreatmentMethods2)  
     {  
        $TreatmentMethods .= $TreatmentMethods2.",";  
     }

    $DateStablished1=$_POST['DateStablished'];
    $DateStablished="";
     foreach($DateStablished1 as $DateStablished2)  
     {  
        $DateStablished .= $DateStablished2.",";  
     }

    $ProjectedCompletionDate1=$_POST['ProjectedCompletionDate'];
    $ProjectedCompletionDate="";
     foreach($ProjectedCompletionDate1 as $ProjectedCompletionDate2)  
     {  
        $ProjectedCompletionDate .= $ProjectedCompletionDate2.",";  
     }

    $CurrentMeasure1=$_POST['CurrentMeasure'];
    $CurrentMeasure="";
     foreach($CurrentMeasure1 as $CurrentMeasure2)  
     {  
        $CurrentMeasure .= $CurrentMeasure2.",";  
     }
     
    $DesiredMeasure1=$_POST['DesiredMeasure'];
    $DesiredMeasure="";
     foreach($DesiredMeasure1 as $DesiredMeasure2)  
     {  
        $DesiredMeasure .= $DesiredMeasure2.",";  
     }

    $Outcome1=$_POST['Outcome'];
    $Outcome="";
     foreach($Outcome1 as $Outcome2)  
     {  
        $Outcome .= $Outcome2.",";  
     }

    $DischargePlanning=$_POST['DischargePlanning'];
    $CodeOne=$_POST['CodeOne'];
    $CodeTwo=$_POST['CodeTwo'];
    $CodeThree=$_POST['CodeThree'];
    $Agree=$_POST['Agree'];
    $BHP=$_POST['BHP'];
    $BHPDate=$_POST['BHPDate'];
    $ResidentName=$_POST['ResidentName'];
    $ResidentDate=$_POST['ResidentDate'];
    $BHT=$_POST['BHT'];
    $BHTDate=$_POST['BHTDate'];
    $sql=mysqli_query($conn,"INSERT INTO treatmentplan(Name,
    Dob,
    Age,
    Sex,    
    PlacingAgency,
    PlanType,
    AdmissionsDate,
    PlanDate,
    ExpDate,
    Diagnosis,
    PresentingIssues,
    TreatmentGoals,
    TreatmentMethods,
    DateStablished,
    ProjectedCompletionDate,
    CurrentMeasure,
    DesiredMeasure,
    Outcome,
    DischargePlanning,
    CodeOne,
    CodeTwo,
    CodeThree,
    Agree,
    BHP,
    BHPDate,
    ResidentName,
    ResidentDate,
    BHT,
    BHTDate,
    resident_id,
    user_id) VALUES ('$Name',
    '$Dob',
    '$Age',
    '$Sex',
    '$PlacingAgency',
    '$PlanType',
    '$AdmissionsDate',
    '$PlanDate',
    '$ExpDate',
    '$Diagnosis',
    '$PresentingIssues',
    '$TreatmentGoals',
    '$TreatmentMethods',
    '$DateStablished',
    '$ProjectedCompletionDate',
    '$CurrentMeasure',
    '$DesiredMeasure',
    '$Outcome',
    '$DischargePlanning',
    '$CodeOne',
    '$CodeTwo',
    '$CodeThree',
    '$Agree',
    '$BHP',
    '$BHPDate',
    '$ResidentName',
    '$ResidentDate',
    '$BHT',
    '$BHTDate',
    '$residentid',
    '$user_id')");
    if ($sql) {
        $successmessage .='Add Name Plan Successefully';	
    }
    else {
        $errormessage .= mysqli_error($conn);	    
    }    
}
if (isset($_POST['uploadfile'])){
       
    $target="../../fileuploaded/".basename($_FILES['filename']['name']);
    $file=$_FILES['filename']['name'];
    
    $fileName='residence';
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
                                    <h5>Treatment Plan</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Treatment Plan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Treatment Plan</a>
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
                                                            <label class="col-form-label">Name</label>
                                                            <input type="text" name="Name" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Dob</label>
                                                            <input type="date" name="Dob" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Age</label>
                                                            <input type="text" name="Age" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Sex</label>
                                                            <select name="Sex" class="form-control form-control-normal">
                                                                <option value="male">male</option>
                                                                <option value="female">female</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">PLACING AGENCY</label>
                                                            <input type="text" name="PlacingAgency" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">PLAN TYPE</label>
                                                            <input type="text" name="PlanType" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">ADMISSION DATE</label>
                                                            <input type="date" name="AdmissionsDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">PLAN DATE</label>
                                                            <input type="date" name="PlanDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">EXP DATE</label>
                                                            <input type="date" name="ExpDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Diagnosis</label>
                                                            <textarea name="Diagnosis" class="form-control form-control-normal" ></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row Issue">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Presenting Issues</label>
                                                            <input type="text" name="PresentingIssues[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Treatment Goals</label>
                                                            <input type="text" name="TreatmentGoals[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Treatment Methods</label>
                                                            <input type="text" name="TreatmentMethods[]" class="form-control form-control-normal"
                                                            placeholder=" Frequency of Treatment">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Date Stablished</label>
                                                            <input type="date" name="DateStablished[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Projected Completion Date</label>
                                                            <input type="text" name="ProjectedCompletionDate[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Current Measure</label>
                                                            <input type="text" name="CurrentMeasure[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Desired Measure</label>
                                                            <input type="text" name="DesiredMeasure[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Outcome</label>
                                                            <input type="text" name="Outcome[]" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_issue" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Discharge Planning</label>
                                                            <textarea name="DischargePlanning" class="form-control form-control-normal"></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h3>Outcome Codes:</h3>
                                                         </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Code 1 – Achieved. </label>
                                                            <input type="text" name="CodeOne" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Code  2 – Partially Achieved/Continue.</label>
                                                            <input type="text" name="CodeTwo" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Code  3 – Not achieved/Continue/Discontinue</label>
                                                            <input type="text" name="CodeThree" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">
                                                            <input type="checkbox" value="yes" name="Agree" 
                                                            placeholder=""> Yes, I agree with the types and levels of services included in my treatment plan.</label>
                                                            
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">
                                                            <input type="radio" value="no" name="Agree"
                                                            placeholder=""> No, I disagree with the types and/or levels of some or all the services included in my treatment plan.  By checking this box, I will receive and may appeal the treatment team’s decision to not include all types and/or levels of services that I requested. </label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">BHP</label>
                                                            <input type="text" name="BHP" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="BHPDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                                                            
                                                        <?php
                                                            if ($_GET['residentid']) {
                                                                $res=$_GET['residentid'];
                                                                $quer=mysqli_query($conn,"SELECT * FROM clients WHERE id=$res");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                  
                                                                ?>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident</label>
                                                            <input type="text" name="ResidentName" value="<?php echo $row['fullname']; ?>" class="form-control form-control-normal"
                                                            placeholder="" disable>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="ResidentDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <?php
                                                                }
                                                    } ?>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">BHT</label>
                                                            <input type="text" name="BHT" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="BHTDate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addtreatmentplan" value="Add Treatment Plan"
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
                                                                    <th>Name</th>
                                                                    <th>Dob</th>
                                                                    <th>Age</th>
                                                                    <th>Sex</th>
                                                                    <th>PlacingAgency</th>
                                                                    <th>PlanType</th>
                                                                    <th>AdmissionsDate</th>
                                                                    <th>PlanDate</th>
                                                                    <th>ExpDate</th>
                                                                    <th>Diagnosis</th>
                                                                    <th>PresentingIssues</th>
                                                                    <th>TreatmentGoals</th>
                                                                    <th>TreatmentMethods</th>
                                                                    <th>DateStablished</th>
                                                                    <th>ProjectedCompletionDate</th>
                                                                    <th>CurrentMeasure</th>
                                                                    <th>DesiredMeasure</th>
                                                                    <th>Outcome</th>
                                                                    <th>DischargePlanning</th>
                                                                    <th>CodeOne</th>
                                                                    <th>CodeTwo</th>
                                                                    <th>CodeThree</th>
                                                                    <th>Agree</th>
                                                                    <th>BHP</th>
                                                                    <th>BHPDate</th>
                                                                    <th>ResidentName</th>
                                                                    <th>ResidentDate</th>
                                                                    <th>BHT</th>
                                                                    <th>BHTDate</th>
                                                                    <th>Sign</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM treatmentplan WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['Name'] ; ?></td>
                                                                    <td><?php echo $row['Dob'] ; ?></td>
                                                                    <td><?php echo $row['Age'] ; ?></td>
                                                                    <td><?php echo $row['Sex'] ; ?></td>
                                                                    <td><?php echo $row['PlacingAgency'] ; ?></td>
                                                                    <td><?php echo $row['PlanType'] ; ?></td>
                                                                    <td><?php echo $row['AdmissionsDate'] ; ?></td>
                                                                    <td><?php echo $row['PlanDate'] ; ?></td>
                                                                    <td><?php echo $row['ExpDate'] ; ?></td>
                                                                    <td><?php echo $row['Diagnosis'] ; ?></td>
                                                                    <td><?php echo $row['PresentingIssues'] ; ?></td>
                                                                    <td><?php echo $row['TreatmentGoals'] ; ?></td>
                                                                    <td><?php echo $row['TreatmentMethods'] ; ?></td>
                                                                    <td><?php echo $row['DateStablished'] ; ?></td>
                                                                    <td><?php echo $row['ProjectedCompletionDate'] ; ?></td>
                                                                    <td><?php echo $row['CurrentMeasure'] ; ?></td>
                                                                    <td><?php echo $row['DesiredMeasure'] ; ?></td>
                                                                    <td><?php echo $row['Outcome'] ; ?></td>
                                                                    <td><?php echo $row['DischargePlanning'] ; ?></td>
                                                                    <td><?php echo $row['CodeOne'] ; ?></td>
                                                                    <td><?php echo $row['CodeTwo'] ; ?></td>
                                                                    <td><?php echo $row['CodeThree'] ; ?></td>
                                                                    <td><?php echo $row['Agree'] ; ?></td>
                                                                    <td><?php echo $row['BHP'] ; ?></td>
                                                                    <td><?php echo $row['BHPDate'] ; ?></td>
                                                                    <td><?php echo $row['ResidentName'] ; ?></td>
                                                                    <td><?php echo $row['ResidentDate'] ; ?></td>
                                                                    <td><?php echo $row['BHT'] ; ?></td>
                                                                    <td><?php echo $row['BHTDate'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="treatmentplansign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="printtreatmentplan.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?deltreatmentplan=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this confidentiality statement.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="treatmentplanupdate.php?updatetreatmentplan=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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
                                                                $quer=mysqli_query($conn,"SELECT * FROM  fileuploaded WHERE fileName='treatmentplan' AND user_id=$user_id");
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
    var addButton = $('.add_issue'); //Add button selector
    var wrapper = $('.Issue'); //Input field wrapper
    var fieldHTML = "<div class=''><div class='row'><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Presenting Issues</label><input type='text' name='PresentingIssues[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Treatment Goals</label><input type='text' name='TreatmentGoals[]'   class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Treatment Methods</label><input type='text' name='TreatmentMethods[]' placeholder='Frequency of Treatment'  class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Date Stablished</label><input type='date' name='DateStablished[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Projected Completion Date</label><input type='text' name='ProjectedCompletionDate[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Current Measure</label><input type='text' name='CurrentMeasure[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Desired Measure</label><input type='text' name='DesiredMeasure[]' class='form-control form-control-normal' /></div></div><div class='col-sm-3'><div class='form-group'><label class='control-label' for='title'>Outcome</label><input type='text' name='Outcome[]' class='form-control form-control-normal' /></div></div></div><a href='javascript:void(0);' class='remove_button'><img src='remov-icon.png' width='20'></a></div></div>"; //New input field html 
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