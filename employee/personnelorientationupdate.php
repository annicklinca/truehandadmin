<?php
 include 'nav.php';
 $user_id=$user_id;
 $rec_id=$_GET['updatepersonnelorientation']; 

 if (isset($_POST['update'])){
    
    
     
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
    
   
    
   
    
    
    

       $sql=mysqli_query($conn,"UPDATE personnelorientation SET 
    
    employeename='$employeename',
    date='$date',
    firstdate='$firstdate',
    personelead='$personelead',
    personelcomments='$personelcomments',
    personelinitials='$personelinitials',
    residentlead='$residentlead',
    residentcomments='$residentcomments',
    residentinitials='$residentinitials',
    leadfile='$leadfile',
    filecomments='$filecomments',
    fileinitials='$fileinitials',
    joblead='$joblead',
    jobcomments='$jobcomments',
    jobinitials='$jobinitials',
    leadcode='$leadcode',
    codecomments='$codecomments',
    codeinitials='$codeinitials',
    employeelead='$employeelead',
    employeecomments='$employeecomments',
    employeeinitials='$employeeinitials',
    pathlead='$pathlead',
    pathcomments='$pathcomments',
    employeepath='$employeepath',  
    firelead='$firelead',
    firecomments='$firecomments',
    fireinitials='$fireinitials',
    crisislead='$crisislead',
    crisiscomments='$crisiscomments',
    crisisinitials='$crisisinitials',
    neglectlead='$neglectlead',
    neglectcomments='$neglectcomments',
    neglectinitials='$neglectinitials',
    policieslead='$policieslead',
    policiescomments='$policiescomments',
    policiesinitials='$policiesinitials',
    houselead='$houselead',
    housecomments='$housecomments',
    houseinitials='$houseinitials',
    rightlead='$rightlead',
    rightcomments='$rightcomments',
    rightinitials='$rightinitials',
    protectionlead='$protectionlead',
    protectioncomments='$protectioncomments',
    protectioninitials='$protectioninitials',
    timelead='$timelead',
    timecomments='$timecomments',
    timeinitials='$timeinitials',
    recordslead='$recordslead',
    recordcomments='$recordcomments',
    recordinitials='$recordinitials',
    clinicalsupervisor='$clinicalsupervisor'
    
   
  

 WHERE id='$rec_id';");
    if ($sql) {
        $successmessage .='Update personal Successefully';
    }
    else {
        $errormessage .='Add contact failed!';       
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
                                                                    <a href="personnelorientation.php"><button class="btn btn-success">Go to personnel page</button></a>
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
                                                                  <a href="personnelorientation.php"><button class="btn btn-success">Go to personnel page</button></a>
                                                              </div>
                                                          </div>
                                                      </div>
                                                  ';
                                                }
                                                ?>
                                        <?php
                                        if (isset($_GET['updatepersonnelorientation'])) {
                                        $ser_id=$_GET['updatepersonnelorientation'];
                                        $sel=$conn->query("SELECT * from personnelorientation where id='$ser_id' ");
                                        while($rows=mysqli_fetch_array($sel))
                                         {
                                         ?>
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Employee Name </label>
                                                            <input type="text" name="employeename" value="<?php echo $rows['employeename']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Employee name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date of Hire</label>
                                                            <input type="date" name="date" value="<?php echo $rows['date']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-12">
                                                            <label class=" col-form-label">First Date Providing Behavioral Services </label>
                                                            <input type="date" name="firstdate" value="<?php echo $rows['firstdate']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Personnel Introductions</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person </label>
                                                            <input type="text" name="personelead" value="<?php echo $rows['personelead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  Lead Person">
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="personelcomments"  class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['personelcomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="personelinitials" value="<?php echo $rows['personelinitials']; ?>"class="form-control form-control-normal"
                                                            placeholder="Enter Employee initials">
                                                        </div>
                                                       
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Introductions</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="residentlead" value="<?php echo $rows['residentlead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="residentcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['residentcomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="residentinitials" value="<?php echo $rows['residentinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Personnel File</h5>  </label>
                                                        </div>
                                                         <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="leadfile" value="<?php echo $rows['leadfile']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="filecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['filecomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="fileinitials" value="<?php echo $rows['fileinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Job Description</h5>  </label>
                                                        </div>
                                                       <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="joblead" value="<?php echo $rows['joblead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="jobcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['printlanguage']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="jobinitials" value="<?php echo $rows['jobinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Code of Conduct </h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="leadcode" value="<?php echo $rows['leadcode']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="codecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['codecomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="codeinitials" value="<?php echo $rows['codeinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Employee Competencies</h5>  </label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="employeelead" value="<?php echo $rows['employeelead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="employeecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['employeecomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="employeeinitials" value="<?php echo $rows['employeeinitials']; ?>"class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Evacuation Path</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="pathlead" value="<?php echo $rows['pathlead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="pathcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['pathcomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="employeepath" value="<?php echo $rows['employeepath']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Fire, Disaster, Hazard,  & Medical Emergency Procedures</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="firelead" value="<?php echo $rows['firelead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="firecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet">"<?php echo $rows['firecomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="fireinitials" value="<?php echo $rows['fireinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Responding to a Resident in a Crisis Situation</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="crisislead" value="<?php echo $rows['crisislead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="crisiscomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet">"<?php echo $rows['crisiscomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="crisisinitials" value="<?php echo $rows['crisisinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Immediate Reporting of Abuse, Neglect, 
                                                       Exploitation, Violation of Resident's Rights </h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="neglectlead" value="<?php echo $rows['neglectlead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="neglectcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['neglectcomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="neglectinitials" value="<?php echo $rows['neglectinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Policies and Procedures</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="policieslead" value="<?php echo $rows['policieslead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="policiescomments"  class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['policiescomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="policiesinitials" value="<?php echo $rows['policiesinitials']; ?>"class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>House Rules</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="houselead" value="<?php echo $rows['houselead']; ?>"  class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="housecomments"  class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['housecomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="houseinitials" value="<?php echo $rows['houseinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Rights</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="rightlead" value="<?php echo $rows['rightlead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="rightcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['rightcomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="rightinitials" value="<?php echo $rows['rightinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Records: Location and Protection </h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="protectionlead" value="<?php echo $rows['protectionlead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="protectioncomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['protectioncomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="protectioninitials" value="<?php echo $rows['protectioninitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Work Schedules/Time Sheets</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="timelead" value="<?php echo $rows['timelead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="timecomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['timecomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="timeinitials" value="<?php echo $rows['timeinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        <h5>Resident Records</h5></label>
                                                        </div>
                                                        <div class="col-sm-2">
                                                            <label class=" col-form-label">Lead Person</label>
                                                            <input type="text" name="recordslead" value="<?php echo $rows['recordslead']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                         <div class="col-sm-4">
                                                            <label class=" col-form-label">Comments (include methods and hours applied) </label>
                                                            <textarea name="recordcomments" class="form-control form-control-normal"
                                                            placeholder="Enter commet"><?php echo $rows['recordcomments']; ?></textarea>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class=" col-form-label">Employee Initials</label>
                                                            <input type="text" name="recordinitials" value="<?php echo $rows['recordinitials']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  initials">
                                                        </div> 
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">
                                                        Director/ Clinical Supervisor</label>
                                                        
                                                            <input type="text" name="clinicalsupervisor" value="<?php echo $rows['clinicalsupervisor']; ?>" class="form-control form-control-normal"
                                                            placeholder="Enter  name">
                                                        
                                                        </div> 
                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Orientation"
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