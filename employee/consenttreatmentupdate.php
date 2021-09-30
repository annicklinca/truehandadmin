<?php
include 'nav.php';
$user_id=$user_id;
$rec_id=$_GET['updateconsenttreatment'];

if (isset($_POST['update'])){
    
    $resident=$_POST['resident'];
    $residentdate=$_POST['residentdate'];
    $agent=$_POST['agent'];
    $agentdate=$_POST['agentdate'];
    $personnel=$_POST['personnel'];
    $personneldate=$_POST['personneldate'];

     $sql=mysqli_query($conn,"UPDATE consenttreatment SET 
    
    resident='$resident',
    residentdate='$residentdate',
    agent='$agent',
    agentdate='$agentdate',
    personnel='$personnel',
    personneldate='$personneldate'
    WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update Reciept of Information Successefully';
            
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
                                    <h5>Consent Treatment</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Consent Treatment  </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Consent Treatment</a>
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
                                                if (isset($_GET['updateconsenttreatment'])) {
                                                    $recp_id=$_GET['updateconsenttreatment'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM consenttreatment WHERE consenttreatment.id=$recp_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Signature</label>
                                                            <input type="text" value="<?php echo $row['resident']; ?>" name="resident" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['residentdate']; ?>" name="residentdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Agent Signature</label>
                                                            <input type="text" value="<?php echo $row['agent']; ?>" name="agent" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" value="<?php echo $row['agentdate']; ?>" name="agentdate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Personnel Signature </label>
                                                            <input type="text" value="<?php echo $row['personnel']; ?>" name="personnel" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                            <input type="date" value="<?php echo $row['personneldate']; ?>" name="personneldate" class="form-control form-control-normal"
                                                            placeholder="Enter Resident name">
                                                        </div>
                                                    </div>
                                                    </div>


                                                   <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Consent Treatment"
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