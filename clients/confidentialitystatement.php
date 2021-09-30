<?php
include 'nav.php';
$user_id=$user_id;
if (isset($_POST['addconfidential'])){
    $PersonnelName=$_POST['PersonnelName'];
    $Supervisor=$_POST['Supervisor'];
    $sql=mysqli_query($conn,"INSERT INTO confidentialitystatement(PersonnelName,Supervisor,resident_id,user_id) VALUES ('$PersonnelName','$Supervisor','$residentid','$user_id')");
    if ($sql) {
        $successmessage .='Add confidentiality statement Successefully';	
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
                                    <h5>Confidentiality Statement Review</h5>
                                    <hr>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active text-uppercase" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Add Confidentiality Statement Review</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-uppercase" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">All Confidentiality Statement Review</a>
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
                                                        <label class="col-sm-12 col-form-label">
                                                        <h3>Confidentiality Statement Review</h3></label>
                                                        <div class="col-sm-12">
                                                            <p>Confidentiality of records must be maintained by all personnel having access to client records.  Information shall not be given to anyone unless the appropriate release forms have been completed and signed.  Completed forms must include the person or agency designated to receive information and only that person or agency can receive information.  No personnel person is to discuss the client or a client's problem areas with members of their family, friends or representatives from unauthorized agencies.  Personnel shall not give out client records or copies of such to persons or agencies or use for personal reasons.  Information contained in client records shall be kept confidential pursuant to current requirements.  Release of information forms shall indicate the person and agency to receive the information, the specific information to be released, the expiration date of the release, and shall be signed by the client and client's guardian.</p>
                                                            <p>Program records concerning clients in care and their families are confidential, and the program shall not disclose or knowingly permit the disclosure of confidential information.  Records shall be maintained in a secure place, in a manner that preserves confidentiality and prevents loss, tampering, or unauthorized use.  It is the policy of the program to govern the ethical conduct of personnel and agency volunteers in adherence to the policy of confidentiality of client information and client records.</p>
                                                            <p>Unauthorized release of confidential information is grounds for immediate dismissal.  If in doubt about any request for information seek clarification from a supervisor first.</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Personnel Name</label>
                                                            <input type="text" name="PersonnelName" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label class="col-form-label">Supervisor</label>
                                                            <input type="text" name="Supervisor" class="form-control form-control-normal"
                                                            placeholder="">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group row">
                                                        <div class="col-sm-12">
                                                            <input type="submit" name="addconfidential" value="Add confidential"
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
                                                                    <th>PersonnelName</th>
                                                                    <th>Supervisor</th>
                                                                    <th>sign</th>
                                                                    <th>print</th>
                                                                    <th>delete</th>
                                                                    <th>Update</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                            <?php
                                                                $quer=mysqli_query($conn,"SELECT * FROM confidentialitystatement WHERE user_id=$user_id");
                                                                while ($row=mysqli_fetch_array($quer)){
                                                                ?>
                                                                <tr>
                                                                <td><?php echo $row['id'] ; ?></td>
                                                                    <td><?php echo $row['PersonnelName'] ; ?></td>
                                                                    <td><?php echo $row['Supervisor'] ; ?></td>
                                                                    <td><a class="btn btn-success" href="confidentialitystatementsign.php?id=<?php echo $row['id']; ?>"  id="red">Sign</a></td>
                                                                    <td><a class="btn btn-success" href="printconfidentialitystatement.php?id=<?php echo $row['id']; ?>"  id="red">Print</a></td>
                                                                    <td><a class="btn btn-danger" href="delete.php?delconfidentialitystatement=<?php echo $row['id']; ?>" onclick="return confirm('are you sure! you want to delete this confidentiality statement.')" id="red">Delete</a></td>
                                                                    <td><a class="btn btn-primary" href="confidentialitystatementupdate.php?updateconfidentialitystatement=<?php echo $row['id']; ?>"  id="red">Update</a></td>
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