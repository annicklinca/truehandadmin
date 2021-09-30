<?php
include 'nav.php';
$user_id=$user_id;

if (isset($_POST['submit'])){  
    $employeename=$_POST['employeename'];
    $date=$_POST['date'];
    $firstdate=$_POST['firstdate'];
    $personelead=$_POST['personelead'];
    $personelcomments=$_POST['personelcomments'];
    $personelinitials=$_POST['personelinitials'];
    $residentlead=$_POST['residentlead'];
    $residentcomments=$_POST['residentcomments'];
    $residentinitials=$_POST['residentinitials'];
    $leadfile=$_POST['leadfile'];
    $filecomments=$_POST['filecomments'];
    $fileinitials=$_POST['fileinitials'];
    $joblead=$_POST['joblead'];
    $jobcomments=$_POST['jobcomments'];
    $jobinitials=$_POST['jobinitials'];
    $leadcode=$_POST['leadcode'];
    $codecomments=$_POST['codecomments'];
    $codeinitials=$_POST['codeinitials'];
    $employeelead=$_POST['employeelead'];
    $employeecomments=$_POST['employeecomments'];
    $employeeinitials=$_POST['employeeinitials'];
    $pathlead=$_POST['pathlead'];
    $pathcomments=$_POST['pathcomments'];
    $employeepath=$_POST['employeepath'];
    $firelead=$_POST['firelead'];
    $firecomments=$_POST['firecomments'];
    $fireinitials=$_POST['fireinitials'];
    $crisislead=$_POST['crisislead'];
    $crisiscomments=$_POST['crisiscomments'];
    $crisisinitials=$_POST['crisisinitials'];
    $neglectlead=$_POST['neglectlead'];
    $neglectcomments=$_POST['neglectcomments'];
    $neglectinitials=$_POST['neglectinitials'];
    $policieslead=$_POST['policieslead'];
    $policiescomments=$_POST['policiescomments'];
    $policiesinitials=$_POST['policiesinitials'];
    $houselead=$_POST['houselead'];
    $housecomments=$_POST['housecomments'];
    $houseinitials=$_POST['houseinitials'];
    $rightlead=$_POST['rightlead'];
    $rightcomments=$_POST['rightcomments'];
    $rightinitials=$_POST['rightinitials'];
    $protectionlead=$_POST['protectionlead'];
    $protectioncomments=$_POST['protectioncomments'];
    $protectioninitials=$_POST['protectioninitials'];
    $timelead=$_POST['timelead'];
    $timecomments=$_POST['timecomments'];
    $timeinitials=$_POST['timeinitials'];
    $recordslead=$_POST['recordslead'];
    $recordcomments=$_POST['recordcomments'];
    $recordinitials=$_POST['recordinitials'];
    $clinicalsupervisor=$_POST['clinicalsupervisor'];
    $clinicalsupervisordate=$_POST['clinicalsupervisordate'];
    $sql=mysqli_query($conn,"INSERT INTO personnelorientation VALUES ('',
        '$employeename',
        '$date',
        '$firstdate',
        '$personelead',
        '$personelcomments',
        '$personelinitials',
        '$residentlead',
        '$residentcomments',
        '$residentinitials',
        '$leadfile',
        '$filecomments',
        '$fileinitials',
        '$joblead',
        '$jobcomments',
        '$jobinitials',
        '$leadcode',
        '$codecomments',
        '$codeinitials',
        '$employeelead',
        '$employeecomments',
        '$employeeinitials',
        '$pathlead',
        '$pathcomments',
        '$employeepath',
        '$firelead',
        '$firecomments',
        '$fireinitials',
        '$crisislead',
        '$crisiscomments',
        '$crisisinitials',
        '$neglectlead',
        '$neglectcomments',
        '$neglectinitials',
        '$policieslead',
        '$policiescomments',
        '$policiesinitials',
        '$houselead',
        '$housecomments',
        '$houseinitials',
        '$rightlead',
        '$rightcomments',
        '$rightinitials',
        '$protectionlead',
        '$protectioncomments',
        '$protectioninitials',
        '$timelead',
        '$timecomments',
        '$timeinitials',
        '$recordslead',
        '$recordcomments',
        '$recordinitials',
        '$clinicalsupervisor',
        '$clinicalsupervisordate',''  
    )");
    if ($sql) {
        $successmessage .='New Personnel orientation saved, Successefully';	
    }
    else {
        $errormessage .='Add Personnel orientation failed!';       
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
                                    <h5>Personnel Orientation</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Personnel Orientation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Personnel Orientation</a>
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
                                                            <label class=" col-form-label">Employee Name </label>
                                                            <input type="text" name="employeename" class="form-control form-control-normal"
                                                            placeholder="Enter Employee name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date of Hire</label>
                                                            <input type="date" name="date" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-12">
                                                            <label class=" col-form-label">First Date Providing Behavioral Services </label>
                                                            <input type="date" name="firstdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Personnel Introductions</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person </label>
                                                            <input type="text" name="personelead" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="personelcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="personelinitials" class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Introductions</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="residentlead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="residentcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="residentinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Personnel File</h5>  </label>
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="leadfile" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="filecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="fileinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Job Description</h5>  </label>
                                                        </div>
                                                       <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="joblead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="jobcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="jobinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Code of Conduct </h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="leadcode" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="codecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="codeinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Employee Competencies</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="employeelead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="employeecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="employeeinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Evacuation Path</h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="pathlead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="pathcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="employeepath" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Fire, Disaster, Hazard,  & Medical Emergency Procedures</h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="firelead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="firecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="fireinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Responding to a Resident in a Crisis Situation</h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="crisislead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="crisiscomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="crisisinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Immediate Reporting of Abuse, Neglect, 
                                                       Exploitation, Violation of Resident's Rights </h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="neglectlead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="neglectcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="neglectinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Policies and Procedures</h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="policieslead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="policiescomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="policiesinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>House Rules</h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="houselead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="housecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="houseinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Rights</h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="rightlead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="rightcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="rightinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Records: Location and Protection </h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="protectionlead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="protectioncomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="protectioninitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Work Schedules/Time Sheets</h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="timelead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="timecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="timeinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Records</h5></label>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="recordslead" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="recordcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"></textarea>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="recordinitials" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">
                                                        Director/ Clinical Supervisor</label>
                                                        
                                                            <input type="text" name="clinicalsupervisor" class="form-control form-control-normal"
                                                            placeholder="Enter  name">
                                                        
                                                        </div>                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">
                                                        Date</label>
                                                        
                                                            <input type="date" name="clinicalsupervisordate" class="form-control form-control-normal"
                                                            placeholder="Enter  name">
                                                        
                                                        </div> 
                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="submit" value="Add Orientation"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
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
                                                            <th>Employee Name</th>
                                                            <th>Date of Hire</th>
                                                            <th>First Date Providing Behavioral Services</th>
                                                           
                                                             <th>Personnel Introductions Lead Person</th>
                                                             <th>Personnel Introductions Comments</th>
                                                            <th>Personnel Introductions Employee Initials</th>
                                                            
                                                            <th>Resident Introductions Lead Person</th>
                                                            <th>Resident Introductions Comments</th>
                                                            <th>Resident Introductions Employee Initials</th>
                                                            <th>Personnel File Lead Person</th>
                                                            <th>Personnel File Comments</th>
                                                            <th>Personnel File Employee Initials</th>
                                                            <th>Job Description Lead Person</th>
                                                            <th>Job Description Comments</th>
                                                            <th>Job Description Employee Initials</th>
                                                            <th>Code of Conduct Lead Person</th>
                                                            <th>Code of Conduct Comments</th>
                                                            <th>Code of Conduct Employee Initials</th>
                                                            <th>Employee Competencies Lead Person</th>
                                                            <th>Employee Competencies Comments</th>
                                                            <th>Employee Competencies Employee Initials</th>
                                                            <th>Evacuation Path Lead Person</th>
                                                            <th>Evacuation Path Comments</th>
                                                            <th>Evacuation Path Employee Initials</th>
                                                            <th>Fire, Disaster, Hazard, & Medical Emergency Procedures Lead Person</th>
                                                            <th>Fire, Disaster, Hazard, & Medical Emergency Procedures Comments</th>
                                                            <th>Fire, Disaster, Hazard, & Medical Emergency Procedures Initials</th>
                                                            <th>Responding to a Resident in a Crisis Situation Lead Person</th>
                                                            <th>Responding to a Resident in a Crisis Situation Comments</th>
                                                            <th>Responding to a Resident in a Crisis Situation Initials</th>
                                                            <th>Immediate Reporting of Abuse, Neglect, Exploitation, Violation of Resident's Rights Lead Person</th>
                                                            <th>Immediate Reporting of Abuse, Neglect, Exploitation, Violation of Resident's Rights Comments</th>
                                                            <th>Immediate Reporting of Abuse, Neglect, Exploitation, Violation of Resident's Rights Initials</th>
                                                            <th>Policies and Procedures Lead Person</th>
                                                            <th>Policies and Procedures Comments</th>
                                                             <th>Policies and Procedures Employee Initials</th>
                                                            <th>House Rules Lead Person</th>
                                                            <th>House Rules Comments</th>
                                                            <th>House Rules Employee Initials</th>
                                                            <th>Resident Rights Lead Person</th>
                                                            <th>Resident Rights Comment</th>
                                                            <th>Resident Rights Employee Initial</th>
                                                            <th>Resident Records:Location and Protection Lead Person</th>
                                                            <th>Resident Records:Location and Protection Comment</th>
                                                            <th>Resident Records:Location and Protection Initials</th>
                                                            <th>Work Schedules/Time Sheets Lead Person</th>
                                                            <th>Work Schedules/Time Sheets Comment</th>
                                                            <th>Work Schedules/Time Sheets Initial</th>
                                                            <th>Resident Records Lead Person</th>
                                                            <th>Resident Records Comment</th>
                                                            <th>Resident Records initial</th>
                                                             <th>Director/ Clinical Supervisorl</th>
                                                             <th>Date</th>
                                                            
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                   <?php
                                                        $sel=mysqli_query($conn,"SELECT * FROM personnelorientation");
                                                        while ($row=mysqli_fetch_array($sel)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo $row['employeename']; ?></td>
                                                            <td><?php echo $row['date']; ?></td>
                                                            <td><?php echo $row['firstdate']; ?></td>
                                                            <td><?php echo $row['personelead']; ?></td>
                                                            <td><?php echo $row['personelcomments']; ?></td>
                                                            <td><?php echo $row['personelinitials']; ?></td>
                                                            <td><?php echo $row['residentlead']; ?></td>
                                                            <td><?php echo $row['residentcomments']; ?></td>
                                                            <td><?php echo $row['residentinitials']; ?></td>
                                                            <td><?php echo $row['leadfile']; ?></td>
                                                            <td><?php echo $row['filecomments']; ?></td>
                                                            <td><?php echo $row['fileinitials']; ?></td>
                                                            <td><?php echo $row['joblead']; ?></td>
                                                            <td><?php echo $row['jobcomments']; ?></td>
                                                            <td><?php echo $row['jobinitials']; ?></td>
                                                            <td><?php echo $row['leadcode']; ?></td>
                                                            <td><?php echo $row['codecomments']; ?></td>
                                                            <td><?php echo $row['codeinitials']; ?></td>
                                                            <td><?php echo $row['employeelead']; ?></td>
                                                            <td><?php echo $row['employeecomments'] ; ?></td>
                                                            <td><?php echo $row['employeeinitials'] ; ?></td>
                                                            <td><?php echo $row['pathlead'] ; ?></td>
                                                            <td><?php echo $row['pathcomments'] ; ?></td>
                                                            <td><?php echo $row['employeepath'] ; ?></td>
                                                            <td><?php echo $row['firelead'] ; ?></td>
                                                            <td><?php echo $row['firecomments'] ; ?></td>
                                                            <td><?php echo $row['fireinitials'] ; ?></td>
                                                            <td><?php echo $row['crisislead'] ; ?></td>
                                                            <td><?php echo $row['crisiscomments'] ; ?></td>
                                                            <td><?php echo $row['crisisinitials'] ; ?></td>
                                                            <td><?php echo $row['neglectlead'] ; ?></td>
                                                            <td><?php echo $row['neglectcomments']; ?></td>
                                                            <td><?php echo $row['neglectinitials']; ?></td>
                                                            <td><?php echo $row['policieslead']; ?></td>
                                                            <td><?php echo $row['policiescomments'] ; ?></td>
                                                            <td><?php echo $row['policiesinitials'] ; ?></td>
                                                            <td><?php echo $row['houselead'] ; ?></td>
                                                            <td><?php echo $row['housecomments'] ; ?></td>
                                                            <td><?php echo $row['houseinitials'] ; ?></td>
                                                            <td><?php echo $row['rightlead'] ; ?></td>
                                                            <td><?php echo $row['rightcomments'] ; ?></td>
                                                            <td><?php echo $row['rightinitials'] ; ?></td>
                                                            <td><?php echo $row['protectionlead'] ; ?></td>
                                                            <td><?php echo $row['protectioncomments'] ; ?></td>
                                                            <td><?php echo $row['protectioninitials'] ; ?></td>
                                                            <td><?php echo $row['timelead'] ; ?></td>
                                                            <td><?php echo $row['timecomments'] ; ?></td>
                                                             <td><?php echo $row['timeinitials'] ; ?></td>
                                                         <td><?php echo $row['recordslead'] ; ?></td>
                                                        <td><?php echo $row['recordcomments'] ; ?></td>
                                                        <td><?php echo $row['recordinitials'] ; ?></td>
                                                        <td><?php echo $row['clinicalsupervisor'] ; ?></td>
                                                        <td><?php echo $row['clinicalsupervisordate'] ; ?></td>
                                                          
                                                <td><a href="delete.php?delpersonnel=<?php  echo $row['id'] ?>"><span class="btn btn-danger">Delete</span></a></td>
                                                <td><a href="personnelorientationupdate.php?updatepersonnelorientation=<?php  echo $row['id'] ?>"><span class="btn btn-success">Update</span></a></td>
                                                <td><a class="btn btn-primary"  href="personnelorientationsign.php?id=<?php echo $row['id']; ?> "  id="red">Sign Now</a></td>
                                                <td><a href="printpersonnel.php?id=<?php  echo $row['id'] ?>"><span class="btn btn-primary">Print</span></a></td>
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