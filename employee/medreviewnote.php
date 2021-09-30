<?php
include 'nav.php';
$user_id=$user_id;
$id=$_GET['up']; 

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
   
 $sql=mysqli_query($conn,"INSERT INTO medreviewnote(year,residentmedication1,residentmedication2,residentmedication3,residentmedication4,medicationstore1,medicationstore2,medicationstore3,medicationstore4,currentmeds1,currentmeds2,currentmeds3,currentmeds4,oralmeds1,oralmeds2,oralmeds3,oralmeds4,medisets1,medisets2,medisets3,medisets4,expiremeds1,expiremeds2,expiremeds3,expiremeds4,currentrx1,currentrx2,currentrx3,currentrx4,refrigeration1,refrigeration2,refrigeration3,refrigeration4,firstaidkit1,firstaidkit2,firstaidkit3,firstaidkit4,manager,staff_name,user_id) VALUES ('$year',
        '$residentmedication1','$residentmedication2','$residentmedication3','$residentmedication4','$medicationstore1','$medicationstore2','$medicationstore3','$medicationstore4','$currentmeds1','$currentmeds2','$currentmeds3','$currentmeds4','$oralmeds1','$oralmeds2','$oralmeds3','$oralmeds4','$medisets1','$medisets2','$medisets3','$medisets4','$expiremeds1','$expiremeds2','$expiremeds3','$expiremeds4','$currentrx1','$currentrx2','$currentrx3','$currentrx4',  '$refrigeration1','$refrigeration2','$refrigeration3','$refrigeration4','$firstaidkit1','$firstaidkit2','$firstaidkit3','$firstaidkit4','$manager','$staff_name','$user_id')");
    if ($sql) {
        $successmessage .='New Medical Review saved, Successefully';    
    }
    else {
        $errormessage .='New Medical Review failed, try Again';     
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
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add content</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All content</a>
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
                                         <h3>Medication Management Training Checklist</h3>
                                                     <div class="form-group row">
                                                        <div class="col-sm-12">
                                                               <label class="col-form-label">Year</label>
                                                            <input type="text" name="year" class="form-control form-control-normal"
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
                                                            <input type="radio" name="residentmedication1" value="yes">yes
                                                            <input type="radio" name="residentmedication1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="residentmedication2" value="yes">yes
                                                            <input type="radio" name="residentmedication2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="residentmedication3" value="yes">yes
                                                            <input type="radio" name="residentmedication3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="residentmedication4" value="yes">yes
                                                            <input type="radio" name="residentmedication4" value="no">no
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
                                                            <input type="radio" name="medicationstore1" value="yes">yes
                                                            <input type="radio" name="medicationstore1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medicationstore2" value="yes">yes
                                                            <input type="radio" name="medicationstore2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medicationstore3" value="yes">yes
                                                            <input type="radio" name="medicationstore3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medicationstore4" value="yes">yes
                                                            <input type="radio" name="medicationstore4" value="no">no
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
                                                            <input type="radio" name="currentmeds1" value="yes">yes
                                                            <input type="radio" name="currentmeds1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentmeds2" value="yes">yes
                                                            <input type="radio" name="currentmeds2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentmeds3" value="yes">yes
                                                            <input type="radio" name="currentmeds3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentmeds4" value="yes">yes
                                                            <input type="radio" name="currentmeds4" value="no">no
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
                                                            <input type="radio" name="oralmeds1" value="yes">yes
                                                            <input type="radio" name="oralmeds1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="oralmeds2" value="yes">yes
                                                            <input type="radio" name="oralmeds2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="oralmeds3" value="yes">yes
                                                            <input type="radio" name="oralmeds3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="oralmeds4" value="yes">yes
                                                            <input type="radio" name="oralmeds4" value="no">no
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
                                                            <input type="radio" name="medisets1" value="yes">yes
                                                            <input type="radio" name="medisets1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medisets2" value="yes">yes
                                                            <input type="radio" name="medisets2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medisets3" value="yes">yes
                                                            <input type="radio" name="medisets3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="medisets4" value="yes">yes
                                                            <input type="radio" name="medisets4" value="no">no
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
                                                            <input type="radio" name="expiremeds1" value="yes">yes
                                                            <input type="radio" name="expiremeds1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="expiremeds2" value="yes">yes
                                                            <input type="radio" name="expiremeds2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="expiremeds3" value="yes">yes
                                                            <input type="radio" name="expiremeds3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="expiremeds4" value="yes">yes
                                                            <input type="radio" name="expiremeds4" value="no">no
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
                                                            <input type="radio" name="currentrx1" value="yes">yes
                                                            <input type="radio" name="currentrx1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentrx2" value="yes">yes
                                                            <input type="radio" name="currentrx2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentrx3" value="yes">yes
                                                            <input type="radio" name="currentrx3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="currentrx4" value="yes">yes
                                                            <input type="radio" name="currentrx4" value="no">no
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
                                                            <input type="radio" name="refrigeration1" value="yes">yes
                                                            <input type="radio" name="refrigeration1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="refrigeration2" value="yes">yes
                                                            <input type="radio" name="refrigeration2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="refrigeration3" value="yes">yes
                                                            <input type="radio" name="refrigeration3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="refrigeration4" value="yes">yes
                                                            <input type="radio" name="refrigeration4" value="no">no
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
                                                            <input type="radio" name="firstaidkit1" value="yes">yes
                                                            <input type="radio" name="firstaidkit1" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">2ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="firstaidkit2" value="yes">yes
                                                            <input type="radio" name="firstaidkit2" value="no">no
                                                        </div>
                                                         <div class="col-sm-3">
                                                         <label class="col-form-label">3ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="firstaidkit3" value="yes">yes
                                                            <input type="radio" name="firstaidkit3" value="no">no
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <label class="col-form-label">4ST Quarter</label>
                                                            <br>
                                                            <input type="radio" name="firstaidkit4" value="yes">yes
                                                            <input type="radio" name="firstaidkit4" value="no">no
                                                        </div>
                                                    </div>
                                                     
                                                    
                                                    
                                                    
                                                     

                                                     
                                                     <div class="form-group row">
                                                        <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Manager's Signature</label>
                                                        <input type="text" name="manager" class="form-control"
                                                        placeholder="" required="">
                                                    </div>
                                                       <div class="col-sm-6">
                                                        <label class="col-form-label text-dark">Names of Staff Authorized to give Medication</label>
                                                         <input type="text" name="staff_name" class="form-control"
                                                        placeholder="Enter  cell phone" required="">
                                                    </div>
                                                    </div>

                                                      


                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="add Medication"
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
                                                                    <th>Year</th>
                                                                    <th>medication stored Quarter 1</th>
                                                                     <th>medication stored Quarter 2</th>
                                                                    <th> medication stored Quarter 3</th>
                                                                     <th> medication stored Quarter 4</th>
                                                                    <th> storage labeled 1</th>
                                                                     <th> storage labeled 2</th>
                                                                    <th>storage labeled 3</th>
                                                                     <th>storage labeled 4</th>
                                                                    <th>Medisets labeled 1 </th>
                                                                     <th>Medisets labeled 2</th>
                                                                    <th>Medisets labeled 3</th>
                                                                     <th>Medisets labeled 4</th>
                                                                    <th>Medications for external use 1</th>
                                                                     <th>Medications for external use 2</th>
                                                                    <th>Medications for external use 3</th>
                                                                     <th>Medications for external use 4</th>
                                                                    <th>Medication cabinet</th>
                                                                     <th>Medication cabinet 1</th>
                                                                    <th>Medication cabinet 2</th>
                                                                     <th>Medication cabinet 3</th>
                                                                    <th>Medication cabinet 4</th>
                                                                    <th>Expired meds 1</th>
                                                                    <th>Expired meds 2</th>
                                                                     <th>Expired meds 3</th>
                                                                    <th>Expired meds 4</th>
                                                                     <th> Resident's medication orders 1</th>
                                                                    <th> Resident's medication orders 2</th>
                                                                     <th>Resident's medication orders 3</th>
                                                                    <th>Resident's medication orders 4</th>
                                                                      <th> Meds under refrigeration 1</th>
                                                                    <th> Meds under refrigeration 2</th>
                                                                     <th>Meds under refrigeration 3</th>
                                                                    <th>Meds under refrigeration 4</th>
                                                                     <th> First aid kit 1</th>
                                                                    <th> First aid kit 2</th>
                                                                     <th>First aid kit 3</th>
                                                                    <th>First aid kit 4</th>
                                                                     <th>Manager Name</th>
                                                                     <th>Names of Staff</th>
                                                                   
                                                                    
                                                                    <th>sign</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM medreviewnote ");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['year'] ; ?></td>
                                                                    <td><?php echo $row['residentmedication1'] ; ?></td>
                                                                    <td><?php echo $row['residentmedication2'] ; ?></td>
                                                                    <td><?php echo $row['residentmedication3'] ; ?></td>
                                                                    <td><?php echo $row['residentmedication4'] ; ?></td>
                                                                    <td><?php echo $row['medicationstore1'] ; ?></td>
                                                                    <td><?php echo $row['medicationstore2'] ; ?></td>
                                                                    <td><?php echo $row['medicationstore3'] ; ?></td>
                                                                    <td><?php echo $row['medicationstore4'] ; ?></td>
                                                                    <td><?php echo $row['currentmeds1'] ; ?></td>
                                                                    <td><?php echo $row['currentmeds2'] ; ?></td>
                                                                    <td><?php echo $row['currentmeds3'] ; ?></td>
                                                                    <td><?php echo $row['currentmeds4'] ; ?></td>
                                                                    <td><?php echo $row['oralmeds1'] ; ?></td>
                                                                    <td><?php echo $row['oralmeds2'] ; ?></td>
                                                                    <td><?php echo $row['oralmeds3'] ; ?></td>
                                                                    <td><?php echo $row['oralmeds4'] ; ?></td>
                                                                    <td><?php echo $row['medisets1'] ; ?></td>
                                                                    <td><?php echo $row['medisets2'] ; ?></td>
                                                                    <td><?php echo $row['medisets3'] ; ?></td>
                                                                    <td><?php echo $row['medisets4'] ; ?></td>
                                                                    <td><?php echo $row['expiremeds1'] ; ?></td>

                                                                <td><?php echo $row['expiremeds2'] ; ?></td>
                                                                    <td><?php echo $row['expiremeds3'] ; ?></td>
                                                                    <td><?php echo $row['expiremeds3'] ; ?></td>
                                                                    <td><?php echo $row['expiremeds4'] ; ?></td>
                                                                    <td><?php echo $row['currentrx1'] ; ?></td>
                                                                    <td><?php echo $row['currentrx2'] ; ?></td>
                                                                    <td><?php echo $row['currentrx3'] ; ?></td>
                                                                    <td><?php echo $row['currentrx4'] ; ?></td>
                                                                     <td><?php echo $row['refrigeration1'] ; ?></td>
                                                                    <td><?php echo $row['refrigeration2'] ; ?></td>
                                                                    <td><?php echo $row['refrigeration3'] ; ?></td>
                                                                    <td><?php echo $row['refrigeration4'] ; ?></td>
                                                                     <td><?php echo $row['firstaidkit1'] ; ?></td>
                                                                    <td><?php echo $row['firstaidkit2'] ; ?></td>
                                                                    <td><?php echo $row['firstaidkit3'] ; ?></td>
                                                                    <td><?php echo $row['firstaidkit4'] ; ?></td>
                                                                    <td><?php echo $row['manager'] ; ?></td>
                                                                    <td><?php echo $row['staff_name'] ; ?></td>
                                                                 
                                                                  
                                                                    <td><a class="btn btn-success" href="reviewnotesign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="reviewnoteprint.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delmedreviewnote=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this med review.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="reviewnoteupdate.php?updatemedreview=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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