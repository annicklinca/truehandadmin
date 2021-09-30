<?php
include 'nav.php';
$user_id=$user_id;
$rec_id=$_GET['updatewarning']; 

if (isset($_POST['update'])){
    $name=$_POST['name'];
    $date_incident=$_POST['date_incident '];
    $incident=$_POST['incident'];
    $initials=$_POST['initials'];
    $resident_response=$_POST['resident_response'];
    $resident=$_POST['resident'];
    $residentdate=$_POST['residentdate'];
    $director=$_POST['director'];
    $directordate=$_POST['directordate'];

  
     $sql=mysqli_query($conn,"UPDATE warning SET 
    
    name='$name',
    date_incident='$incident',
    initials='$initials',
    resident_response='$resident_response',
     resident='$resident',
    residentdate='$residentdate',
    director='$director',
    directordate='$directordate'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update Warning Successfully';
            
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
                                    <h5>Notification of Fees</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Warning</a>
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
                                                if (isset($_GET['updatewarning'])) {
                                                    $orient_id=$_GET['updatewarning'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM warning WHERE warning.id=$orient_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                   <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h3>Written Warning  </h5>
                                                       <div class="col-sm-12">
                                                            <label class=" col-form-label">Offender Name</label>
                                                            <input type="text" name="name" value="<?php echo $row['name']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div><br>

                                                      <p>
                                            The safety and well-being of all residents, consumers and staff is a primary goal for management at TRUE HAND BEHAVIORAL AGENCY.  Therefore, any action taken by a resident or staff member that harms or endangers another resident or staff member cannot be tolerated.</p>    
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Date of Incident </label>
                                                            <input type="date" name="date_incident" value="<?php echo $row['date_incident']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Incident</label>
                                                            <textarea name="incident" class="form-control"><?php echo $row['incident'];?></textarea>
                                                        </div>
                                                        <br>
                                                        <p>
                                                            I understand that if I repeat this behavior that I may be terminated from the .  Your case manager will be notified of t TRUE HAND BEHAVIORAL AGENCY his incident and the consequences of repeating it explained.
                                                            </p>
                                                               <div class="col-sm-12">
                                                            <label class=" col-form-label">Initials</label>
                                                             <input type="date" name="initials" value="<?php echo $row['initials']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <br>


                                                          If I disagree with this warning or otherwise wish to respond I should do so in writing. 
                                                        
                                                        <div class="col-sm-12">
                                                            <label class=" col-form-label">Resident Response</label>
                                                         <textarea name="resident_response" class="form-control"><?php echo $row['resident_response']?></textarea>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Signature</label>
                                                            <input type="text" name="resident" value="<?php echo $row['resident'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                            <input type="date" name="residentdate" value="<?php echo $row['residentdate'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">House Manager/Director Signature </label>
                                                            <input type="text" name="director" value="<?php echo $row['director']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                           <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                            <input type="date" name="directordate" value="<?php echo $row['directordate'];?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update warning"
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