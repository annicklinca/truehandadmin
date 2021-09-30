<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['add'])){
    
    $resident=$_POST['resident'];
    $residentdate=$_POST['residentdate'];
    $agent=$_POST['agent'];
    $agentdate=$_POST['agentdate'];
    $personnel=$_POST['personnel'];
    $personneldate=$_POST['personneldate'];

    $sql=mysqli_query($conn,"INSERT INTO consenttreatment VALUES ('','$resident','$residentdate','$agent','$agentdate','$personnel','$personneldate','$user_id')");
    if ($sql) {
        $successmessage .='New Consent of Treatment saved, Successefully';  
    }
    else {
        $errormessage .='New Consent of Treatment failed, try Again';       
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
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                           <h3>Consent for Treatment </h5>
                                                            <label class=" col-form-label">The consent for treatment fonn records your approval of the care outlined within your treatment plan.</label>
                                                            <label class=" col-form-label">Before you sign this fonn listen to the personnel member cover the following items: </label>
                                                            <ol>
                                                               <li>Treatment being proposed for you. </li>
                                                               <li>Intended outcome, nature, and procedures of the proposed treatment</li>
                                                               <li>Any risks and side effects of the proposed treatment. </li>
                                                               <li>Risks associated with NQT proceeding with the proposed treatment. </li>
                                                               <li>Alternatives to the proposed treatment.  </li>
                                                            </ol>
                                                            <label class=" col-form-label">Alternatives to the proposed treatment. </label>               
                                                             <label class=" col-form-label">Consent to treatment is voluntary and you may decline !it any time. </label>
                                                             <label class=" col-form-label">Your signature below is indicatir)g that you understand the above treatment outline and approve of the agency providing you services related to meetiµg the gpals of your proposed treatment plan.</label>    
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Signature </label>
                                                            <input type="text" name="resident" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="residentdate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Resident Agent Signature</label>
                                                            <input type="text" name="agent" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date</label>
                                                            <input type="date" name="agentdate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Personnel Signature </label>
                                                            <input type="text" name="personnel" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class=" col-form-label">Date </label>
                                                            <input type="date" name="personneldate" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    


                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="add" value="Add Consent Treatment"
                                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
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
                                                            <th>Resident Signature</th>
                                                            <th>Date</th>
                                                            <th>Agent Signature</th>
                                                            <th>date</th>
                                                            <th>Pessonnel Signature</th>
                                                            <th>date</th>
                                                            <th>Delete</th>
                                                            <th>Update</th>
                                                            <th>Sign</th>
                                                            <th>Print</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $quer=mysqli_query($conn,"SELECT * FROM consenttreatment");
                                                        while ($row=mysqli_fetch_array($quer)){
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $row['id'] ; ?></td>
                                                            <td><?php echo $row['resident']; ?></td>
                                                            <td><?php echo $row['residentdate']; ?></td>
                                                            <td><?php echo $row['agent']; ?></td>
                                                            <td><?php echo $row['agentdate'] ; ?></td>
                                                            <td><?php echo $row['personnel'] ; ?></td>
                                                            <td><?php echo $row['personneldate'] ; ?></td>
                                                            <td><a class="btn btn-danger"  href="delete.php?delconsenttreatment=<?php echo $row['id']; ?> " onclick="return confirm('are you sure! you want to delete this consent of treatment.')" id="red">Delete</a></td>
                                                            <td><a class="btn btn-primary"  href="consenttreatmentupdate.php?updateconsenttreatment=<?php echo $row['id']; ?>"  id="red">Update</a></td>
                                                            <td><a class="btn btn-primary"  href="consenttreatmentsign.php?id=<?php echo $row['id']; ?> "  id="red">Sign </a></td>
                                                            <td><a class="btn btn-success"  href="consenttreatmentprint.php?printconsenttreatment=<?php echo $row['id']; ?>"  id="red">Print</a></td>
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