<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['update'])){


    $year=$_POST['year'];
    $residentmedication1=$_POST['residentmedication1'];
    $residentmedication2=$_POST['residentmedication2'];
    $residentmedication3=$_POST['residentmedication3'];
    $residentmedication4=$_POST['residentmedication4'];
    $medicationstore1=$_POST['medicationstore1'];
    $medicationstore2=$_POST['medicationstore2'];
    $medicationstore3=$_POST['medicationstore3'];
    $medicationstore4=$_POST['medicationstore4'];
    $currentmeds1=$_POST['currentmeds1'];
    $currentmeds2=$_POST['currentmeds2'];
    $currentmeds3=$_POST['currentmeds3'];
    $currentmeds4=$_POST['currentmeds4'];
    $oralmeds1=$_POST['oralmeds1'];
    $oralmeds2=$_POST['oralmeds2'];
    $oralmeds3=$_POST['oralmeds3'];
    $oralmeds4=$_POST['oralmeds4'];
    $medisets1=$_POST['medisets1'];
    $medisets2=$_POST['medisets2'];
    $medisets3=$_POST['medisets3'];
    $medisets4=$_POST['medisets4'];
    $expiremeds1=$_POST['expiremeds1'];
    $expiremeds2=$_POST['expiremeds2'];
    $expiremeds3=$_POST['expiremeds3'];
    $expiremeds4=$_POST['expiremeds4'];
    $currentrx1=$_POST['currentrx1'];
    $currentrx2=$_POST['currentrx2'];
    $currentrx3=$_POST['currentrx3'];
    $currentrx4=$_POST['currentrx4'];
    $refrigeration1=$_POST['refrigeration1'];
    $refrigeration2=$_POST['refrigeration2'];
    $refrigeration3=$_POST['refrigeration3'];
    $refrigeration4=$_POST['refrigeration4'];
    $firstaidkit1=$_POST['firstaidkit1'];
    $firstaidkit2=$_POST['firstaidkit2'];
    $firstaidkit3=$_POST['firstaidkit3'];
    $firstaidkit4=$_POST['firstaidkit4'];
    $manager=$_POST['manager'];
    $staff_name=$_POST['staff_name'];
    
    
 

 
   $sql=mysqli_query($conn,"UPDATE medreviewnote SET 
    
    year='$year',
    residentmedication1='$residentmedication1',
    residentmedication2='$residentmedication2',
    residentmedication3='$residentmedication3',
    residentmedication4='$residentmedication4',
    medicationstore1='$medicationstore1',
    medicationstore2='$medicationstore2',
    medicationstore3='$medicationstore3',
    medicationstore4='$medicationstore4',
    currentmeds1='$currentmeds1',
    currentmeds2='$currentmeds2',
    currentmeds3='$currentmeds3',
    currentmeds4='$currentmeds4',
    oralmeds1='$oralmeds1',
    oralmeds2='$oralmeds2',
    oralmeds3='$oralmeds3',
    oralmeds4='$oralmeds4',
    medisets1='$medisets1',
    medisets2='$medisets2',
    medisets3='$medisets3',
    medisets4='$medisets4',
    expiremeds1='$expiremeds1',
    expiremeds2='$expiremeds2',
    expiremeds3='$expiremeds3',  
    expiremeds4='$expiremeds4',
    currentrx1='$currentrx1',
    currentrx2='$currentrx2',
    currentrx3='$currentrx3',
    currentrx4='$currentrx4',
    refrigeration1='$refrigeration1',
    refrigeration2='$refrigeration2',
    refrigeration3='$refrigeration3',  
    refrigeration4='$refrigeration4',
    firstaidkit1='$firstaidkit1',
    firstaidkit2='$firstaidkit2',
    firstaidkit3='$firstaidkit3',
    firstaidkit4='$firstaidkit4',
    manager='$manager',
    staff_name='$staff_name'
    
   
  

 WHERE id='$rec_id';");
    if ($sql) {
        $successmessage .='Update medreview Successefully';
    }
    else {
        $errormessage .='Add medreview failed!';       
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
                                    <h5>Quarterly Medication Review Form</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Update content</a>
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
                                           <?php
                                        if (isset($_GET['updatemedreview'])) {
                                        $ser_id=$_GET['updatemedreview'];
                                        $sel=$conn->query("SELECT * from medreviewnote where id='$ser_id' ");
                                        while($rows=mysqli_fetch_array($sel))
                                         {
                                         ?>
                                         <h3>Medication Management Training Checklist</h3>
                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                               <label class="col-form-label">Year</label>
                                                            <input type="text" name="year" value="<?php echo $rows['year']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>Each resident's medication stored separately</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="residentmedication1" <?php if ($rows['residentmedication1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="residentmedication1" <?php if ($rows['residentmedication1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="residentmedication2" <?php if ($rows['residentmedication2']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="residentmedication2" <?php if ($rows['residentmedication2']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="residentmedication3" <?php if ($rows['residentmedication3']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio"  name="residentmedication3" <?php if ($rows['residentmedication3']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="residentmedication4" <?php if ($rows['residentmedication4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="residentmedication4" <?php if ($rows['residentmedication4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>Medication storage labeled with resident's name</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                          <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medicationstore1" <?php if ($rows['medicationstore1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medicationstore1" <?php if ($rows['medicationstore1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medicationstore2" <?php if ($rows['medicationstore2']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medicationstore2" <?php if ($rows['medicationstore2']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medicationstore3" <?php if ($rows['medicationstore3']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medicationstore3" <?php if ($rows['medicationstore3']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medicationstore4" <?php if ($rows['medicationstore4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medicationstore4" <?php if ($rows['medicationstore4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>

                                                    </div>


                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>Medisets labeled with resident's name, current meds, MD Name</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentmeds1" <?php if ($rows['currentmeds1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="currentmeds1" <?php if ($rows['currentmeds1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentmeds2" <?php if ($rows['currentmeds2']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="currentmeds2" <?php if ($rows['currentmeds2']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentmeds3" <?php if ($rows['currentmeds3']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="currentmeds3" <?php if ($rows['currentmeds3']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentmeds4" <?php if ($rows['currentmeds4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="currentmeds4" <?php if ($rows['currentmeds4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>Medications for external use are labeled and stored separately from oral meds</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="oralmeds1" <?php if ($rows['oralmeds1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="oralmeds1" <?php if ($rows['oralmeds1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="oralmeds2" <?php if ($rows['oralmeds2']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="oralmeds2" <?php if ($rows['oralmeds2']=='yes'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="oralmeds3" <?php if ($rows['oralmeds3']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="oralmeds3" <?php if ($rows['oralmeds3']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="oralmeds4" <?php if ($rows['oralmeds4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="oralmeds4" <?php if ($rows['oralmeds4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>Medication cabinet, storage bins and medisets are clean</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medisets1" <?php if ($rows['medisets1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medisets1" <?php if ($rows['medisets1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medisets2" <?php if ($rows['medisets2']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medisets2" <?php if ($rows['medisets2']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medisets3" <?php if ($rows['medisets3']=='no'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medisets3" <?php if ($rows['medisets3']=='yes'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medisets4" <?php if ($rows['medisets4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="medisets4" <?php if ($rows['medisets4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                        <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>All medications are current.  Expired meds have been destroyed and documented</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="expiremeds1" <?php if ($rows['expiremeds1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="expiremeds1" <?php if ($rows['expiremeds1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" <?php if ($rows['expiremeds2']=='yes'){echo 'checked';}?> name="expiremeds2" value="yes">yes
                                                            <input type="radio"  name="expiremeds2" <?php if ($rows['expiremeds2']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="expiremeds3" <?php if ($rows['expiremeds3']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="expiremeds3" <?php if ($rows['expiremeds3']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="expiremeds4" <?php if ($rows['expiremeds4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="expiremeds4" <?php if ($rows['expiremeds4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                      <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>Resident's medication orders updated and accurately reflect current Rx</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentrx1" <?php if ($rows['currentrx1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="currentrx1" <?php if ($rows['currentrx1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentrx2" <?php if ($rows['currentrx2']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="currentrx2" <?php if ($rows['currentrx2']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentrx3" <?php if ($rows['currentrx3']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="currentrx3" <?php if ($rows['currentrx3']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentrx4" <?php if ($rows['currentrx4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="currentrx4" <?php if ($rows['currentrx4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>Meds under refrigeration are locked & temperature is ≤ 41° F.</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                     <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="refrigeration1" <?php if ($rows['refrigeration1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="refrigeration1" <?php if ($rows['refrigeration1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="refrigeration2" <?php if ($rows['refrigeration2']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="refrigeration2" <?php if ($rows['refrigeration2']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="refrigeration3" <?php if ($rows['refrigeration3']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="refrigeration3" <?php if ($rows['refrigeration3']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="refrigeration4" <?php if ($rows['refrigeration4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="refrigeration4" <?php if ($rows['refrigeration4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>

                                                       <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h6>First aid kit complete and stored in accessible location</h6>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-3">
                                                         <label class="col-form-label">1ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="firstaidkit1" <?php if ($rows['firstaidkit1']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="firstaidkit1" <?php if ($rows['firstaidkit1']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="firstaidkit2" <?php if ($rows['firstaidkit2']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="firstaidkit2" <?php if ($rows['firstaidkit2']=='yes'){echo 'checked';}?> value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="firstaidkit3" <?php if ($rows['firstaidkit3']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="firstaidkit3" <?php if ($rows['firstaidkit3']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br> 
                                                            <input type="radio" name="firstaidkit4" <?php if ($rows['firstaidkit4']=='yes'){echo 'checked';}?> value="yes">yes
                                                            <input type="radio" name="firstaidkit4" <?php if ($rows['firstaidkit4']=='no'){echo 'checked';}?> value="no">no
                                                        </div>
                                                    </div>
                                                     
                                                    
                                                    
                                                    
                                                     

                                                     
                                                     <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Manager's Signature</label>
                                                        <input type="text" name="manager" value="<?php echo $rows['manager']?>" class="form-control"
                                                        placeholder="" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Names of Staff Authorized to give Medication</label>
                                                         <input type="text" name="staff_name" value="<?php echo $rows['staff_name']?>" class="form-control"
                                                        placeholder="Enter  cell phone" required="">
                                                    </div>
                                                    </div>

                                                      


                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Medication"
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