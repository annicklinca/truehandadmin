<?php
 include 'nav.php';
 $user_id=$user_id;
 $rec_id=$_GET['updatetreatmentplan']; 
 if (isset($_POST['updattreatmentplan'])){
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
    $sql=mysqli_query($conn,"UPDATE treatmentplan SET 
    Name='$Name',
    Dob='$Dob',    
    Age='$Age',
    Sex='$Sex',
    PlacingAgency='$PlacingAgency',
    PlanType='$PlanType',
    AdmissionsDate='$AdmissionsDate',
    PlanDate='$PlanDate',
    ExpDate='$ExpDate',
    Diagnosis='$Diagnosis',
    PresentingIssues='$PresentingIssues',
    TreatmentGoals='$TreatmentGoals',
    TreatmentMethods='$TreatmentMethods',
    DateStablished='$DateStablished',
    ProjectedCompletionDate='$ProjectedCompletionDate',
    CurrentMeasure='$CurrentMeasure',
    DesiredMeasure='$DesiredMeasure',
    Outcome='$Outcome',
    DischargePlanning='$DischargePlanning',
    CodeOne='$CodeOne',
    CodeTwo='$CodeTwo',
    CodeThree='$CodeThree',
    Agree='$Agree',
    BHP='$BHP',
    BHPDate='$BHPDate',
    ResidentName='$ResidentName',
    ResidentDate='$ResidentDate',
    BHT='$BHT',
    BHTDate='$BHTDate'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update treatment plan Successefully';     
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
                                    <h5>Reporting abuse</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update reporting abuse</a>
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
                                                                    <a href="treatmentplan.php"><button class="btn btn-success">Go to treatment plan page</button></a>
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
                                                                  <a href="treatmentplan.php"><button class="btn btn-success">Go to autho page</button></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                          <?php
                                                if (isset($_GET['updatetreatmentplan'])) {
                                                    $ser_id=$_GET['updatetreatmentplan'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM treatmentplan WHERE treatmentplan.id=$ser_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <form action="" method="POST" >
                                                    <div class="form-group row">
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Name</label>
                                                            <input type="text" name="Name" value="<?php echo $row['Name']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Dob</label>
                                                            <input type="date" name="Dob" value="<?php echo $row['Dob']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Age</label>
                                                            <input type="text" name="Age" value="<?php echo $row['Age']; ?>" class="form-control form-control-normal"
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
                                                            <input type="text" name="PlacingAgency" value="<?php echo $row['PlacingAgency']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">PLAN TYPE</label>
                                                            <input type="text" name="PlanType" value="<?php echo $row['PlanType']; ?>"  class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">ADMISSION DATE</label>
                                                            <input type="date" name="AdmissionsDate" value="<?php echo $row['AdmissionsDate']; ?>"  class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">PLAN DATE</label>
                                                            <input type="date" name="PlanDate" value="<?php echo $row['PlanDate']; ?>"  class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">EXP DATE</label>
                                                            <input type="date" name="ExpDate" value="<?php echo $row['ExpDate']; ?>"  class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class="col-form-label">Diagnosis</label>
                                                            <textarea name="Diagnosis" class="form-control form-control-normal" ><?php echo $row['Diagnosis']; ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row Issue">
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Presenting Issues</label>
                                                            <input type="text" name="PresentingIssues[]" value="<?php echo $row['PresentingIssues']; ?>"  class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Treatment Goals</label>
                                                            <input type="text" name="TreatmentGoals[]" value="<?php echo $row['TreatmentGoals']; ?>"  class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Treatment Methods</label>
                                                            <input type="text" name="TreatmentMethods[]" value="<?php echo $row['TreatmentMethods']; ?>"  class="form-control form-control-normal"
                                                            placeholder=" Frequency of Treatment">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Date Stablished</label>
                                                            <input type="date" name="DateStablished[]" value="<?php echo $row['DateStablished']; ?>"  class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Projected Completion Date</label>
                                                            <input type="text" name="ProjectedCompletionDate[]"  value="<?php echo $row['ProjectedCompletionDate']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Current Measure</label>
                                                            <input type="text" name="CurrentMeasure[]"  value="<?php echo $row['CurrentMeasure']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Desired Measure</label>
                                                            <input type="text" name="DesiredMeasure[]"  value="<?php echo $row['DesiredMeasure']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">Outcome</label>
                                                            <input type="text" name="Outcome[]"  value="<?php echo $row['Outcome']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <a href="javascript:void(0);" class="add_issue" title="Add field"><img src="add-icon.png" width="20"></a>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Discharge Planning</label>
                                                            <textarea name="DischargePlanning" class="form-control form-control-normal"><?php echo $row['DischargePlanning']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <h3>Outcome Codes:</h3>
                                                         </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Code 1 – Achieved. </label>
                                                            <input type="text" name="CodeOne"  value="<?php echo $row['CodeOne']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Code  2 – Partially Achieved/Continue.</label>
                                                            <input type="text" name="CodeTwo"  value="<?php echo $row['CodeTwo']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class="col-form-label">Code  3 – Not achieved/Continue/Discontinue</label>
                                                            <input type="text" name="CodeThree"  value="<?php echo $row['CodeThree']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">
                                                            <input type="checkbox" value="yes" name="Agree" 
                                                            placeholder="" value="<?php echo $row['Agree']; ?>" >> Yes, I agree with the types and levels of services included in my treatment plan.</label>
                                                            
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">
                                                            <input type="radio" value="no" name="Agree"
                                                            placeholder=""   value="<?php echo $row['Agree']; ?>" > No, I disagree with the types and/or levels of some or all the services included in my treatment plan.  By checking this box, I will receive and may appeal the treatment team’s decision to not include all types and/or levels of services that I requested. </label>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">BHP</label>
                                                            <input type="text" name="BHP" class="form-control form-control-normal"
                                                            placeholder=""   value="<?php echo $row['BHP']; ?>" >
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="BHPDate"   value="<?php echo $row['BHPDate']; ?>"  class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                                      
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Resident</label>
                                                            <input type="text" name="ResidentName" value="<?php echo $row['ResidentName']; ?>" class="form-control form-control-normal"
                                                            placeholder="" disable>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="ResidentDate" value="<?php echo $row['ResidentDate']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">BHT</label>
                                                            <input type="text" name="BHT" value="<?php echo $row['BHT']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Date</label>
                                                            <input type="date" name="BHTDate" value="<?php echo $row['BHTDate']; ?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="updattreatmentplan" value="Update Treatment Plan"
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