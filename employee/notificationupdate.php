<?php
include 'nav.php';
$user_id=$user_id;
 $rec_id=$_GET['updatenotification']; 

if (isset($_POST['update'])){
    $fees=$_POST['fees'];
    $resident=$_POST['resident'];
    $residentdate=$_POST['residentdate'];
    $agent=$_POST['agent'];
    $agentdate=$_POST['agentdate'];
    $personnel=$_POST['personnel'];
    $personneldate=$_POST['personneldate'];

  
    $sql=mysqli_query($conn,"UPDATE noticationfees SET 
    
    fees='$fees',
    resident='$resident',
    residentdate='$residentdate',
    agent='$agent',
    agentdate='$agentdate',
    personnel='$personnel',
    personneldate='$personneldate' WHERE id=$rec_id;");
    if ($sql) {
        $successmessage .='Update Notification Fees Successefully';
            
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
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Notification of Fees</a>
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
                                                if (isset($_GET['updatenotification'])) {
                                                    $orient_id=$_GET['updatenotification'];
                                                    $quer=mysqli_query($conn,"SELECT * FROM noticationfees WHERE noticationfees.id=$orient_id");
                                                    while ($row=mysqli_fetch_array($quer)){
                      
                                                        ?>
                                                   <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h3>Notification of Fees</h5>
                                                            <p>As you may be aware, there are expenses related to your stay with TRUE HAND BEHAVIORAL AGENCY.  These fees or day rate are covered by the agency that placed you here.
                                                        The daily rate charged for the services, accommodations, lodging and related care costs is 

                                                      $ ______________</p>
                                                       <div class="col-sm-12">
                                                            <label class=" col-form-label">Services Fees</label>
                                                            <input type="text" name="fees" value="<?php echo $row['fees']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>

                                                      <p>
                                                 Should this rate increase, the new daily rate will be posted in a prominent place within the house and available for your review and the review of your guardian or designated agent.  This posting will occur no later than 30 days before the change becomes effective.
                                                Additionally, a letter will be presented to you addressing the new daily rate and one mailed to your placing agency representative also no later than 30 days prior to the change becoming effective.
                                                  Your signature below indicates your understanding of the above daily fee rate policy.
</p>    
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Signature </label>
                                                            <input type="text" name="resident" value="<?php echo $row['resident']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="residentdate" value="<?php echo $row['residentdate']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Agent Signature</label>
                                                            <input type="text" name="agent" value="<?php echo $row['agent']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="agentdate" value="<?php echo $row['agentdate']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Personnel Signature </label>
                                                            <input type="text" name="personnel" value="<?php echo $row['personnel']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                            <input type="date" name="personneldate" value="<?php echo $row['personneldate']?>" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="update" value="Update Notification"
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